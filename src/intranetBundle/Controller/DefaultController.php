<?php
namespace intranetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use intranetBundle\Model\Model;
use intranetBundle\Entity\Entity\Users;
use intranetBundle\Entity\Entity\Tasks;
use intranetBundle\Entity\Entity\NewFeed;
use intranetBundle\Entity\Entity\Channel;
use intranetBundle\Entity\Entity\userschannel;
use intranetBundle\Entity\Entity\userstasks;
use intranetBundle\Entity\Entity\channelnew_feed;
use intranetBundle\Entity\Entity\F_Expenses;
use intranetBundle\Entity\Entity\F_Hours;
use intranetBundle\Entity\Entity\F_Trip;
use intranetBundle\Entity\Entity\F_Vacation;
use intranetBundle\Entity\Entity\Users_F_Hours;
use intranetBundle\Entity\Entity\Users_F_Vacation;
use intranetBundle\Entity\Entity\Users_F_Expenses;
use intranetBundle\Entity\Entity\Users_F_Trip;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Query\Expr\Join;

class DefaultController extends Controller{


  //Verify LDAP credentials
  //link LDAP with the database if not, creates a new user in DB
  public function loginAction(){
    $ldaprdn  = $_POST['login'];     // ldap rdn or dn
    $ldappass =$_POST['pass'];

    $m = new Model();
    $params = array('user' => $m->login($ldaprdn,$ldappass),);

    //Once found the user in the LDAP Directory, Store his credentials in variables
    $userLDAP=json_decode(json_encode($params), true);
    $logged=$userLDAP['user'][0]['samaccountname'][0];
    $rol=$userLDAP['user'][0]['memberof'][0];
    $name=$userLDAP['user'][0]['givenname'][0];
    $surname=$userLDAP['user'][0]['sn'][0];

    //Method which split the whole role returned from LDAP used to know if the user is admin or not
    $m = new Model();
    $r = $m->getSplitRole($rol);

    $_SESSION['name']=$name;         //NAME
    $_SESSION['surname']=$surname;   //SURNAME
    $_SESSION['userLDAP']=$logged;   //LOGIN
    $_SESSION['rol']=$r[1];          //Admin, Buo, User

    //Search the user in the local database with the credentials introduced before
    $user = $this->getDoctrine()
                 ->getRepository('intranetBundle:Entity\Users')
                 ->findOneByLogin($logged);

    $params=array(
      'login'=>$logged,
      'name'=>$name,
      'surname'=>$surname,
      'rol'=>$rol[1]
    );

    if (!$user) {
      //If the user doesn't exists, redirect to another routing path to create one
      return $this->redirect($this->generateUrl('intranet_nonExistingUserA'));
    }else{
      //The user exists and store it to use on the template
      $params=array('user'=>$user);
      return $this->render('intranetBundle:Default:landinga.html.twig', $params);
    }
  }

  //Method which obtains the values from the LDAP Directory and redirects to the form to create the new User
  public function createUserAAction(){
    $params=array(
      'login'=>$_SESSION['userLDAP'],
      'name'=>$_SESSION['name'],
      'surname'=>$_SESSION['surname'],
      'rol'=>$_SESSION['rol']
    );
    return $this->render('intranetBundle:Error:error_login.html.twig', $params);
  }

    //Method which persist the object to the database with the form inputs
  public function createUserAction(){
     //Persist via doctrine
     $newuser = new Users();
     $newuser->setLogin($_REQUEST['myLogin']);
     $newuser->setNameU($_REQUEST['myName']);
     $newuser->setSurnameU($_REQUEST['mySurname']);
     $newuser->setLang($_REQUEST['myLang']);
     $newuser->setPhoto($_REQUEST['myPhoto']);
     $newuser->setOnboard(0);
     $newuser->setNotifications($_REQUEST['myNotifications']);

     $em = $this->getDoctrine()->getManager();
     $em->persist($newuser);
     $em->flush();


     //If an admin is creating the user ->redirect to the userManagement
     if(isset($_REQUEST['webCuisine']) && $_REQUEST['webCuisine']=="test"){
          return $this->redirect($this->generateUrl('intranet_userManagement'));
     }else{//if not, it means the user is connecting to the intranet

         //Once the users exists in the database, redirect him to the intranet
         $user = $this->getDoctrine()
                       ->getRepository('intranetBundle:Entity\Users')
                       ->findOneByLogin($_SESSION['userLDAP']);
         $params=array('user'=>$user);
         return $this->render('intranetBundle:Default:landinga.html.twig', $params);
      }
   }

  public function indexAction(){
     return $this->render('intranetBundle:Default:landing.html.twig');
  }

  public function formHoursAction(){
      return $this->render('intranetBundle:Default:formHours.html.twig');
  }

  public function formVacationAction(){
       return $this->render('intranetBundle:Default:formVacations.html.twig');
  }

  public function formRequestAction(){
       return $this->render('intranetBundle:Default:formRequest.html.twig');
   }

  public function formExpensesAction(){
        return $this->render('intranetBundle:Default:formExpenses.html.twig');
  }

      public function newsAction(){
        //Obtains all the news ordered by date DESC
        $allNews = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\NewFeed')
                        ->findBy([], ['date' => 'DESC', 'time' => 'DESC']); #findAll

        //TODO
        if (!$allNews) {
          throw $this->createNotFoundException('No news found');
        }

        $params= array('new' => $allNews);
        return $this->render('intranetBundle:Default:news.html.twig',$params);
      }

      public function tasksAction(){
       $tareas = $this->getDoctrine()
                      ->getRepository('intranetBundle:Entity\Tasks')
                      ->findAll(array());

        $tasks = [];

        foreach ($tareas as $index => $object) {
          array_push($tasks, [$object->getId(),
                    $object->getTitle(),
                    $object->getContent(),
                    $object->getWhoCreate()]);
        }

       //TODO
       if (!$tareas) {throw $this->createNotFoundException('No product found for id '.$id);}


       $params=array('listTasks'=>$tasks, 'rol'=>$_SESSION['rol'], 'userLogin'=>$_SESSION['userLDAP']);
       return $this->render('intranetBundle:Default:tasks.html.twig',$params);
      }

      public function channelsAction(){
         $channels = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\Channel')
                        ->findAll();

        //TODO
         if (!$channels) {throw $this->createNotFoundException('No product found for id '.$id);}

         $params=array('listChannels'=>$channels);
         return $this->render('intranetBundle:Default:channels.html.twig',$params);
      }

     public function userManagementAction(){

        $usuario = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\Users')
                        ->findAll(); #findAll

        //TODO
        if (!$usuario) {throw $this->createNotFoundException('No product found for id '.$id);}
        $params=array('listUsers'=>$usuario);
        return $this->render('intranetBundle:Default:userManagement.html.twig',$params);
     }

      public function settingsAction(){
          //if the user is active or the admin is modifyng another user
          if(isset($_REQUEST['isAdmin'])){
            $usuario = $this->getDoctrine()->getRepository('intranetBundle:Entity\Users')->findOneByLogin($_REQUEST['login']);
            $params=array('me'=>$usuario);
            return $this->render('intranetBundle:Default:settingsForAdmin.html.twig',$params);
          }else{
              $usuario = $this->getDoctrine()->getRepository('intranetBundle:Entity\Users')->findOneByLogin($_SESSION['userLDAP']); #findAll
              $params=array('me'=>$usuario);
              return $this->render('intranetBundle:Default:settings.html.twig',$params);
          }

          //TODO
          if (!$usuario) {throw $this->createNotFoundException('No product found for id '.$id);}

          //return $this->render('intranetBundle:Default:settings.html.twig',$params);
      }

      public function logoutAction(){
        unset($_SESSION["nome"]);
        return $this->render(
          'intranetBundle:Default:index.html.twig'
         );
      }


#USERS

       public function addUserAction(){
         $channels = $this->getDoctrine()
                          ->getRepository('intranetBundle:Entity\Channel')
                          ->findAll();
         $params=array('listChannels'=>$channels);
         return $this->render('intranetBundle:Default:newuser.html.twig', $params);
       }

       public function updateUserAction(){
         if (isset($_POST['update'])) {
             return self::updatUserAction();
         } else if (isset($_POST['delete'])) {
             return self::deletUserAction();
         }
       }

       public function updatUserAction(){
           $em = $this->getDoctrine()->getManager();
           $product = $em->getRepository('intranetBundle:Entity\Users')->findOneByLogin($_REQUEST['myLogin']);

           #UPSERT => Si no existe, tengo que hacer insert, pero si existe previamente, hay que ver si se borra(actualiza)
           #       => Ya existe un usuario con ese Login

           $product->setLogin($_REQUEST['myLogin']);
           $product->setNameU($_REQUEST['myName']);
           $product->setSurnameU($_REQUEST['mySurname']);
           $product->setLang($_REQUEST['myLanguage']);
           $product->setPhoto($_REQUEST['myPhoto']);
           if(isset($_REQUEST['myOnboard'])){
                $product->setOnboard(1);
            }
           $product->setNotifications($_REQUEST['myNotifications']);
           $em->flush();
           //TODO
            #UPSERT => Si no existe, tengo que hacer insert, pero si existe previamente, hay que ver si se borra(actualiza)
            #       => Ya existe un usuario con ese Login
            #           $intermediate = $em->getRepository('intranetBundle:Entity\userschannel')->findOneByIdNew($_REQUEST['myLogin']);
            #           $intermediate->setName($_REQUEST['channel']);
            #           $em->flush();

           //if ADMIN, USERMANAGEMENT
           if($_SESSION['rol']=="Admin")
           return self::userManagementAction();
           //IF NOT, HOMEPAGE
           else return $this->render('intranetBundle:Default:landing.html.twig');
       }

       public function deletUserAction(){
           $em = $this->getDoctrine()->getManager();
           $product = $em->getRepository('intranetBundle:Entity\Users')->findOneById([$_REQUEST['id']]);
           $em->remove($product);
           $em->flush();

           $intermediate = $em->getRepository('intranetBundle:Entity\userschannel')->findByLogin([$_REQUEST['myLogin']]);
           //For each element in the intermediate table, it is necessary to delete all of them
           foreach ($intermediate as $index => $object) {
             $em->remove($object);
             $em->flush();
           }

           $intermediate = $em->getRepository('intranetBundle:Entity\userstasks')->findByLogin([$_REQUEST['myLogin']]);
           //For each element in the intermediate table, it is necessary to delete all of them
           foreach ($intermediate as $index => $object) {
             $em->remove($object);
             $em->flush();
           }

           return self::userManagementAction();
       }


#FORMS

        //In this page we can see all the forms send, order by non-read forms, date and type.
        public function incomingFormsAction(){

          //It is necessary to put all the forms of all tables in a big array and pour it into a table, which is viewed.
          //Not only all forms, but also the user who sent it.

          //WORST OPTION => DO IT MANUALLY => ON THE VIEW
          //I can do the join via field by field here in the method. I can use the $id to link one table to another
          $formH = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\F_Hours')
                        ->findBy([], ['send' => 'DESC']);

          $userFormH = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\Users_F_Hours')
                        ->findAll();
                        /************************************************************************************************************************/
          $formV = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\F_Vacation')
                        ->findBy([], ['send' => 'DESC']);

          $userFormV = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\Users_F_Vacation')
                        ->findAll();
                        /************************************************************************************************************************/
          $formE = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\F_Expenses')
                        ->findBy([], ['send' => 'DESC']);

          $userFormE = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\Users_F_Expenses')
                        ->findAll();
                        /************************************************************************************************************************/
          $formT = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\F_Trip')
                        ->findBy([], ['send' => 'DESC']);

          $userFormT = $this->getDoctrine()
                      ->getRepository('intranetBundle:Entity\Users_F_Trip')
                      ->findAll();

                if (!$formH||!$formV||!$formE||!$formT) {
                  throw $this->createNotFoundException('No news found');
                }

            $params=array(
              'relationHours'=>$userFormH, 'listIncomingFormsH'=>$formH,
              'relationVacations'=>$userFormV, 'listIncomingFormsV'=>$formV,
              'relationExpenses'=>$userFormE, 'listIncomingFormsE'=>$formE,
              'relationTrips'=>$userFormT, 'listIncomingFormsT'=>$formT
            );
             return $this->render('intranetBundle:Default:incomingForms.html.twig',$params);
        }

        public function myFormsAction(){
          //Get the id of the intermediates tables, go to the forms and take only those who has the id got already, passed by parameters
          $userFormH = $this->getDoctrine()
                            ->getRepository('intranetBundle:Entity\Users_F_Hours')
                            ->findBy(['login' => $_SESSION['userLDAP']]);

          //Now I have all forms of MY user, but I have to get their ID
          $ind=array();
          foreach ($userFormH as $index => $object) {
            array_push($ind,$object->getId());
          }

          //Search in the table all forms the user has send
          $myForms1=array();
          foreach ($ind as $indice) {
            $myformH = $this->getDoctrine()
                            ->getRepository('intranetBundle:Entity\F_Hours')
                            ->findBy(['id' => $indice]);
            array_push($myForms1,$myformH);
          }

                        /************************************************************************************************************************/
          //Get the id of the intermediates tables, go to the forms and take only those who has the id got already, passed by parameters
          $userFormV = $this->getDoctrine()
                            ->getRepository('intranetBundle:Entity\Users_F_Vacation')
                            ->findBy(['login' => $_SESSION['userLDAP']]);

          //Now I have all forms of MY user, but I have to get their ID
          $ind=array();
          foreach ($userFormV as $index => $object) {
            array_push($ind,$object->getId());
          }

          //Search in the table all forms the user has send
          $myForms2=array();
          foreach ($ind as $indice) {
            $myformV = $this->getDoctrine()
                            ->getRepository('intranetBundle:Entity\F_Vacation')
                            ->findBy(['id' => $indice+5]);
            array_push($myForms2,$myformV);
          }

                        /************************************************************************************************************************/
          //Get the id of the intermediates tables, go to the forms and take only those who has the id got already, passed by parameters
          $userFormE = $this->getDoctrine()
                            ->getRepository('intranetBundle:Entity\Users_F_Expenses')
                            ->findBy(['login' => $_SESSION['userLDAP']]);

          //Now I have all forms of MY user, but I have to get their ID
          $ind=array();
          foreach ($userFormE as $index => $object) {
            array_push($ind,$object->getId());
          }

          //Search in the table all forms the user has send
          $myForms3=array();
          foreach ($ind as $indice) {
            $myformE = $this->getDoctrine()
                            ->getRepository('intranetBundle:Entity\F_Expenses')
                            ->findBy(['id' => $indice]);
            array_push($myForms3,$myformE);
          }

                        /************************************************************************************************************************/
          //Get the id of the intermediates tables, go to the forms and take only those who has the id got already, passed by parameters
          $userFormT = $this->getDoctrine()
                            ->getRepository('intranetBundle:Entity\Users_F_Trip')
                            ->findBy(['login' => $_SESSION['userLDAP']]);

          //Now I have all forms of MY user, but I have to get their ID
          $ind=array();
          foreach ($userFormT as $index => $object) {
            array_push($ind,$object->getId());
          }

          //Search in the table all forms the user has send
          $myForms4=array();
          foreach ($ind as $indice) {
            $myformT = $this->getDoctrine()
                            ->getRepository('intranetBundle:Entity\F_Trip')
                            ->findBy(['id' => $indice]);
            array_push($myForms4,$myformT);
          }

          $params=array('myHours'=>$myForms1, 'myVacations'=>$myForms2, 'myExpenses'=>$myForms3, 'myTrips'=>$myForms4);
          return $this->render('intranetBundle:Default:myhistoricalforms.html.twig',$params);

        }

        public function insertFormAction(){

          //The first thing is to know what type of form is and persist it into the correct tables
          $formtype=$_REQUEST['typeF'];

          switch ($formtype) {
            case 'hours':
                  $numHours=$_REQUEST['numhours'];
                  $date1=$_REQUEST['betw'];
                  $date2=$_REQUEST['and'];
                  return self::insertFormHoursAction($numHours,$date1,$date2,$formtype);
                  break;
            case 'vacation':
                  $date1=$_REQUEST['from'];
                  $date2=$_REQUEST['to'];
                  return self::insertFormVacationAction($date1,$date2,$formtype);
                  break;
            case 'expenses':
                  $date1=$_REQUEST['earlier'];
                  $company=$_REQUEST['company'];
                  $amount=$_REQUEST['amount'];
                  $concept=$_REQUEST['concept'];
                  return self::insertFormExpensesAction($date1,$company,$amount,$concept,$formtype);
                  break;
            case 'trip':
                  $date1=$_REQUEST['from'];
                  $date2=$_REQUEST['to'];
                  $where=$_REQUEST['where'];
                  $congress=$_REQUEST['congress'];
                  $reason=$_REQUEST['reason'];
                  return self::insertFormBusinessAction($date1,$date2,$where,$congress,$reason,$formtype);
                  break;
            default:
                  return new Response("A problem occurred during the submit of your ".$formtype." form");
                  break;
          }
        }

        public function insertFormHoursAction($numHours,$date1,$date2,$formtype){
          //The first thing is persist the Form
          $form = new F_Hours();
          $form->setNumHours($numHours);
          $form->setDate1($date1);
          $form->setDate2($date2);
          //$form->setStatus(null);
          $form->setType($formtype);
          $form->setSend(date("Y-m-d"));

          $em = $this->getDoctrine()->getManager();
          $em->persist($form);
          $em->flush();

         //But it is also needed to insert in the intermediate table
         //login, id_form => I need to take the ID of the last form inserted
         $lastForm = $this->getDoctrine()->getRepository('intranetBundle:Entity\F_Hours')->findBy([], ['id' => 'DESC'], 1);
         if (!$lastForm) {throw $this->createNotFoundException('No news found');}
         //echo $lastForm[0]->getId();
         $usform = new Users_F_Hours();
         $usform->setLogin($_SESSION['userLDAP']);
         $usform->setIdForm($lastForm[0]->getId());

         $em = $this->getDoctrine()->getManager();
         $em->persist($usform);
         $em->flush();
         ################################################################################
         //Redirect the user to where he can see the form already inserted
         return self::myFormsAction();
        }

        public function insertFormVacationAction($date1, $date2, $formtype){
          //The first thing is persist the Form
          $form = new F_Vacation();
          $form->setDate1($date1);
          $form->setDate2($date2);
          //$form->setStatus(null);
          $form->setType($formtype);
          $form->setSend(date("Y-m-d"));

          $em = $this->getDoctrine()->getManager();
          $em->persist($form);
          $em->flush();

         //But it is also needed to insert in the intermediate table
         //login, id_form => I need to take the ID of the last form inserted
         $lastForm = $this->getDoctrine()->getRepository('intranetBundle:Entity\F_Vacation')->findBy([], ['id' => 'DESC'], 1);
         if (!$lastForm) {throw $this->createNotFoundException('No news found');}

         $usform = new Users_F_Vacation();
         $usform->setLogin($_SESSION['userLDAP']);
         $usform->setIdForm($lastForm[0]->getId());


         $em = $this->getDoctrine()->getManager();
         $em->persist($usform);
         $em->flush();
         ################################################################################
         //Redirect the user where he can see the new already inserted
         return self::myFormsAction();
        }

        public function insertFormExpensesAction($date1,$company,$amount,$concept,$formtype){
          //The first thing is persist the Form
          $form = new F_Expenses();
          $form->setDate1($date1);
          $form->setCompany($company);
          $form->setAmount($amount);
          $form->setConcept($concept);
          //$form->setStatus(null);
          $form->setType($formtype);
          $form->setSend(date("Y-m-d"));

          $em = $this->getDoctrine()->getManager();
          $em->persist($form);
          $em->flush();

           //But it is also needed to insert in the intermediate table
           //login, id_form => I need to take the ID of the last form inserted
           $lastForm = $this->getDoctrine()->getRepository('intranetBundle:Entity\F_Expenses')->findBy([], ['id' => 'DESC'], 1);
           if (!$lastForm) {throw $this->createNotFoundException('No news found');}

           $usform = new Users_F_Expenses();
           $usform->setLogin($_SESSION['userLDAP']);
           $usform->setIdForm($lastForm[0]->getId());


           $em = $this->getDoctrine()->getManager();
           $em->persist($usform);
           $em->flush();
           ################################################################################
           //Redirect the user where he can see the new already inserted
           return self::myFormsAction();
        }

        public function insertFormBusinessAction($date1,$date2,$where,$congress,$reason,$formtype){
          //The first thing is persist the Form
          $form = new F_Trip();
          $form->setDate1($date1);
          $form->setDate2($date2);
          $form->setPlace($where);
          $form->setNameCongress($congress);
          $form->setReasons($reason);
          //$form->setStatus(null);
          $form->setType($formtype);
          $form->setSend(date("Y-m-d"));

          $em = $this->getDoctrine()->getManager();
          $em->persist($form);
          $em->flush();

           //But it is also needed to insert in the intermediate table
           //login, id_form => I need to take the ID of the last form inserted
           $lastForm = $this->getDoctrine()->getRepository('intranetBundle:Entity\F_Trip')->findBy([], ['id' => 'DESC'], 1);
           if (!$lastForm) {throw $this->createNotFoundException('No news found');}

           $usform = new Users_F_Trip();
           $usform->setLogin($_SESSION['userLDAP']);
           $usform->setIdForm($lastForm[0]->getId());


           $em = $this->getDoctrine()->getManager();
           $em->persist($usform);
           $em->flush();
           ################################################################################
           //Redirect the user where he can see the new already inserted
           return self::myFormsAction();
        }

        public function readFormAction(){

          //It is necessary to know the type of form to look for it directly in its table
          $formtype=$_REQUEST['typeF'];
          $id=$_REQUEST['id'];

          switch ($formtype) {
            case 'hours':
                  return self::readFormHoursAction($id);
                  break;
            case 'vacations':
                  return self::readFormVacationAction($id);
                  break;
            case 'expenses':
                  return self::readFormExpensesAction($id);
                  break;
            case 'trip':
                  return self::readFormTripsAction($id);
                  break;
            default:
                  return new Response("A problem occurred during the submit of your ".$formtype." form");
                  break;
          }
        }

        //In the next methods, we can access to the form clicked to read the information
        public function readFormHoursAction($id){

          $em = $this->getDoctrine()->getManager();
          $product = $em->getRepository('intranetBundle:Entity\F_Hours')->find($id);

          //Every time the BÜO read a form, the system put the bit as read => not in bold anymore
          $product->setIsRead(1);
          $em->persist($product);
          $em->flush();

          $fh = $this->getDoctrine()
                     ->getRepository('intranetBundle:Entity\F_Hours')
                     ->findOneById($id);

          $params=array('form'=>$fh);
          return $this->render('intranetBundle:Default:readForm.html.twig', $params);
        }

        public function readFormVacationAction($id){

          $em = $this->getDoctrine()->getManager();
          $product = $em->getRepository('intranetBundle:Entity\F_Vacation')->find($id);

          //Every time the BÜO read a form, the system put the bit as read => not in bold anymore
          $product->setIsRead(1);
          $em->persist($product);
          $em->flush();

          $fh = $this->getDoctrine()
                     ->getRepository('intranetBundle:Entity\F_Vacation')
                     ->findOneById($id);

          $params=array('form'=>$fh);
          return $this->render('intranetBundle:Default:readForm.html.twig', $params);
        }

        public function readFormExpensesAction($id){

          $em = $this->getDoctrine()->getManager();
          $product = $em->getRepository('intranetBundle:Entity\F_Expenses')->find($id);

          //Every time the BÜO read a form, the system put the bit as read => not in bold anymore
          $product->setIsRead(1);
          $em->persist($product);
          $em->flush();

          $fh = $this->getDoctrine()
                     ->getRepository('intranetBundle:Entity\F_Expenses')
                     ->findOneById($id);

          $params=array('form'=>$fh);
          return $this->render('intranetBundle:Default:readForm.html.twig', $params);
        }

        public function readFormTripsAction($id){

          $em = $this->getDoctrine()->getManager();
          $product = $em->getRepository('intranetBundle:Entity\F_Trip')->find($id);

          //Every time the BÜO read a form, the system put the bit as read => not in bold anymore
          $product->setIsRead(1);
          $em->persist($product);
          $em->flush();

          $fh = $this->getDoctrine()
                     ->getRepository('intranetBundle:Entity\F_Trip')
                     ->findOneById($id);

          $params=array('form'=>$fh);
          return $this->render('intranetBundle:Default:readForm.html.twig', $params);
        }

        public function statusFormAction(){

          //Depending on the type of Form send, we pour the choice of the user(BÜO) if he wants to accept the form or reject it
          $choice=$_REQUEST['status'];
          $formtype=$_REQUEST['typeF'];
          $id=$_REQUEST['id'];

          switch ($formtype) {
            case 'hours':
                  switch ($choice) {
                    case 'accept':
                          $em = $this->getDoctrine()->getManager();
                          $product = $em->getRepository('intranetBundle:Entity\F_Hours')->find($id);

                          $product->setStatus(1);
                          $em->persist($product);
                          $em->flush();
                          return self::incomingFormsAction();
                          break;
                    case 'reject':
                          $em = $this->getDoctrine()->getManager();
                          $product = $em->getRepository('intranetBundle:Entity\F_Hours')->find($id);

                          $product->setStatus(-1);
                          $em->persist($product);
                          $em->flush();
                          return self::incomingFormsAction();
                          break;
                    default:
                          return new Response("A problem occurred during the submit of your choice");
                          break;
                  }
                  break;
            case 'vacation':
                  switch ($choice) {
                    case 'accept':
                          $em = $this->getDoctrine()->getManager();
                          $product = $em->getRepository('intranetBundle:Entity\F_Vacation')->find($id);

                          $product->setStatus(1);
                          $em->persist($product);
                          $em->flush();
                          return self::incomingFormsAction();
                          break;
                    case 'reject':
                          $em = $this->getDoctrine()->getManager();
                          $product = $em->getRepository('intranetBundle:Entity\F_Vacation')->find($id);

                          $product->setStatus(-1);
                          $em->persist($product);
                          $em->flush();
                          return self::incomingFormsAction();
                          break;
                    default:
                          return new Response("A problem occurred during the submit of your choice");
                          break;
                  }
                  break;
            case 'expenses':
                  switch ($choice) {
                    case 'accept':
                          $em = $this->getDoctrine()->getManager();
                          $product = $em->getRepository('intranetBundle:Entity\F_Expenses')->find($id);

                          $product->setStatus(1);
                          $em->persist($product);
                          $em->flush();
                          return self::incomingFormsAction();
                          break;
                    case 'reject':
                          $em = $this->getDoctrine()->getManager();
                          $product = $em->getRepository('intranetBundle:Entity\F_Expenses')->find($id);

                          $product->setStatus(-1);
                          $em->persist($product);
                          $em->flush();
                          return self::incomingFormsAction();
                          break;
                    default:
                          return new Response("A problem occurred during the submit of your choice");
                          break;
                  }
                  break;
            case 'trip':
                  switch ($choice) {
                    case 'accept':
                          $em = $this->getDoctrine()->getManager();
                          $product = $em->getRepository('intranetBundle:Entity\F_Trip')->find($id);

                          $product->setStatus(1);
                          $em->persist($product);
                          $em->flush();
                          return self::incomingFormsAction();
                          break;
                    case 'reject':
                          $em = $this->getDoctrine()->getManager();
                          $product = $em->getRepository('intranetBundle:Entity\F_Trip')->find($id);

                          $product->setStatus(-1);
                          $em->persist($product);
                          $em->flush();
                          return self::incomingFormsAction();
                          break;
                    default:
                          return new Response("A problem occurred during the submit of your choice");
                          break;
                  }
                  break;
            default:
                  return new Response("A problem occurred during the submit of your ".$formtype." form");
                  break;
          }

        }

        public function crudFormAction(){
          //The typeF is used to filter the tables
          $formtype=$_REQUEST['typeF'];
          $id=$_REQUEST['id'];

          switch ($formtype) {
            case 'hours':

                  //The user only can delete those forms who hasn't been read
                  $f = $this->getDoctrine()
                               ->getRepository('intranetBundle:Entity\F_Hours')
                               ->findOneById($id);

                  $params=array('f'=>$f);
                  return $this->render('intranetBundle:Default:editHours.html.twig', $params);
                  break;
            case 'vacations':
                  //The user only can delete those forms who hasn't been read
                  $f = $this->getDoctrine()
                               ->getRepository('intranetBundle:Entity\F_Vacation')
                               ->findOneById($id);

                  $params=array('f'=>$f);
                  return $this->render('intranetBundle:Default:editVacations.html.twig', $params);
                  break;
            case 'expenses':
                  //The user only can delete those forms who hasn't been read
                  $f = $this->getDoctrine()
                               ->getRepository('intranetBundle:Entity\F_Expenses')
                               ->findOneById($id);

                  $params=array('f'=>$f);
                  return $this->render('intranetBundle:Default:editExpenses.html.twig', $params);
                  break;
            case 'trip':
                  //The user only can delete those forms who hasn't been read
                  $f = $this->getDoctrine()
                               ->getRepository('intranetBundle:Entity\F_Trip')
                               ->findOneById($id);

                  $params=array('f'=>$f);
                  return $this->render('intranetBundle:Default:editTrip.html.twig', $params);
                  break;
            default:
                  return new Response("A problem occurred during the submit of your ".$formtype." form");
                  break;
          }
        }

        public function editFormAction(){

          $id=$_REQUEST['id'];

          switch ($_REQUEST['typeF']) {
            case 'hours':
                  $formtype='Hours';
                  break;
            case 'vacations':
                  $formtype='Vacation';
                  break;
            case 'expenses':
                  $formtype='Expenses';
                  break;
            case 'trip':
                  $formtype='Trip';
                  break;
            default:
                  return new Response("A problem occurred during the submit of your ".$formtype." form");
                  break;
          }

          $em = $this->getDoctrine()->getManager();
          $product = $em->getRepository('intranetBundle:Entity\F_'.$formtype)->find($_REQUEST['id']);
          $em->remove($product);
          $em->flush();

          $intermediate = $em->getRepository('intranetBundle:Entity\Users_F_'.$formtype)->findOneByIdForm($_REQUEST['id']);
          $em->remove($intermediate);
          $em->flush();

          return self::myFormsAction();
        }

#NEWS

       public function createNewAction(){
         $allChannels = $this->getDoctrine()
                         ->getRepository('intranetBundle:Entity\Channel')
                         ->findAll(); #findAll
         $params = array('channels' =>$allChannels);
         return $this->render('intranetBundle:Default:createNewFeed.html.twig', $params);
       }

       public function insertNewAction(){

         //The first thing is persist the New
         $new = new NewFeed();
         $new->setDate(date("Y-m-d"));
         $new->setTime(date("H:i:s"));
         $new->setTitle($_REQUEST['title']);
         $new->setContent($_REQUEST['content']);

         $em = $this->getDoctrine()->getManager();
         $em->persist($new);
         $em->flush();

        //But it is also needed to insert in the intermediate table
        $new2 = $this->getDoctrine()
                        ->getRepository('intranetBundle:Entity\NewFeed')
                        ->findOneByContent($_REQUEST['content']);
        $i=$new2->getId();
        $allChannels = $this->getDoctrine()
                            ->getRepository('intranetBundle:Entity\Channel')
                            ->findAll();

         foreach ($allChannels as $index => $object) {
           if(isset($_REQUEST[$object->getName()])){
             $newcha = new channelnew_feed();
             $newcha->setName($_REQUEST[$object->getName()]);
             $newcha->setIdNew($i);
             $em = $this->getDoctrine()->getManager();
             $em->persist($newcha);
             $em->flush();
           }
         }

        //Redirect the user where he can see the new already inserted
         return self::newsAction();//l.137
       }

        public function editeNewAction(){
          //get the values from the form, search the object in the database and send it to the view
          //Obtain the channels of the intermediate table and pour them onto the checkboxes
          $content=$_REQUEST['content'];

          $new = $this->getDoctrine()
                          ->getRepository('intranetBundle:Entity\NewFeed')
                          ->findOneByContent($content);

          //Si ya tengo el ID, puedo buscar el nombre de su canal en la tabla intermedia
          $i=$new->getId();
          $allChannels = $this->getDoctrine()
                       ->getRepository('intranetBundle:Entity\Channel')
                       ->findAll();

          $chan = $this->getDoctrine()
                       ->getRepository('intranetBundle:Entity\channelnew_feed')
                       ->findBy(['idNew'=>$i]);

          $params=array('new'=>$new, 'newschannels' => $chan, 'allChannels' => $allChannels);
          return $this->render('intranetBundle:Default:editNew.html.twig', $params);
        }

        public function updateNewAction(){
          if (isset($_POST['update'])) {
              return self::updatNewAction();
          } else if (isset($_POST['delete'])) {
              return self::deletNewAction();
          }
        }

        public function updatNewAction(){
            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository('intranetBundle:Entity\NewFeed')->find($_REQUEST['id']);

            $product->setDate($_REQUEST['date']);
            $product->setTime($_REQUEST['time']);
            $product->setTitle($_REQUEST['title']);
            $product->setContent($_REQUEST['content']);
            $em->flush();

            //Update also the intermediate table

            $allChannels = $this->getDoctrine()
                                ->getRepository('intranetBundle:Entity\Channel')
                                ->findAll();
            foreach ($allChannels as $index => $object) {
              if(isset($_REQUEST[$object->getName()])){
                $em = $this->getDoctrine()->getManager();
                $product = $em->getRepository('intranetBundle:Entity\channelnew_feed')->findBy(['idNew' =>$_REQUEST['id'], 'name' => $object->getName()]);

                if(sizeof($product)==0){
                  $intermediate = new channelnew_feed();
                  $intermediate->setIdNew($_REQUEST['id']);
                  $intermediate->setName($object->getName());
                  $em = $this->getDoctrine()->getManager();
                  $em->persist($intermediate);
                  $em->flush();
                }
              }else {
                $em = $this->getDoctrine()->getManager();
                $product = $em->getRepository('intranetBundle:Entity\channelnew_feed')->findBy(['idNew' =>$_REQUEST['id'], 'name' => $object->getName()]);
                foreach ($product as $index => $ob) {
                  $em->remove($ob);
                  $em->flush();
                }
              }
            }

            return self::newsAction();
        }

        public function deletNewAction(){
            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository('intranetBundle:Entity\NewFeed')->find($_REQUEST['id']);
            $em->remove($product);
            $em->flush();

            $intermediate = $em->getRepository('intranetBundle:Entity\channelnew_feed')->findOneByIdNew($_REQUEST['id']);
            $em->remove($intermediate);
            $em->flush();

            return self::newsAction();
        }

#TASKS

        public function createTaskAction(){
          $allUsers = $this->getDoctrine()
                          ->getRepository('intranetBundle:Entity\Users')
                          ->findAll(); #findAll
          $params = array('users' =>$allUsers);
          return $this->render('intranetBundle:Default:createNewTask.html.twig', $params);
        }

        public function insertTaskAction(){
          //The first thing is persist the New
          $task = new Tasks();
          $task->setTitle($_REQUEST['title']);
          $task->setContent($_REQUEST['content']);
          $task->setWhoCreate($_SESSION['userLDAP']);

          $em = $this->getDoctrine()->getManager();
          $em->persist($task);
          $em->flush();

         //But it is also needed to insert in the intermediate table
         $task2 = $this->getDoctrine()
                         ->getRepository('intranetBundle:Entity\Tasks')
                         ->findOneByContent($_REQUEST['content']);
         $i=$task2->getId();

         //For each user, I see if his checkbox is sent. In case of YES, insert the row with all the users marked.
         $allUsers = $this->getDoctrine()
                          ->getRepository('intranetBundle:Entity\Users')
                          ->findAll(); #$params = array('users' =>$allUsers);

          foreach ($allUsers as $index => $object) {
            if(isset($_REQUEST[$object->getLogin()])){
              $usta = new userstasks();
              $usta->setIdTask($i);
              $usta->setLogin($object->getLogin());
              $em = $this->getDoctrine()->getManager();
              $em->persist($usta);
              $em->flush();
            }
          }
         //Redirect the user where he can see the task already inserted
         return self::tasksAction();//l.295
        }

        public function editeTaskAction(){
          //get the values (id) from the form, search the object in the database and send it to the view
          //Need to get the ID and search in the intermediate table, just to get the Users assigned.
          $id=$_REQUEST['id'];

          $task = $this->getDoctrine()
                          ->getRepository('intranetBundle:Entity\Tasks')
                          ->findOneById($id);

           //Once had the ID, I can look for the users assigned in the intermediate table
           $usersWithTask = $this->getDoctrine()
                                 ->getRepository('intranetBundle:Entity\userstasks')
                                 ->findBy(['idTask'=>$id]);
           $allUsers = $this->getDoctrine()
                                 ->getRepository('intranetBundle:Entity\Users')
                                 ->findAll();
           $params=array('task'=>$task,'usersWithTask'=>$usersWithTask, 'allUsers'=>$allUsers, 'rol'=>$_SESSION['rol']);
           //return $this->render('intranetBundle:Default:editTask.html.twig', $params);
           return $this->render('intranetBundle:TaskTemplates:mainTaskDialog.tmpl.html', $params);
        }

        public function updateTaskAction(){
            var_dump($_POST);
            echo $_SERVER['REQUEST_METHOD'];
          if (isset($_POST['update'])) {
              return self::updatTaskAction();
          } else if (isset($_POST['delete'])) {
              return self::deletTaskAction();
          }
        }

        public function updatTaskAction(){
            var_dump($_REQUEST);
            /*$em = $this->getDoctrine()->getManager();
            $product = $em->getRepository('intranetBundle:Entity\Tasks')->find($_REQUEST['id']);

            $product->setTitle($_REQUEST['title']);
            $product->setContent($_REQUEST['content']);
            $product->setWhoCreate($_REQUEST['whocreate']);
            $em->flush();

            $intermediate = $em->getRepository('intranetBundle:Entity\userstasks')->findBy(['idTask'=>$_REQUEST['id']]);

            //For each user, I see if his checkbox is sent. In case of YES, insert the row with all the users marked.
            $allUsers = $this->getDoctrine()
                             ->getRepository('intranetBundle:Entity\Users')
                             ->findAll();

             foreach ($allUsers as $index => $object) {
               if(isset($_REQUEST[$object->getLogin()])){
                 $em = $this->getDoctrine()->getManager();
                 $product = $em->getRepository('intranetBundle:Entity\userstasks')->findBy(['idTask' =>$_REQUEST['id'], 'login' => $object->getLogin()]);
                 if(sizeof($product)==0){
                   $intermediate = new userstasks();
                   $intermediate->setIdTask($_REQUEST['id']);
                   $intermediate->setLogin($object->getLogin());
                   $em = $this->getDoctrine()->getManager();
                   $em->persist($intermediate);
                   $em->flush();
                 }
               }else {
                 $em = $this->getDoctrine()->getManager();
                 $product = $em->getRepository('intranetBundle:Entity\userstasks')->findBy(['idTask' =>$_REQUEST['id'], 'login' => $object->getLogin()]);
                 foreach ($product as $index => $ob) {
                   $em->remove($ob);
                   $em->flush();

                 }
               }
             }
            return self::tasksAction();*/
            return $this->render('intranetBundle:Default:tasks.html.twig',[]);
        }

        public function deletTaskAction(){
            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository('intranetBundle:Entity\Tasks')->find($_REQUEST['id']);
            $em->remove($product);
            $em->flush();

            $intermediate = $em->getRepository('intranetBundle:Entity\userstasks')->findBy(['idTask' => $_REQUEST['id']]);

            for ($i=0; $i < sizeof($intermediate); $i++) {
                          $em->remove($intermediate[$i]);
                          $em->flush();
            }

            return self::tasksAction();
        }

#CHANNEL
        public function createChannelAction(){
          $allChannels = $this->getDoctrine()
                          ->getRepository('intranetBundle:Entity\Channel')
                          ->findAll(); #findAll
          $allUsers = $this->getDoctrine()
                          ->getRepository('intranetBundle:Entity\Users')
                          ->findAll(); #findAll
          $params = array('channels' =>$allChannels,'users' =>$allUsers);
          return $this->render('intranetBundle:Default:createNewChannel.html.twig', $params);
        }

        public function insertChannelAction(){
          //The first thing is persist the New
          $channel = new Channel();
          $channel->setName($_REQUEST['name']);

          $em = $this->getDoctrine()->getManager();
          $em->persist($channel);
          $em->flush();

         //For each user, I see if his checkbox is sent. In case of YES, insert the row with all the users marked.
         $allUsers = $this->getDoctrine()
                          ->getRepository('intranetBundle:Entity\Users')
                          ->findAll();

          foreach ($allUsers as $index => $object) {
            if(isset($_REQUEST[$object->getLogin()])){
              $usta = new userschannel();
              $usta->setName($_REQUEST['name']);
              $usta->setLogin($object->getLogin());
              $em = $this->getDoctrine()->getManager();
              $em->persist($usta);
              $em->flush();
            }
          }
         //Redirect the user where he can see the channel already inserted
         return self::channelsAction();//l.308
        }

        public function editeChannelAction(){
          //get the values from the form, search the object in the database and send it to the view
          //Need to get the ID and search in the intermediate table, just to get the Users assigned.
          $nameChannel=$_REQUEST['nameChannel'];

          #First of all is to see all the information related to the channel clicked
          $channel = $this->getDoctrine()
                            ->getRepository('intranetBundle:Entity\Channel')
                            ->findOneByName($nameChannel);

           //Once had the ID, I can look for the users assigned in the intermediate table
           $usersWithChannel = $this->getDoctrine()
                                 ->getRepository('intranetBundle:Entity\userschannel')
                                 ->findBy(['name'=>$nameChannel]);
           $allUsers = $this->getDoctrine()
                                 ->getRepository('intranetBundle:Entity\Users')
                                 ->findAll();

            #TODO Not showing yet all the news related to this channel

           $params=array('channel'=>$channel,'usersWithChannel'=>$usersWithChannel, 'allUsers'=>$allUsers);
           return $this->render('intranetBundle:Default:editChannel.html.twig', $params);
        }

        public function updatechannelAction(){
          if (isset($_POST['update'])) {
              return self::updatChannelAction();
          } else if (isset($_POST['delete'])) {
              return self::deletChannelAction();
          }
        }

        public function updatChannelAction(){
            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository('intranetBundle:Entity\Channel')->findOneById($_REQUEST['id']);
            $product->setName($_REQUEST['nameChannel']);
            $em->flush();

            $intermediate = $em->getRepository('intranetBundle:Entity\userschannel')->findOneByName(['name'=>$_REQUEST['nameChannel']]);

            //For each user, I see if his checkbox is sent. In case of YES, insert the row with all the users marked.
            $allUsers = $this->getDoctrine()
                             ->getRepository('intranetBundle:Entity\Users')
                             ->findAll();

             foreach ($allUsers as $index => $object) {
               if(isset($_REQUEST[$object->getLogin()])){
                 $em = $this->getDoctrine()->getManager();
                 $product = $em->getRepository('intranetBundle:Entity\userschannel')->findBy(['name' =>$_REQUEST['nameChannel'], 'login' => $object->getLogin()]);
                 if(sizeof($product)==0){
                   $intermediate = new userschannel();
                   $intermediate->setName($_REQUEST['nameChannel']);
                   $intermediate->setLogin($object->getLogin());
                   $em = $this->getDoctrine()->getManager();
                   $em->persist($intermediate);
                   $em->flush();
                 }
               }else {
                 $em = $this->getDoctrine()->getManager();
                 $product = $em->getRepository('intranetBundle:Entity\userschannel')->findBy(['name' =>$_REQUEST['nameChannel'], 'login' => $object->getLogin()]);
                 foreach ($product as $index => $ob) {
                   $em->remove($ob);
                   $em->flush();

                 }
               }
             }
            return self::channelsAction();
        }

        public function deletChannelAction(){
            $em = $this->getDoctrine()->getManager();
            $product = $em->getRepository('intranetBundle:Entity\Channel')->findOneByName($_REQUEST['nameChannel']);
            $em->remove($product);
            $em->flush();

            //userschannel
            $intermediate = $em->getRepository('intranetBundle:Entity\userschannel')->findBy(['name' => $_REQUEST['nameChannel']]);
            for ($i=0; $i < sizeof($intermediate); $i++) {
                          $em->remove($intermediate[$i]);
                          $em->flush();
            }

            //TODO channelnew_feed

            return self::channelsAction();
        }


    //TODELETE
    public function usarDoctrineAction(){
      $usuario = $this->getDoctrine()->getRepository('intranetBundle:Entity\Users')->findOneByLogin($_SESSION['userLDAP']); #findAll
      $params=array('user'=>$usuario, 'role'=>$_SESSION['rol']);

      return $this->render('intranetBundle:Default:bd.html.twig', $params);
    }

    //TODELETE
           public function translationAction(){
               return $this->render( 'intranetBundle:Default:translate.html.twig'  );
           }

    #*********************************************THE BOOK ROOM PART, NOT AVAILABLE *********************************************#
      public function bookRoomAction(){
         //Aquí llamada a Ajax para que me devuelva todas las fechas y habitaciones

         //Para una fecha dada, return las horas ocupadasd de cada habitación
         $m = new Model();
         $params = array('listrooms' => $m->getRooms(),);

            return $this->render(
               'intranetBundle:Default:bookRoom.html.twig',
               $params
              );
      }



        public function bookAction(){
          if (!isset($_GET['fecha'])) {
           throw new Exception('Página no encontrada');
           }
             $date = $_GET['fecha'];
             $m = new Model();

             //Devuelve las reservas de la fecha que viene del formulario del calendario
             //$params = array('listrooms2' => $m->getBooks($date),);

            $roomsFecha = array('listrooms2' => $m->getRoomsFecha($date),);

             return $this->render(
                'intranetBundle:Default:book.html.twig',
                $roomsFecha//, $date
               );
        }

#*****************Template task controllers*****************#

  public function mainTaskDialogAction() {

    return $this->render(
       'intranetBundle:TaskTemplates:mainTaskDialog.tmpl.html'
      );
  }
}

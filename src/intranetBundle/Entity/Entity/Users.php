<?php

namespace intranetBundle\Entity\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 */
class Users 
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $login;

    /**
     * @var string
     */
    private $nameU;

    /**
     * @var string
     */
    private $surnameU;

    /**
     * @var string
     */
    private $lang;

    /**
     * @var string
     */
    private $rol;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var bool
     */
    private $onboard;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Users
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set nameU
     *
     * @param string $nameU
     * @return Users
     */
    public function setNameU($nameU)
    {
        $this->nameU = $nameU;

        return $this;
    }

    /**
     * Get nameU
     *
     * @return string
     */
    public function getNameU()
    {
        return $this->nameU;
    }

    /**
     * Set surnameU
     *
     * @param string $surnameU
     * @return Users
     */
    public function setSurnameU($surnameU)
    {
        $this->surnameU = $surnameU;

        return $this;
    }

    /**
     * Get surnameU
     *
     * @return string
     */
    public function getSurnameU()
    {
        return $this->surnameU;
    }

    /**
     * Set lang
     *
     * @param string $lang
     * @return Users
     */
    public function setLang($lang)
    {
        $this->lang = $lang;

        return $this;
    }

    /**
     * Get lang
     *
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * Set rol
     *
     * @param string $rol
     * @return Users
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return string
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set photo
     *
     * @param string $photo
     * @return Users
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set onboard
     *
     * @param boolean $onboard
     * @return Users
     */
    public function setOnboard($onboard)
    {
        $this->onboard = $onboard;

        return $this;
    }

    /**
     * Get onboard
     *
     * @return boolean
     */
    public function getOnboard()
    {
        return $this->onboard;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: alexis
 * Date: 19/09/15
 * Time: 15:20
 */

namespace Arceau\Model\Entities;

use Doctrine\ORM\Mapping as ORM;
use Mouf\Security\UserService\UserInterface;

/**
 * Class User
 * @package Arceau\Model\Entities
 * @ORM\Table(name="Users")
 * @ORM\Entity(repositoryClass="Arceau\Model\DAOs\UserDao")
 */
class User implements UserInterface {

    /**
     * @ORM\Id @ORM\GeneratedValue @ORM\Column(type="integer")
     *
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $email;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $password;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $nom;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $prenom;

    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $right_id;

    /* --- Getters and setters --- */

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->getEmail();
    }

    /**
     * @return int
     */
    public function getRightId()
    {
        return $this->right_id;
    }

    /**
     * @param int $right_id
     */
    public function setRightId($right_id)
    {
        $this->right_id = $right_id;
    }
}
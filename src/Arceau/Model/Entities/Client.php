<?php
/**
 * Created by PhpStorm.
 * User: alexis
 * Date: 19/09/15
 * Time: 15:34
 */

namespace Arceau\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Client
 * @package Arceau\Model\Entities
 * @ORM\Table(name="Clients")
 * @ORM\Entity(repositoryClass="Arceau\Model\DAOs\ClientDao")
 */
class Client {

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
    private $nom;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $prenom;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $fonction;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $institution;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $telephone;

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
    private $adresse;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $ville;

    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $user_id;

    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $cotisation_id;

    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $deleted;

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
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * @param string $fonction
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;
    }

    /**
     * @return string
     */
    public function getInstitution()
    {
        return $this->institution;
    }

    /**
     * @param string $institution
     */
    public function setInstitution($institution)
    {
        $this->institution = $institution;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
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
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param string $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return int
     */
    public function getCotisationId()
    {
        return $this->cotisation_id;
    }

    /**
     * @param int $cotisation_id
     */
    public function setCotisationId($cotisation_id)
    {
        $this->cotisation_id = $cotisation_id;
    }

    /**
     * @return int
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param int $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }
}
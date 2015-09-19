<?php
/**
 * Created by PhpStorm.
 * User: alexis
 * Date: 19/09/15
 * Time: 15:47
 */

namespace Arceau\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Cotisation
 * @package Arceau\Model\Entities
 * @ORM\Table(name="Cotisations")
 * @ORM\Entity(repositoryClass="Arceau\Model\DAOs\CotisationDao")
 */
class Cotisation {

    /**
     * @ORM\Id @ORM\GeneratedValue @ORM\Column(type="integer")
     *
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $somme;

    /* --- Getters and setters --- */

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getSomme()
    {
        return $this->somme;
    }

    /**
     * @param int $somme
     */
    public function setSomme($somme)
    {
        $this->somme = $somme;
    }


}
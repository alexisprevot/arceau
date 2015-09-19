<?php
/**
 * Created by PhpStorm.
 * User: alexis
 * Date: 19/09/15
 * Time: 17:24
 */

namespace Arceau\Model\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Right
 * @package Arceau\Model\Entities
 * @ORM\Table(name="Rights")
 * @ORM\Entity(repositoryClass="Arceau\Model\DAOs\RightDao")
 */
class Right {

    /**
     * @ORM\Id @ORM\GeneratedValue @ORM\Column(type="integer")
     *
     * @var int
     */
    private $id = null;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
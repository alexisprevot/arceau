<?php

/*
* This file has been automatically generated by Mouf/ORM.
* DO NOT edit this file, as it might be overwritten.
* If you need to perform changes, edit the ClientDao class instead!
*/

namespace Arceau\Model\DAOs;

use Mouf\Database\DAOInterface;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NonUniqueResultException;
use Arceau\Model\Entities\Client;

/**
 * The ClientBaseDao class will maintain the persistance of Client class into the Clients table.

 * @method Client findByNom($fieldValue, $orderBy = null, $limit = null, $offset = null)
 * @method Client findOneByNom($fieldValue, $orderBy = null)
 * @method Client findByPrenom($fieldValue, $orderBy = null, $limit = null, $offset = null)
 * @method Client findOneByPrenom($fieldValue, $orderBy = null)
 * @method Client findByFonction($fieldValue, $orderBy = null, $limit = null, $offset = null)
 * @method Client findOneByFonction($fieldValue, $orderBy = null)
 * @method Client findByInstitution($fieldValue, $orderBy = null, $limit = null, $offset = null)
 * @method Client findOneByInstitution($fieldValue, $orderBy = null)
 * @method Client findByTelephone($fieldValue, $orderBy = null, $limit = null, $offset = null)
 * @method Client findOneByTelephone($fieldValue, $orderBy = null)
 * @method Client findByEmail($fieldValue, $orderBy = null, $limit = null, $offset = null)
 * @method Client findOneByEmail($fieldValue, $orderBy = null)
 * @method Client findByAdresse($fieldValue, $orderBy = null, $limit = null, $offset = null)
 * @method Client findOneByAdresse($fieldValue, $orderBy = null)
 * @method Client findByVille($fieldValue, $orderBy = null, $limit = null, $offset = null)
 * @method Client findOneByVille($fieldValue, $orderBy = null)
 * @method Client findByDeleted($fieldValue, $orderBy = null, $limit = null, $offset = null)
 * @method Client findOneByDeleted($fieldValue, $orderBy = null)
 * @method Client findByCreatedAt($fieldValue, $orderBy = null, $limit = null, $offset = null)
 * @method Client findOneByCreatedAt($fieldValue, $orderBy = null)

 */
class ClientBaseDao extends EntityRepository implements DAOInterface
{
    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct($entityManager)
    {
        parent::__construct($entityManager, $entityManager->getClassMetadata('Arceau\Model\Entities\Client'));
    }

    /**
     * Get a new bean record.
     *
     * @return Client the new bean object
     */
    public function create()
    {
        return new Client();
    }

    /**
     * Get a bean by it's Id.
     *
     * @param mixed $id
     *
     * @return Client the bean object
     */
    public function getById($id)
    {
        return $this->find($id);
    }

    /**
     * Peforms saving on a bean object.
     *
     * @param mixed bean object
     */
    public function save($entity)
    {
        $this->getEntityManager()->persist($entity);
    }

    /**
     * Peforms remove on a bean object.
     *
     * @param Client $entity the bean object
     */
    public function remove(Client $entity)
    {
        $this->getEntityManager()->remove($entity);
    }

    /**
     * Returns the lis of beans.
     *
     * @return Client[] array of bean objects
     */
    public function getList()
    {
        return $this->findAll();
    }

    /**
     * Finds only one entity. The criteria must contain all the elements needed to find a unique entity.
     * Throw an exception if more than one entity was found.
     *
     * @param array $criteria
     *
     * @return Client the bean object
     */
    public function findUniqueBy(array $criteria)
    {
        $result = $this->findBy($criteria);

        if (count($result) == 1) {
            return $result[0];
        } elseif (count($result) > 1) {
            throw new NonUniqueResultException('More than one Client was found');
        } else {
            return;
        }
    }

    /**
     * Finds only one entity by Nom.
     * Throw an exception if more than one entity was found.
     *
     * @param mixed $fieldValue the value of the filtered field
     *
     * @return Client
     */
    public function findUniqueByNom($fieldValue)
    {
        return $this->findUniqueBy(array('nom' => $fieldValue));
    }
    /**
     * Finds only one entity by Prenom.
     * Throw an exception if more than one entity was found.
     *
     * @param mixed $fieldValue the value of the filtered field
     *
     * @return Client
     */
    public function findUniqueByPrenom($fieldValue)
    {
        return $this->findUniqueBy(array('prenom' => $fieldValue));
    }
    /**
     * Finds only one entity by Fonction.
     * Throw an exception if more than one entity was found.
     *
     * @param mixed $fieldValue the value of the filtered field
     *
     * @return Client
     */
    public function findUniqueByFonction($fieldValue)
    {
        return $this->findUniqueBy(array('fonction' => $fieldValue));
    }
    /**
     * Finds only one entity by Institution.
     * Throw an exception if more than one entity was found.
     *
     * @param mixed $fieldValue the value of the filtered field
     *
     * @return Client
     */
    public function findUniqueByInstitution($fieldValue)
    {
        return $this->findUniqueBy(array('institution' => $fieldValue));
    }
    /**
     * Finds only one entity by Telephone.
     * Throw an exception if more than one entity was found.
     *
     * @param mixed $fieldValue the value of the filtered field
     *
     * @return Client
     */
    public function findUniqueByTelephone($fieldValue)
    {
        return $this->findUniqueBy(array('telephone' => $fieldValue));
    }
    /**
     * Finds only one entity by Email.
     * Throw an exception if more than one entity was found.
     *
     * @param mixed $fieldValue the value of the filtered field
     *
     * @return Client
     */
    public function findUniqueByEmail($fieldValue)
    {
        return $this->findUniqueBy(array('email' => $fieldValue));
    }
    /**
     * Finds only one entity by Adresse.
     * Throw an exception if more than one entity was found.
     *
     * @param mixed $fieldValue the value of the filtered field
     *
     * @return Client
     */
    public function findUniqueByAdresse($fieldValue)
    {
        return $this->findUniqueBy(array('adresse' => $fieldValue));
    }
    /**
     * Finds only one entity by Ville.
     * Throw an exception if more than one entity was found.
     *
     * @param mixed $fieldValue the value of the filtered field
     *
     * @return Client
     */
    public function findUniqueByVille($fieldValue)
    {
        return $this->findUniqueBy(array('ville' => $fieldValue));
    }
    /**
     * Finds only one entity by Deleted.
     * Throw an exception if more than one entity was found.
     *
     * @param mixed $fieldValue the value of the filtered field
     *
     * @return Client
     */
    public function findUniqueByDeleted($fieldValue)
    {
        return $this->findUniqueBy(array('deleted' => $fieldValue));
    }
    /**
     * Finds only one entity by CreatedAt.
     * Throw an exception if more than one entity was found.
     *
     * @param mixed $fieldValue the value of the filtered field
     *
     * @return Client
     */
    public function findUniqueByCreatedAt($fieldValue)
    {
        return $this->findUniqueBy(array('created_at' => $fieldValue));
    }
}

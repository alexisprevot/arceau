<?php
namespace Arceau\Model\DAOs;
use Mouf\Security\UserService\UserDaoInterface;
use Mouf\Security\UserService\UserInterface;


/**
* The UserDao class will maintain the persistance of User class into the user table.
*/
class UserDao extends UserBaseDao implements UserDaoInterface {

    /**
     * Returns a user from its login and its password, or null if the login or credentials are false.
     *
     * @param string $login
     * @param string $password
     * @return UserInterface
     */
    public function getUserByCredentials($login, $password)
    {
        return $this->findOneBy(
            array(
                'email' => $login,
                'password' => md5($password)
            )
        );
    }

    /**
     * Returns a user from its ID
     *
     * @param string $id
     * @return UserInterface
     */
    public function getUserById($id)
    {
        return $this->findOneBy(
            array(
                'id' => $id
            )
        );
    }

    /**
     * Returns a user from its login
     *
     * @param string $login
     * @return UserInterface
     */
    public function getUserByLogin($login)
    {
        return $this->findBy(
            array(
                'email' => $login
            )
        );
    }

    /**
     * Returns a user from its token.
     *
     * @param string $token
     * @return UserInterface
     */
    public function getUserByToken($token)
    {
    }

    /**
     * Discards a token.
     *
     * @param string $token
     */
    public function discardToken($token)
    {
    }
}
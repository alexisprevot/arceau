<?php

namespace Arceau\Model\DAOs;

use Arceau\Model\Entities\User;
use Mouf\Security\RightsService\RightsDaoInterface;
use Mouf\Security\RightsService\RightInterface;

/**
* The RightDao class will maintain the persistance of Right class into the Rights table.
*/
class RightDao extends RightBaseDao implements RightsDaoInterface {

    /**
     * Returns a list of all the rights for the user passed in parameter.
     *
     * @param string $user_id
     * @return array<RightInterface>
     */
    public function getRightsForUser($user_id)
    {
    }

    /**
     * Returns the RightInterface object associated to the user (or null if the
     * user has no such right).
     *
     * @param string $user_id
     * @param string $right
     * @return RightInterface
     */
    public function getRightForUser($user_id, $right)
    {
    }
}
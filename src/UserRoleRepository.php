<?php

namespace Chaos\Modules\Account;

use Chaos\Repository\AbstractEntityRepository;

/**
 * Class UserRoleRepository.
 */
class UserRoleRepository extends AbstractEntityRepository
{
    /**
     * @var string
     */
    protected $_entityName = 'Chaos\Modules\Account\Entity\UserRole';
}

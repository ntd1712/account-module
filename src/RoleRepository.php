<?php

namespace Chaos\Modules\Account;

use Chaos\Repository\AbstractEntityRepository;

/**
 * Class RoleRepository.
 */
class RoleRepository extends AbstractEntityRepository
{
    /**
     * @var string
     */
    protected $_entityName = 'Chaos\Modules\Account\Entity\Role';
}

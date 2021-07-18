<?php

namespace Chaos\Modules\Account;

use Chaos\Repository\AbstractEntityRepository;

/**
 * Class PermissionRepository.
 */
class PermissionRepository extends AbstractEntityRepository
{
    /**
     * @var string
     */
    protected $_entityName = 'Chaos\Modules\Account\Entity\Permission';
}

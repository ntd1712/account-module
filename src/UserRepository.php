<?php

namespace Chaos\Modules\Account;

use Chaos\Repository\AbstractEntityRepository;

/**
 * Class UserRepository.
 */
class UserRepository extends AbstractEntityRepository
{
    /**
     * @var string
     */
    protected $_entityName = 'Chaos\Modules\Account\Entity\User';
}

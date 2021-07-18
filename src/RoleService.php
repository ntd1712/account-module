<?php

namespace Chaos\Modules\Account;

use Chaos\Service\AbstractEntityRepositoryService;

/**
 * Class RoleService.
 */
class RoleService extends AbstractEntityRepositoryService
{
    /**
     * @param RoleRepository $roleRepository The repository to use.
     * @param RoleSubscriber $roleSubscriber The subscriber to use.
     */
    public function __construct(RoleRepository $roleRepository, RoleSubscriber $roleSubscriber)
    {
        $this->repository = $roleRepository;
        $this->subscriber = $roleSubscriber;
    }
}

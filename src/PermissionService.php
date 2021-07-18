<?php

namespace Chaos\Modules\Account;

use Chaos\Service\AbstractEntityRepositoryService;

/**
 * Class PermissionService.
 */
class PermissionService extends AbstractEntityRepositoryService
{
    /**
     * @param PermissionRepository $permissionRepository The repository to use.
     * @param PermissionSubscriber $permissionSubscriber The subscriber to use.
     */
    public function __construct(PermissionRepository $permissionRepository, PermissionSubscriber $permissionSubscriber)
    {
        $this->repository = $permissionRepository;
        $this->subscriber = $permissionSubscriber;
    }
}

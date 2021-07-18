<?php

namespace Chaos\Modules\Account;

use Chaos\Service\AbstractEntityRepositoryService;

/**
 * Class UserService.
 */
class UserService extends AbstractEntityRepositoryService
{
    /**
     * @param UserRepository $userRepository The repository to use.
     * @param UserSubscriber $userSubscriber The subscriber to use.
     */
    public function __construct(UserRepository $userRepository, UserSubscriber $userSubscriber)
    {
        $this->repository = $userRepository;
        $this->subscriber = $userSubscriber;
    }
}

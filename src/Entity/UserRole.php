<?php

namespace Chaos\Modules\Account\Entity;

/**
 * Class UserRole.
 *
 * @Doctrine\ORM\Mapping\Entity(repositoryClass="Chaos\Modules\Account\UserRoleRepository")
 * @Doctrine\ORM\Mapping\EntityListeners({"Chaos\Modules\Account\UserRoleListener"})
 * @Doctrine\ORM\Mapping\Table(name="users_roles")
 */
class UserRole
{
    /**
     * @Doctrine\ORM\Mapping\Id
     * @Doctrine\ORM\Mapping\ManyToOne(targetEntity="User", inversedBy="Roles")
     * @Doctrine\ORM\Mapping\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $User;

    /**
     * @Doctrine\ORM\Mapping\Id
     * @Doctrine\ORM\Mapping\ManyToOne(targetEntity="Role", inversedBy="Users")
     * @Doctrine\ORM\Mapping\JoinColumn(name="role_id", referencedColumnName="id")
     */
    private $Role;

    /**
     * @JMS\Serializer\Annotation\Type("bool")
     *
     * @Doctrine\ORM\Mapping\Column(name="is_primary", type="boolean", nullable=true)
     */
    private $IsPrimary;

    /**
     * @return bool
     */
    public function isPrimary()
    {
        return $this->IsPrimary;
    }

    /**
     * @param bool $isPrimary Value.
     *
     * @return $this
     */
    public function setIsPrimary($isPrimary)
    {
        $this->IsPrimary = $isPrimary;

        return $this;
    }
}

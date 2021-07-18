<?php

namespace Chaos\Modules\Account\Entity;

use Chaos\Entity\Mixin\AppTrait;
use Chaos\Entity\Mixin\AuditTrait;

/**
 * Class Role.
 *
 * @Doctrine\ORM\Mapping\Entity(repositoryClass="Chaos\Modules\Account\RoleRepository")
 * @Doctrine\ORM\Mapping\EntityListeners({"Chaos\Modules\Account\RoleListener"})
 * @Doctrine\ORM\Mapping\Table(name="roles")
 */
class Role
{
    use AuditTrait, AppTrait;

    /**
     * @JMS\Serializer\Annotation\Type("int")
     *
     * @Doctrine\ORM\Mapping\Id
     * @Doctrine\ORM\Mapping\GeneratedValue
     * @Doctrine\ORM\Mapping\Column(name="id", type="integer")
     */
    private $Id;

    /**
     * @JMS\Serializer\Annotation\Type("string")
     *
     * @Doctrine\ORM\Mapping\Column(name="name", type="string")
     */
    private $Name;

    /**
     * @JMS\Serializer\Annotation\Type("string")
     *
     * @Doctrine\ORM\Mapping\Column(name="description", type="string", nullable=true)
     */
    private $Description;

    /**
     * @JMS\Serializer\Annotation\Exclude
     * @JMS\Serializer\Annotation\Type("ArrayCollection<Chaos\Modules\Account\Entity\Permission>")
     *
     * @Doctrine\ORM\Mapping\ManyToMany(targetEntity="Permission", fetch="EAGER")
     * @Doctrine\ORM\Mapping\JoinTable(
     *     name="roles_permissions",
     *     joinColumns={@Doctrine\ORM\Mapping\JoinColumn(name="role_id", referencedColumnName="id")},
     *     inverseJoinColumns={@Doctrine\ORM\Mapping\JoinColumn(name="permission_id", referencedColumnName="id")}
     * )
     */
    private $Permissions;

    /**
     * @JMS\Serializer\Annotation\Type("bool")
     *
     * @Doctrine\ORM\Mapping\Column(name="not_use", type="boolean", nullable=true)
     */
    private $NotUse = false;

    /**
     * @JMS\Serializer\Annotation\Exclude
     *
     * @Doctrine\ORM\Mapping\OneToMany(targetEntity="UserRole", mappedBy="Role")
     */
    private $Users;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $id Value.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->Id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * @param string $name Value.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->Name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $description Value.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getPermissions()
    {
        return $this->Permissions;
    }

    /**
     * @return bool
     */
    public function isNotUse()
    {
        return $this->NotUse;
    }

    /**
     * @param bool $notUse Value.
     *
     * @return $this
     */
    public function setNotUse($notUse)
    {
        $this->NotUse = $notUse;

        return $this;
    }
}

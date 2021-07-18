<?php

namespace Chaos\Modules\Account\Entity;

use Chaos\Entity\Mixin\AppTrait;
use Chaos\Entity\Mixin\AuditTrait;

/**
 * Class Permission.
 *
 * @Doctrine\ORM\Mapping\Entity(repositoryClass="Chaos\Modules\Account\PermissionRepository")
 * @Doctrine\ORM\Mapping\EntityListeners({"Chaos\Modules\Account\PermissionListener"})
 * @Doctrine\ORM\Mapping\Table(name="permissions")
 */
class Permission
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
     * @JMS\Serializer\Annotation\Type("bool")
     *
     * @Doctrine\ORM\Mapping\Column(name="not_use", type="boolean", nullable=true)
     */
    private $NotUse = false;

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

<?php

namespace Chaos\Modules\Account\Entity;

use Chaos\Entity\Mixin\AppTrait;
use Chaos\Entity\Mixin\AuditTrait;

/**
 * Class User.
 *
 * @Doctrine\ORM\Mapping\Entity(repositoryClass="Chaos\Modules\Account\UserRepository")
 * @Doctrine\ORM\Mapping\EntityListeners({"Chaos\Modules\Account\UserListener"})
 * @Doctrine\ORM\Mapping\Table(name="users")
 */
class User
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
     * @Doctrine\ORM\Mapping\Column(name="email", type="string", nullable=true)
     */
    private $Email;

    /**
     * @JMS\Serializer\Annotation\Type("DateTime<'Y-m-d H:i:s'>")
     *
     * @Doctrine\ORM\Mapping\Column(name="email_verified_at", type="datetime", nullable=true)
     */
    private $EmailVerifiedAt;

    /**
     * @JMS\Serializer\Annotation\Type("string")
     *
     * @Doctrine\ORM\Mapping\Column(name="password", type="string", nullable=true)
     */
    private $Password;

    /**
     * @JMS\Serializer\Annotation\Type("DateTime<'Y-m-d H:i:s'>")
     *
     * @Doctrine\ORM\Mapping\Column(name="password_expiry_date", type="datetime", nullable=true)
     */
    private $PasswordExpiryDate;

    /**
     * @JMS\Serializer\Annotation\Type("string")
     *
     * @Doctrine\ORM\Mapping\Column(name="remember_token", type="string", length=100, nullable=true)
     */
    private $RememberToken;

    /**
     * @JMS\Serializer\Annotation\Type("string")
     *
     * @Doctrine\ORM\Mapping\Column(name="open_id", type="string", length=64, nullable=true)
     */
    private $OpenId;

    /**
     * @JMS\Serializer\Annotation\Type("string")
     *
     * @Doctrine\ORM\Mapping\Column(name="locale", type="string", length=20, nullable=true)
     */
    private $Locale;

    /**
     * @JMS\Serializer\Annotation\Type("string")
     *
     * @Doctrine\ORM\Mapping\Column(name="timezone", type="string", nullable=true)
     */
    private $Timezone;

    /**
     * @JMS\Serializer\Annotation\Type("array")
     *
     * @Doctrine\ORM\Mapping\Column(name="profile", type="json", nullable=true)
     */
    private $Profile;

    /**
     * @JMS\Serializer\Annotation\Exclude
     * @JMS\Serializer\Annotation\Type("ArrayCollection<Chaos\Modules\Account\Entity\UserRole>")
     *
     * @Doctrine\ORM\Mapping\OneToMany(targetEntity="UserRole", mappedBy="User", cascade={"all"}, fetch="EAGER")
     */
    private $Roles;

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
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $email Value.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->Email = $email;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEmailVerifiedAt()
    {
        return $this->EmailVerifiedAt;
    }

    /**
     * @param \DateTime $emailVerifiedAt Value.
     *
     * @return $this
     */
    public function setEmailVerifiedAt($emailVerifiedAt)
    {
        $this->EmailVerifiedAt = $emailVerifiedAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param string $password Value.
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->Password = $password;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getPasswordExpiryDate()
    {
        return $this->PasswordExpiryDate;
    }

    /**
     * @param \DateTime $passwordExpiryDate Value.
     *
     * @return $this
     */
    public function setPasswordExpiryDate($passwordExpiryDate)
    {
        $this->PasswordExpiryDate = $passwordExpiryDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getRememberToken()
    {
        return $this->RememberToken;
    }

    /**
     * @param string $rememberToken Value.
     *
     * @return $this
     */
    public function setRememberToken($rememberToken)
    {
        $this->RememberToken = $rememberToken;

        return $this;
    }

    /**
     * @return string
     */
    public function getOpenId()
    {
        return $this->OpenId;
    }

    /**
     * @param string $openId Value.
     *
     * @return $this
     */
    public function setOpenId($openId)
    {
        $this->OpenId = $openId;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocale()
    {
        return $this->Locale;
    }

    /**
     * @param string $locale Value.
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->Locale = $locale;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimezone()
    {
        return $this->Timezone;
    }

    /**
     * @param string $timezone Value.
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->Timezone = $timezone;

        return $this;
    }

    /**
     * @return array
     */
    public function getProfile()
    {
        return $this->Profile;
    }

    /**
     * @param array $profile Value.
     *
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->Profile = $profile;

        return $this;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getRoles()
    {
        return $this->Roles;
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

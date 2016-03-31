<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 *
 * @SuppressWarnings(PHPMD)
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, unique=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var int
     *
     * @ORM\Column(name="tier", type="integer")
     */
    private $tier;

    /**
     * @var int
     *
     * @ORM\Column(name="totalFlashCount", type="integer")
     */
    private $totalFlashCount;

    /**
     * @var int
     *
     * @ORM\Column(name="successfulFlashCount", type="integer")
     */
    private $successfulFlashCount;

    /**
     * @var int
     *
     * @ORM\Column(name="failedFlashCount", type="integer")
     */
    private $failedFlashCount;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = password_hash($password, PASSWORD_BCRYPT);

        return $this;
    }

    /**
     * Get password
     *
     * @return hashed password string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set tier
     *
     * @param integer $tier
     *
     * @return User
     */
    public function setTier($tier)
    {
        $this->tier = $tier;

        return $this;
    }

    /**
     * Get tier
     *
     * @return int
     */
    public function getTier()
    {
        return $this->tier;
    }

    /**
     * Set totalFlashCount
     *
     * @param integer $totalFlashCount
     *
     * @return User
     */
    public function setTotalFlashCount($totalFlashCount)
    {
        $this->totalFlashCount = $totalFlashCount;

        return $this;
    }

    /**
     * Get totalFlashCount
     *
     * @return int
     */
    public function getTotalFlashCount()
    {
        return $this->totalFlashCount;
    }

    /**
     * Set successfulFlashCount
     *
     * @param integer $successfulFlashCount
     *
     * @return User
     */
    public function setSuccessfulFlashCount($successfulFlashCount)
    {
        $this->successfulFlashCount = $successfulFlashCount;

        return $this;
    }

    /**
     * Get successfulFlashCount
     *
     * @return int
     */
    public function getSuccessfulFlashCount()
    {
        return $this->successfulFlashCount;
    }

    /**
     * Set failedFlashCount
     *
     * @param integer $failedFlashCount
     *
     * @return User
     */
    public function setFailedFlashCount($failedFlashCount)
    {
        $this->failedFlashCount = $failedFlashCount;

        return $this;
    }

    /**
     * Get failedFlashCount
     *
     * @return int
     */
    public function getFailedFlashCount()
    {
        return $this->failedFlashCount;
    }
}

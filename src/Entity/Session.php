<?php

namespace Ang3\Bundle\PdoSessionHandlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Cache(usage="NONSTRICT_READ_WRITE")
 * @ORM\Table(name="sessions")
 * @ORM\Entity(repositoryClass="Ang3\Bundle\PdoSessionHandlerBundle\Repository\SessionRepository")
 */
class Session
{
    /**
     * @var string
     *
     * @ORM\Column(name="sess_id", type="string", length=255)
     * @ORM\Id
     */
    protected $id;

    /**
     * @var resource
     *
     * @ORM\Column(name="sess_data", type="blob")
     */
    protected $data;

    /**
     * @var int
     *
     * @ORM\Column(name="sess_time", type="integer")
     */
    protected $time;

    /**
     * @var int
     *
     * @ORM\Column(name="sess_lifetime", type="integer")
     */
    protected $lifetime;

    /**
     * Sets id.
     *
     * @param string $id
     *
     * @return Session
     */
    public function setId($id)
    {
        $this->id = (string) $id;

        return $this;
    }

    /**
     * Gets id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets data.
     *
     * @param resource $data
     *
     * @return Session
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Gets data.
     *
     * @return resource
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets time.
     *
     * @param int $time
     *
     * @return Session
     */
    public function setTime($time)
    {
        $this->time = (int) $time;

        return $this;
    }

    /**
     * Gets time.
     *
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets lifetime.
     *
     * @param int $lifetime
     *
     * @return Session
     */
    public function setLifetime($lifetime)
    {
        $this->lifetime = (int) $lifetime;

        return $this;
    }

    /**
     * Gets lifetime.
     *
     * @return int
     */
    public function getLifetime()
    {
        return $this->lifetime;
    }
}

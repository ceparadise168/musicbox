<?php

namespace AppBundle\Entity\MusicBox;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Student
 *
 * @ORM\Table(name="music_box_student")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MusicBox\StudentRepository")
 */
class Student
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_piano", type="boolean")
     */
    private $isPiano;


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
     * Set name
     *
     * @param string $name
     *
     * @return Student
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Student
     */
    public function setCreatedAt($createdAt)
    {
        // $this->createdAt = $createdAt;
        $date = new \ DateTime();

        $this->createdAt = $date ;
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set isPiano
     *
     * @param boolean $isPiano
     *
     * @return Student
     */
    public function setIsPiano($isPiano)
    {
        $this->isPiano = $isPiano;

        return $this;
    }

    /**
     * Get isPiano
     *
     * @return bool
     */
    public function getIsPiano()
    {
        return $this->isPiano;
    }

    public  function toArray()
    {
        $result = [];

        $result['id'] = $this->getId();
        $result['name'] = $this->getName();
        $result['created_at'] = $this->getCreatedAt();
        $result['is_piano'] = $this->getIsPiano();

        return $result;
    }
}


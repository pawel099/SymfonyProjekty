<?php

namespace webinarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity(repositoryClass="webinarBundle\Repository\commentsRepository")
 */
class comments
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
      * @ORM\ManyToOne(targetEntity="posts",inversedBy="comments");
     */
    protected $posts;

    /**
     * @var string
     *
     * @ORM\Column(name="uzytkownik", type="string", length=155)
     */
    private $uzytkownik;

    /**
     * @var string
     *
     * @ORM\Column(name="tresc", type="text")
     */
    private $tresc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetimetz")
     */
    private $data;


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
     * Set uzytkownik
     *
     * @param string $uzytkownik
     *
     * @return comments
     */
    public function setUzytkownik($uzytkownik)
    {
        $this->uzytkownik = $uzytkownik;

        return $this;
    }

    /**
     * Get uzytkownik
     *
     * @return string
     */
    public function getUzytkownik()
    {
        return $this->uzytkownik;
    }

    /**
     * Set tresc
     *
     * @param string $tresc
     *
     * @return comments
     */
    public function setTresc($tresc)
    {
        $this->tresc = $tresc;

        return $this;
    }

    /**
     * Get tresc
     *
     * @return string
     */
    public function getTresc()
    {
        return $this->tresc;
    }

    /**
     * Set data
     *
     * @param \DateTime $data
     *
     * @return comments
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set posts
     *
     * @param \webinarBundle\Entity\posts $posts
     *
     * @return comments
     */
    public function setPosts(\webinarBundle\Entity\posts $posts = null)
    {
        $this->posts = $posts;

        return $this;
    }

    /**
     * Get posts
     *
     * @return \webinarBundle\Entity\posts
     */
    public function getPosts()
    {
        return $this->posts;
    }
}

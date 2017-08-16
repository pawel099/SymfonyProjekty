<?php

namespace webinarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * posts
 *
 * @ORM\Table(name="posts")
 * @ORM\Entity(repositoryClass="webinarBundle\Repository\postsRepository")
 */
class posts
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
      * @ORM\OneToMany(targetEntity="comments",mappedBy="posts",cascade={"all"});
     */
    protected $comment;
	

    /**
     * @var string
     *
     * @ORM\Column(name="post_name", type="string", length=155)
     */
    private $postName;
	
	
	
	 /**
     * @var string
     *
     * @ORM\Column(name="mems_img", type="string", length=155)
     */
    private $memy;
	
	
	

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
     * Set postName
     *
     * @param string $postName
     *
     * @return posts
     */
    public function setPostName($postName)
    {
        $this->postName = $postName;

        return $this;
    }

    /**
     * Get postName
     *
     * @return string
     */
    public function getPostName()
    {
        return $this->postName;
    }

    /**
     * Set tresc
     *
     * @param string $tresc
     *
     * @return posts
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
     * @return posts
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
     * Constructor
     */
    public function __construct()
    {
        $this->comment = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add comment
     *
     * @param \webinarBundle\Entity\comments $comment
     *
     * @return posts
     */
    public function addComment(\webinarBundle\Entity\comments $comment)
    {
        $this->comment[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \webinarBundle\Entity\comments $comment
     */
    public function removeComment(\webinarBundle\Entity\comments $comment)
    {
        $this->comment->removeElement($comment);
    }

    /**
     * Get comment
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComment()
    {
        return $this->comment;
    }
}

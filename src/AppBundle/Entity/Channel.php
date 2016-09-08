<?php

namespace AppBundle\Entity;

class Channel
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var Channel
     */
    private $parent;

    /**
     * @var ArrayCollection
     */
    private $childrens;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->childrens = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->getName();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Channel
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
     * Set status
     *
     * @param boolean $status
     * @return Channel
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Add childrens
     *
     * @param \AppBundle\Entity\Channel $childrens
     * @return Channel
     */
    public function addChildren(\AppBundle\Entity\Channel $childrens)
    {
        $this->childrens[] = $childrens;

        return $this;
    }

    /**
     * Remove childrens
     *
     * @param \AppBundle\Entity\Channel $childrens
     */
    public function removeChildren(\AppBundle\Entity\Channel $childrens)
    {
        $this->childrens->removeElement($childrens);
    }

    /**
     * Get childrens
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getChildrens()
    {
        return $this->childrens;
    }

    /**
     * Set parent
     *
     * @param \AppBundle\Entity\Channel $parent
     * @return Channel
     */
    public function setParent(\AppBundle\Entity\Channel $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \AppBundle\Entity\Channel
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set created_at
     *
     * @param \DateTime $createdAt
     * @return Channel
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updated_at
     *
     * @param \DateTime $updatedAt
     * @return Channel
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    public function updatedTimestamps()
    {
        $this->setUpdatedAt(new \DateTime('now'));

        if ($this->getCreatedAt() == null) {
            $this->setCreatedAt(new \DateTime('now'));
        }
    }
}

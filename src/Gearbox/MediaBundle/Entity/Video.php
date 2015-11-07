<?php

namespace Gearbox\MediaBundle\Entity;

use Gedmo\Timestampable\Traits\Timestampable;

/**
 * Video
 */
class Video
{
    use Timestampable;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $releasedAt;

    /**
     * @var string
     */
    private $updatedBy = 'system';

    /**
     * @var string
     */
    private $createdBy = 'system';

    /**
     * @var Collection
     */
    private $collection;

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
     *
     * @return Video
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
     * Set description
     *
     * @param string $description
     *
     * @return Video
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set released
     *
     * @param \DateTime $releasedAt
     *
     * @return Video
     */
    public function setReleasedAt($releasedAt)
    {
        $this->releasedAt = $releasedAt;

        return $this;
    }

    /**
     * Get released
     *
     * @return \DateTime
     */
    public function getReleasedAt()
    {
        return $this->releasedAt;
    }

    /**
     * Set modifiedBy
     *
     * @param string $updatedBy
     *
     * @return Video
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get modifiedBy
     *
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set addedBy
     *
     * @param string $createdBy
     *
     * @return Video
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get addedBy
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @return Collection
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param Collection $collection
     * @return Video
     */
    public function setCollection($collection)
    {
        $this->collection = $collection;
        return $this;
    }
}


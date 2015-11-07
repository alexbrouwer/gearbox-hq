<?php

namespace Gearbox\MediaBundle\Entity;

use Gedmo\Timestampable\Traits\Timestampable;
use Gedmo\Tree\Traits\NestedSet;

/**
 * Collection
 */
class Collection
{
    use Timestampable;
    use NestedSet;

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
    private $type;

    /**
     * @var Collection[]
     */
    private $children;

    /**
     * @var Collection|null
     */
    private $parent;

    /**
     * @var string
     */
    private $createdBy = 'system';

    /**
     * @var string
     */
    private $updatedBy = 'system';

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
     * @return Collection
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
     * Set type
     *
     * @param string $type
     *
     * @return Collection
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return Collection[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param Collection[] $children
     * @return Collection
     */
    public function setChildren($children)
    {
        $this->children = $children;
        return $this;
    }

    /**
     * @return Collection|null
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param Collection|null $parent
     * @return Collection
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
        return $this;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     *
     * @return Collection
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set modifiedBy
     *
     * @param string $updatedBy
     *
     * @return Collection
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
     * @return string
     */
    public function __toString()
    {
        return sprintf('%s (%s)', $this->getName(), $this->getType());
    }
}


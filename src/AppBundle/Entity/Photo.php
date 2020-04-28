<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * photo
 *
 * @ORM\Table(name="photo")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\photoRepository")
 */
class photo
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
     * @ORM\Column(name="path", type="string", length=255)
     */
    private $path;

    /**
     * @var int
     *
     * @ORM\Column(name="id_main", type="integer")
     */
    private $idMain;

    /**
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="Photo")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $productId;



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
     * Set path
     *
     * @param string $path
     *
     * @return photo
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set idMain
     *
     * @param integer $idMain
     *
     * @return photo
     */
    public function setIdMain($idMain)
    {
        $this->idMain = $idMain;

        return $this;
    }

    /**
     * Get idMain
     *
     * @return int
     */
    public function getIdMain()
    {
        return $this->idMain;
    }

    /**
     * Set productId
     *
     * @param integer $productId
     *
     * @return photo
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }
}


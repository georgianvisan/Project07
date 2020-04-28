<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * orderitem
 *
 * @ORM\Table(name="orderitem")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\orderitemRepository")
 */
class orderItem
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
     * @ORM\ManyToOne(targetEntity="product", inversedBy="OrderItem")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $productId;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */

    private $quantity;

    /**
     * @var float
     *
     * @ORM\Column(name="unitprice", type="float")
     * @ORM\OneToOne(targetEntity="Product",mappedBy="price")
     */
    private $unitPrice;

    /**
     * @ORM\ManyToOne(targetEntity="orders", inversedBy="OrderItem")
     * @ORM\JoinColumn(name="order_id", referencedColumnName="id")
     */
    private $orderId;


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
     * Set productId
     *
     * @param integer $productId
     *
     * @return orderItem
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

    /**
     * Set orderId
     *
     * @param integer $orderId
     *
     * @return orderItem
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->unitPrice;
    }

    /**
     * @param float $unitPrice
     */
    public function setUnitPrice($unitPrice)
    {
        $this->unitPrice = $unitPrice;
    }


}


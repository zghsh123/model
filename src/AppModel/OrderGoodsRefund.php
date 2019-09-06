<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 订单商品退款
 * Class OrderGoodsRefund
 *
 * @since 2.0
 *
 * @Entity(table="order_goods_refund")
 */
class OrderGoodsRefund extends Model
{
    /**
     * 
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 退款原因
     *
     * @Column()
     *
     * @var string|null
     */
    private $reason;

    /**
     * 订单主表id
     *
     * @Column(name="order_id", prop="orderId")
     *
     * @var int|null
     */
    private $orderId;

    /**
     * 订单Order_goods副表id
     *
     * @Column(name="order_goods_id", prop="orderGoodsId")
     *
     * @var string|null
     */
    private $orderGoodsId;

    /**
     * 退款说明
     *
     * @Column()
     *
     * @var string|null
     */
    private $desc;

    /**
     * 退款图片
     *
     * @Column()
     *
     * @var string|null
     */
    private $imgs;

    /**
     * 商家拒绝的理由
     *
     * @Column(name="mem_refuse", prop="memRefuse")
     *
     * @var string|null
     */
    private $memRefuse;

    /**
     * 退款状态 1同意 2拒绝
     *
     * @Column()
     *
     * @var int|null
     */
    private $status;

    /**
     * 退款0 退货1
     *
     * @Column()
     *
     * @var int|null
     */
    private $type;

    /**
     * 创建时间
     *
     * @Column(name="created_at", prop="createdAt")
     *
     * @var string|null
     */
    private $createdAt;

    /**
     * 更新时间
     *
     * @Column(name="updated_at", prop="updatedAt")
     *
     * @var string|null
     */
    private $updatedAt;

    /**
     * 删除时间
     *
     * @Column(name="deleted_at", prop="deletedAt")
     *
     * @var string|null
     */
    private $deletedAt;


    /**
     * @param int $id
     *
     * @return void
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string|null $reason
     *
     * @return void
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
    }

    /**
     * @param int|null $orderId
     *
     * @return void
     */
    public function setOrderId(?int $orderId): void
    {
        $this->orderId = $orderId;
    }

    /**
     * @param string|null $orderGoodsId
     *
     * @return void
     */
    public function setOrderGoodsId(?string $orderGoodsId): void
    {
        $this->orderGoodsId = $orderGoodsId;
    }

    /**
     * @param string|null $desc
     *
     * @return void
     */
    public function setDesc(?string $desc): void
    {
        $this->desc = $desc;
    }

    /**
     * @param string|null $imgs
     *
     * @return void
     */
    public function setImgs(?string $imgs): void
    {
        $this->imgs = $imgs;
    }

    /**
     * @param string|null $memRefuse
     *
     * @return void
     */
    public function setMemRefuse(?string $memRefuse): void
    {
        $this->memRefuse = $memRefuse;
    }

    /**
     * @param int|null $status
     *
     * @return void
     */
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }

    /**
     * @param int|null $type
     *
     * @return void
     */
    public function setType(?int $type): void
    {
        $this->type = $type;
    }

    /**
     * @param string|null $createdAt
     *
     * @return void
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param string|null $updatedAt
     *
     * @return void
     */
    public function setUpdatedAt(?string $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @param string|null $deletedAt
     *
     * @return void
     */
    public function setDeletedAt(?string $deletedAt): void
    {
        $this->deletedAt = $deletedAt;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

    /**
     * @return int|null
     */
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * @return string|null
     */
    public function getOrderGoodsId(): ?string
    {
        return $this->orderGoodsId;
    }

    /**
     * @return string|null
     */
    public function getDesc(): ?string
    {
        return $this->desc;
    }

    /**
     * @return string|null
     */
    public function getImgs(): ?string
    {
        return $this->imgs;
    }

    /**
     * @return string|null
     */
    public function getMemRefuse(): ?string
    {
        return $this->memRefuse;
    }

    /**
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * @return string|null
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * @return string|null
     */
    public function getDeletedAt(): ?string
    {
        return $this->deletedAt;
    }

}

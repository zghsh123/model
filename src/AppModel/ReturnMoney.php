<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 订单商品预返费
 * Class ReturnMoney
 *
 * @since 2.0
 *
 * @Entity(table="return_money")
 */
class ReturnMoney extends Model
{
    /**
     * 主键id
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 用户的id
     *
     * @Column(name="user_id", prop="userId")
     *
     * @var int
     */
    private $userId;

    /**
     * 上级人的id
     *
     * @Column(name="upper_user_id", prop="upperUserId")
     *
     * @var int
     */
    private $upperUserId;

    /**
     * 返现金额
     *
     * @Column()
     *
     * @var float
     */
    private $money;

    /**
     * 0---未返费   1------成功返费      2----取消返费
     *
     * @Column()
     *
     * @var int|null
     */
    private $status;

    /**
     * 订单id
     *
     * @Column(name="order_id", prop="orderId")
     *
     * @var int|null
     */
    private $orderId;

    /**
     * 订单商品id
     *
     * @Column(name="order_good_id", prop="orderGoodId")
     *
     * @var int|null
     */
    private $orderGoodId;

    /**
     * 预计返费时间
     *
     * @Column(name="close_time", prop="closeTime")
     *
     * @var string|null
     */
    private $closeTime;

    /**
     * 
     *
     * @Column(name="created_at", prop="createdAt")
     *
     * @var string|null
     */
    private $createdAt;

    /**
     * 
     *
     * @Column(name="updated_at", prop="updatedAt")
     *
     * @var string|null
     */
    private $updatedAt;

    /**
     * 
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
     * @param int $userId
     *
     * @return void
     */
    public function setUserId(int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @param int $upperUserId
     *
     * @return void
     */
    public function setUpperUserId(int $upperUserId): void
    {
        $this->upperUserId = $upperUserId;
    }

    /**
     * @param float $money
     *
     * @return void
     */
    public function setMoney(float $money): void
    {
        $this->money = $money;
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
     * @param int|null $orderId
     *
     * @return void
     */
    public function setOrderId(?int $orderId): void
    {
        $this->orderId = $orderId;
    }

    /**
     * @param int|null $orderGoodId
     *
     * @return void
     */
    public function setOrderGoodId(?int $orderGoodId): void
    {
        $this->orderGoodId = $orderGoodId;
    }

    /**
     * @param string|null $closeTime
     *
     * @return void
     */
    public function setCloseTime(?string $closeTime): void
    {
        $this->closeTime = $closeTime;
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
     * @return int
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @return int
     */
    public function getUpperUserId(): ?int
    {
        return $this->upperUserId;
    }

    /**
     * @return float
     */
    public function getMoney(): ?float
    {
        return $this->money;
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
    public function getOrderId(): ?int
    {
        return $this->orderId;
    }

    /**
     * @return int|null
     */
    public function getOrderGoodId(): ?int
    {
        return $this->orderGoodId;
    }

    /**
     * @return string|null
     */
    public function getCloseTime(): ?string
    {
        return $this->closeTime;
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

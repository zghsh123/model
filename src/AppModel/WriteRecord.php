<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 商品核销记录
 * Class WriteRecord
 *
 * @since 2.0
 *
 * @Entity(table="write_record")
 */
class WriteRecord extends Model
{
    /**
     * 核销记录id
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 订单商品id
     *
     * @Column(name="order_good_id", prop="orderGoodId")
     *
     * @var int|null
     */
    private $orderGoodId;

    /**
     * 订单已审核张数
     *
     * @Column(name="order_write_num", prop="orderWriteNum")
     *
     * @var int|null
     */
    private $orderWriteNum;

    /**
     * 订单剩余张数
     *
     * @Column(name="order_wait_num", prop="orderWaitNum")
     *
     * @var int|null
     */
    private $orderWaitNum;

    /**
     * 核销时间
     *
     * @Column(name="write_time", prop="writeTime")
     *
     * @var string|null
     */
    private $writeTime;

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
     * @param int|null $orderGoodId
     *
     * @return void
     */
    public function setOrderGoodId(?int $orderGoodId): void
    {
        $this->orderGoodId = $orderGoodId;
    }

    /**
     * @param int|null $orderWriteNum
     *
     * @return void
     */
    public function setOrderWriteNum(?int $orderWriteNum): void
    {
        $this->orderWriteNum = $orderWriteNum;
    }

    /**
     * @param int|null $orderWaitNum
     *
     * @return void
     */
    public function setOrderWaitNum(?int $orderWaitNum): void
    {
        $this->orderWaitNum = $orderWaitNum;
    }

    /**
     * @param string|null $writeTime
     *
     * @return void
     */
    public function setWriteTime(?string $writeTime): void
    {
        $this->writeTime = $writeTime;
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
     * @return int|null
     */
    public function getOrderGoodId(): ?int
    {
        return $this->orderGoodId;
    }

    /**
     * @return int|null
     */
    public function getOrderWriteNum(): ?int
    {
        return $this->orderWriteNum;
    }

    /**
     * @return int|null
     */
    public function getOrderWaitNum(): ?int
    {
        return $this->orderWaitNum;
    }

    /**
     * @return string|null
     */
    public function getWriteTime(): ?string
    {
        return $this->writeTime;
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

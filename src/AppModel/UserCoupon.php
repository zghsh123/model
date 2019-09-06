<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 用户——优惠券关系表
 * Class UserCoupon
 *
 * @since 2.0
 *
 * @Entity(table="user_coupon")
 */
class UserCoupon extends Model
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
     * 用户id
     *
     * @Column(name="user_id", prop="userId")
     *
     * @var int|null
     */
    private $userId;

    /**
     * 优惠券id
     *
     * @Column(name="coupon_id", prop="couponId")
     *
     * @var int|null
     */
    private $couponId;

    /**
     * 
     *
     * @Column()
     *
     * @var string|null
     */
    private $phone;

    /**
     * 是否使用
     *
     * @Column(name="is_use", prop="isUse")
     *
     * @var int|null
     */
    private $isUse;

    /**
     * 来源
     *
     * @Column()
     *
     * @var string|null
     */
    private $source;

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
     * @param int|null $userId
     *
     * @return void
     */
    public function setUserId(?int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @param int|null $couponId
     *
     * @return void
     */
    public function setCouponId(?int $couponId): void
    {
        $this->couponId = $couponId;
    }

    /**
     * @param string|null $phone
     *
     * @return void
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @param int|null $isUse
     *
     * @return void
     */
    public function setIsUse(?int $isUse): void
    {
        $this->isUse = $isUse;
    }

    /**
     * @param string|null $source
     *
     * @return void
     */
    public function setSource(?string $source): void
    {
        $this->source = $source;
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
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @return int|null
     */
    public function getCouponId(): ?int
    {
        return $this->couponId;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @return int|null
     */
    public function getIsUse(): ?int
    {
        return $this->isUse;
    }

    /**
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
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

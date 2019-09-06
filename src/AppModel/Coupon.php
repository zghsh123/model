<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 
 * Class Coupon
 *
 * @since 2.0
 *
 * @Entity(table="coupon")
 */
class Coupon extends Model
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
     * 是否自营
     *
     * @Column(name="is_all_goods", prop="isAllGoods")
     *
     * @var int|null
     */
    private $isAllGoods;

    /**
     * 标题
     *
     * @Column(name="coupon_name", prop="couponName")
     *
     * @var string|null
     */
    private $couponName;

    /**
     * 领取的开始时间
     *
     * @Column(name="coupon_start_time", prop="couponStartTime")
     *
     * @var string|null
     */
    private $couponStartTime;

    /**
     * 领取的结束时间
     *
     * @Column(name="coupon_end_time", prop="couponEndTime")
     *
     * @var string|null
     */
    private $couponEndTime;

    /**
     * 使用开始时间
     *
     * @Column(name="coupon_use_start_time", prop="couponUseStartTime")
     *
     * @var string|null
     */
    private $couponUseStartTime;

    /**
     * 使用结束时间
     *
     * @Column(name="coupon_use_end_time", prop="couponUseEndTime")
     *
     * @var string|null
     */
    private $couponUseEndTime;

    /**
     * 减免金额
     *
     * @Column()
     *
     * @var float|null
     */
    private $money;

    /**
     * 达标金额
     *
     * @Column(name="money_start", prop="moneyStart")
     *
     * @var float|null
     */
    private $moneyStart;

    /**
     * 自营 0 第三方商家id
     *
     * @Column(name="mem_id", prop="memId")
     *
     * @var int|null
     */
    private $memId;

    /**
     * 优惠券数量
     *
     * @Column()
     *
     * @var int|null
     */
    private $count;

    /**
     * 剩余优惠券数量,初始数量应与优惠券数量一致
     *
     * @Column(name="real_count", prop="realCount")
     *
     * @var int|null
     */
    private $realCount;

    /**
     * 是否取消返还
     *
     * @Column(name="is_out_to_user", prop="isOutToUser")
     *
     * @var int|null
     */
    private $isOutToUser;

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
     * 创建人
     *
     * @Column(name="admin_id", prop="adminId")
     *
     * @var int|null
     */
    private $adminId;

    /**
     * 是否删除
     *
     * @Column()
     *
     * @var int|null
     */
    private $status;

    /**
     * 删除的时间
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
     * @param int|null $isAllGoods
     *
     * @return void
     */
    public function setIsAllGoods(?int $isAllGoods): void
    {
        $this->isAllGoods = $isAllGoods;
    }

    /**
     * @param string|null $couponName
     *
     * @return void
     */
    public function setCouponName(?string $couponName): void
    {
        $this->couponName = $couponName;
    }

    /**
     * @param string|null $couponStartTime
     *
     * @return void
     */
    public function setCouponStartTime(?string $couponStartTime): void
    {
        $this->couponStartTime = $couponStartTime;
    }

    /**
     * @param string|null $couponEndTime
     *
     * @return void
     */
    public function setCouponEndTime(?string $couponEndTime): void
    {
        $this->couponEndTime = $couponEndTime;
    }

    /**
     * @param string|null $couponUseStartTime
     *
     * @return void
     */
    public function setCouponUseStartTime(?string $couponUseStartTime): void
    {
        $this->couponUseStartTime = $couponUseStartTime;
    }

    /**
     * @param string|null $couponUseEndTime
     *
     * @return void
     */
    public function setCouponUseEndTime(?string $couponUseEndTime): void
    {
        $this->couponUseEndTime = $couponUseEndTime;
    }

    /**
     * @param float|null $money
     *
     * @return void
     */
    public function setMoney(?float $money): void
    {
        $this->money = $money;
    }

    /**
     * @param float|null $moneyStart
     *
     * @return void
     */
    public function setMoneyStart(?float $moneyStart): void
    {
        $this->moneyStart = $moneyStart;
    }

    /**
     * @param int|null $memId
     *
     * @return void
     */
    public function setMemId(?int $memId): void
    {
        $this->memId = $memId;
    }

    /**
     * @param int|null $count
     *
     * @return void
     */
    public function setCount(?int $count): void
    {
        $this->count = $count;
    }

    /**
     * @param int|null $realCount
     *
     * @return void
     */
    public function setRealCount(?int $realCount): void
    {
        $this->realCount = $realCount;
    }

    /**
     * @param int|null $isOutToUser
     *
     * @return void
     */
    public function setIsOutToUser(?int $isOutToUser): void
    {
        $this->isOutToUser = $isOutToUser;
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
     * @param int|null $adminId
     *
     * @return void
     */
    public function setAdminId(?int $adminId): void
    {
        $this->adminId = $adminId;
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
    public function getIsAllGoods(): ?int
    {
        return $this->isAllGoods;
    }

    /**
     * @return string|null
     */
    public function getCouponName(): ?string
    {
        return $this->couponName;
    }

    /**
     * @return string|null
     */
    public function getCouponStartTime(): ?string
    {
        return $this->couponStartTime;
    }

    /**
     * @return string|null
     */
    public function getCouponEndTime(): ?string
    {
        return $this->couponEndTime;
    }

    /**
     * @return string|null
     */
    public function getCouponUseStartTime(): ?string
    {
        return $this->couponUseStartTime;
    }

    /**
     * @return string|null
     */
    public function getCouponUseEndTime(): ?string
    {
        return $this->couponUseEndTime;
    }

    /**
     * @return float|null
     */
    public function getMoney(): ?float
    {
        return $this->money;
    }

    /**
     * @return float|null
     */
    public function getMoneyStart(): ?float
    {
        return $this->moneyStart;
    }

    /**
     * @return int|null
     */
    public function getMemId(): ?int
    {
        return $this->memId;
    }

    /**
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->count;
    }

    /**
     * @return int|null
     */
    public function getRealCount(): ?int
    {
        return $this->realCount;
    }

    /**
     * @return int|null
     */
    public function getIsOutToUser(): ?int
    {
        return $this->isOutToUser;
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
     * @return int|null
     */
    public function getAdminId(): ?int
    {
        return $this->adminId;
    }

    /**
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @return string|null
     */
    public function getDeletedAt(): ?string
    {
        return $this->deletedAt;
    }

}

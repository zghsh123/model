<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 订单表
 * Class Order
 *
 * @since 2.0
 *
 * @Entity(table="order")
 */
class Order extends Model
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
     * 用户的支付方式1：微信 2:支付宝 3：拉卡拉
     *
     * @Column(name="pay_type", prop="payType")
     *
     * @var int
     */
    private $payType;

    /**
     * 订单优惠总金额
     *
     * @Column(name="order_coupon_price", prop="orderCouponPrice")
     *
     * @var float|null
     */
    private $orderCouponPrice;

    /**
     * 订单支付的总金额
     *
     * @Column(name="total_money", prop="totalMoney")
     *
     * @var float
     */
    private $totalMoney;

    /**
     * 购买人
     *
     * @Column()
     *
     * @var int|null
     */
    private $uid;

    /**
     * 订单号
     *
     * @Column(name="order_code", prop="orderCode")
     *
     * @var string
     */
    private $orderCode;

    /**
     * 0待支付  1 支付成功 2:已发货 3:已收货(订单完成) 4已取消
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 用户真实姓名
     *
     * @Column(name="real_name", prop="realName")
     *
     * @var string|null
     */
    private $realName;

    /**
     * 身份证
     *
     * @Column(name="personal_no", prop="personalNo")
     *
     * @var string|null
     */
    private $personalNo;

    /**
     * 电话
     *
     * @Column()
     *
     * @var string|null
     */
    private $phone;

    /**
     * 省
     *
     * @Column()
     *
     * @var string
     */
    private $province;

    /**
     * 市
     *
     * @Column()
     *
     * @var string
     */
    private $city;

    /**
     * 区
     *
     * @Column()
     *
     * @var string
     */
    private $area;

    /**
     * 用户的详细地址
     *
     * @Column()
     *
     * @var string
     */
    private $address;

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
     * 运费
     *
     * @Column()
     *
     * @var float|null
     */
    private $freight;

    /**
     * 支付时间
     *
     * @Column(name="pay_time", prop="payTime")
     *
     * @var string|null
     */
    private $payTime;

    /**
     * 物流单号
     *
     * @Column(name="logistics_code", prop="logisticsCode")
     *
     * @var string|null
     */
    private $logisticsCode;

    /**
     * 物流公司简写
     *
     * @Column(name="logistics_company_short", prop="logisticsCompanyShort")
     *
     * @var string|null
     */
    private $logisticsCompanyShort;

    /**
     * 物流公司
     *
     * @Column(name="logistics_company", prop="logisticsCompany")
     *
     * @var string|null
     */
    private $logisticsCompany;

    /**
     * 上级id
     *
     * @Column()
     *
     * @var int|null
     */
    private $upplervel;

    /**
     * 发货时间
     *
     * @Column(name="logistics_time", prop="logisticsTime")
     *
     * @var string|null
     */
    private $logisticsTime;


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
     * @param int $payType
     *
     * @return void
     */
    public function setPayType(int $payType): void
    {
        $this->payType = $payType;
    }

    /**
     * @param float|null $orderCouponPrice
     *
     * @return void
     */
    public function setOrderCouponPrice(?float $orderCouponPrice): void
    {
        $this->orderCouponPrice = $orderCouponPrice;
    }

    /**
     * @param float $totalMoney
     *
     * @return void
     */
    public function setTotalMoney(float $totalMoney): void
    {
        $this->totalMoney = $totalMoney;
    }

    /**
     * @param int|null $uid
     *
     * @return void
     */
    public function setUid(?int $uid): void
    {
        $this->uid = $uid;
    }

    /**
     * @param string $orderCode
     *
     * @return void
     */
    public function setOrderCode(string $orderCode): void
    {
        $this->orderCode = $orderCode;
    }

    /**
     * @param int $status
     *
     * @return void
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @param string|null $realName
     *
     * @return void
     */
    public function setRealName(?string $realName): void
    {
        $this->realName = $realName;
    }

    /**
     * @param string|null $personalNo
     *
     * @return void
     */
    public function setPersonalNo(?string $personalNo): void
    {
        $this->personalNo = $personalNo;
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
     * @param string $province
     *
     * @return void
     */
    public function setProvince(string $province): void
    {
        $this->province = $province;
    }

    /**
     * @param string $city
     *
     * @return void
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @param string $area
     *
     * @return void
     */
    public function setArea(string $area): void
    {
        $this->area = $area;
    }

    /**
     * @param string $address
     *
     * @return void
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
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
     * @param float|null $freight
     *
     * @return void
     */
    public function setFreight(?float $freight): void
    {
        $this->freight = $freight;
    }

    /**
     * @param string|null $payTime
     *
     * @return void
     */
    public function setPayTime(?string $payTime): void
    {
        $this->payTime = $payTime;
    }

    /**
     * @param string|null $logisticsCode
     *
     * @return void
     */
    public function setLogisticsCode(?string $logisticsCode): void
    {
        $this->logisticsCode = $logisticsCode;
    }

    /**
     * @param string|null $logisticsCompanyShort
     *
     * @return void
     */
    public function setLogisticsCompanyShort(?string $logisticsCompanyShort): void
    {
        $this->logisticsCompanyShort = $logisticsCompanyShort;
    }

    /**
     * @param string|null $logisticsCompany
     *
     * @return void
     */
    public function setLogisticsCompany(?string $logisticsCompany): void
    {
        $this->logisticsCompany = $logisticsCompany;
    }

    /**
     * @param int|null $upplervel
     *
     * @return void
     */
    public function setUpplervel(?int $upplervel): void
    {
        $this->upplervel = $upplervel;
    }

    /**
     * @param string|null $logisticsTime
     *
     * @return void
     */
    public function setLogisticsTime(?string $logisticsTime): void
    {
        $this->logisticsTime = $logisticsTime;
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
    public function getPayType(): ?int
    {
        return $this->payType;
    }

    /**
     * @return float|null
     */
    public function getOrderCouponPrice(): ?float
    {
        return $this->orderCouponPrice;
    }

    /**
     * @return float
     */
    public function getTotalMoney(): ?float
    {
        return $this->totalMoney;
    }

    /**
     * @return int|null
     */
    public function getUid(): ?int
    {
        return $this->uid;
    }

    /**
     * @return string
     */
    public function getOrderCode(): ?string
    {
        return $this->orderCode;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @return string|null
     */
    public function getRealName(): ?string
    {
        return $this->realName;
    }

    /**
     * @return string|null
     */
    public function getPersonalNo(): ?string
    {
        return $this->personalNo;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getArea(): ?string
    {
        return $this->area;
    }

    /**
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
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

    /**
     * @return float|null
     */
    public function getFreight(): ?float
    {
        return $this->freight;
    }

    /**
     * @return string|null
     */
    public function getPayTime(): ?string
    {
        return $this->payTime;
    }

    /**
     * @return string|null
     */
    public function getLogisticsCode(): ?string
    {
        return $this->logisticsCode;
    }

    /**
     * @return string|null
     */
    public function getLogisticsCompanyShort(): ?string
    {
        return $this->logisticsCompanyShort;
    }

    /**
     * @return string|null
     */
    public function getLogisticsCompany(): ?string
    {
        return $this->logisticsCompany;
    }

    /**
     * @return int|null
     */
    public function getUpplervel(): ?int
    {
        return $this->upplervel;
    }

    /**
     * @return string|null
     */
    public function getLogisticsTime(): ?string
    {
        return $this->logisticsTime;
    }

}

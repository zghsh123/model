<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 订单商品副表
 * Class OrderGoods
 *
 * @since 2.0
 *
 * @Entity(table="order_goods")
 */
class OrderGoods extends Model
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
     * 订单编号
     *
     * @Column(name="order_no", prop="orderNo")
     *
     * @var string
     */
    private $orderNo;

    /**
     * 商品图片地址
     *
     * @Column(name="img_url", prop="imgUrl")
     *
     * @var string
     */
    private $imgUrl;

    /**
     * 货品id
     *
     * @Column(name="good_id", prop="goodId")
     *
     * @var int|null
     */
    private $goodId;

    /**
     * 商品售价
     *
     * @Column(name="goods_price", prop="goodsPrice")
     *
     * @var float
     */
    private $goodsPrice;

    /**
     * 订单商品真实价格
     *
     * @Column(name="real_price", prop="realPrice")
     *
     * @var float
     */
    private $realPrice;

    /**
     * 商品优惠券id
     *
     * @Column(name="coupon_id", prop="couponId")
     *
     * @var int|null
     */
    private $couponId;

    /**
     * 优惠金额
     *
     * @Column(name="coupon_price", prop="couponPrice")
     *
     * @var float|null
     */
    private $couponPrice;

    /**
     * 购买数量
     *
     * @Column(name="goods_nums", prop="goodsNums")
     *
     * @var int
     */
    private $goodsNums;

    /**
     * 商品重量
     *
     * @Column(name="goods_weight", prop="goodsWeight")
     *
     * @var int
     */
    private $goodsWeight;

    /**
     * 商家城市id
     *
     * @Column(name="member_city_id", prop="memberCityId")
     *
     * @var int|null
     */
    private $memberCityId;

    /**
     * 商家id
     *
     * @Column(name="mem_id", prop="memId")
     *
     * @var int
     */
    private $memId;

    /**
     * 商品名称名称
     *
     * @Column(name="goods_name", prop="goodsName")
     *
     * @var string
     */
    private $goodsName;

    /**
     * 1.正常订单 2:申请退款，待审批 3:申请退款，待填写单号 4:退款成功 5:退款拒绝，正常流程 6.填写单号成功，等待退款 7.订单等待退款
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 退款编号
     *
     * @Column(name="logistics_code", prop="logisticsCode")
     *
     * @var string|null
     */
    private $logisticsCode;

    /**
     * 退款公司
     *
     * @Column(name="logistics_company", prop="logisticsCompany")
     *
     * @var string|null
     */
    private $logisticsCompany;

    /**
     * 退款电话
     *
     * @Column(name="logistics_phone", prop="logisticsPhone")
     *
     * @var string|null
     */
    private $logisticsPhone;

    /**
     * 核销数量
     *
     * @Column(name="write_num", prop="writeNum")
     *
     * @var int|null
     */
    private $writeNum;

    /**
     * 核销码
     *
     * @Column(name="write_code", prop="writeCode")
     *
     * @var int|null
     */
    private $writeCode;

    /**
     * 核销开始时间
     *
     * @Column(name="write_start_time", prop="writeStartTime")
     *
     * @var string|null
     */
    private $writeStartTime;

    /**
     * 核销码不可用时间
     *
     * @Column(name="write_close_time", prop="writeCloseTime")
     *
     * @var string|null
     */
    private $writeCloseTime;

    /**
     * 二维码图片
     *
     * @Column(name="write_code_img", prop="writeCodeImg")
     *
     * @var string|null
     */
    private $writeCodeImg;

    /**
     * 1 自己的 2预先导码 3手动
     *
     * @Column(name="is_write_code", prop="isWriteCode")
     *
     * @var int|null
     */
    private $isWriteCode;

    /**
     * 游玩日期
     *
     * @Column(name="play_at", prop="playAt")
     *
     * @var string|null
     */
    private $playAt;

    /**
     * 
     *
     * @Column(name="deleted_at", prop="deletedAt")
     *
     * @var string|null
     */
    private $deletedAt;

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
     * @param int $id
     *
     * @return void
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string $orderNo
     *
     * @return void
     */
    public function setOrderNo(string $orderNo): void
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @param string $imgUrl
     *
     * @return void
     */
    public function setImgUrl(string $imgUrl): void
    {
        $this->imgUrl = $imgUrl;
    }

    /**
     * @param int|null $goodId
     *
     * @return void
     */
    public function setGoodId(?int $goodId): void
    {
        $this->goodId = $goodId;
    }

    /**
     * @param float $goodsPrice
     *
     * @return void
     */
    public function setGoodsPrice(float $goodsPrice): void
    {
        $this->goodsPrice = $goodsPrice;
    }

    /**
     * @param float $realPrice
     *
     * @return void
     */
    public function setRealPrice(float $realPrice): void
    {
        $this->realPrice = $realPrice;
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
     * @param float|null $couponPrice
     *
     * @return void
     */
    public function setCouponPrice(?float $couponPrice): void
    {
        $this->couponPrice = $couponPrice;
    }

    /**
     * @param int $goodsNums
     *
     * @return void
     */
    public function setGoodsNums(int $goodsNums): void
    {
        $this->goodsNums = $goodsNums;
    }

    /**
     * @param int $goodsWeight
     *
     * @return void
     */
    public function setGoodsWeight(int $goodsWeight): void
    {
        $this->goodsWeight = $goodsWeight;
    }

    /**
     * @param int|null $memberCityId
     *
     * @return void
     */
    public function setMemberCityId(?int $memberCityId): void
    {
        $this->memberCityId = $memberCityId;
    }

    /**
     * @param int $memId
     *
     * @return void
     */
    public function setMemId(int $memId): void
    {
        $this->memId = $memId;
    }

    /**
     * @param string $goodsName
     *
     * @return void
     */
    public function setGoodsName(string $goodsName): void
    {
        $this->goodsName = $goodsName;
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
     * @param string|null $logisticsCode
     *
     * @return void
     */
    public function setLogisticsCode(?string $logisticsCode): void
    {
        $this->logisticsCode = $logisticsCode;
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
     * @param string|null $logisticsPhone
     *
     * @return void
     */
    public function setLogisticsPhone(?string $logisticsPhone): void
    {
        $this->logisticsPhone = $logisticsPhone;
    }

    /**
     * @param int|null $writeNum
     *
     * @return void
     */
    public function setWriteNum(?int $writeNum): void
    {
        $this->writeNum = $writeNum;
    }

    /**
     * @param int|null $writeCode
     *
     * @return void
     */
    public function setWriteCode(?int $writeCode): void
    {
        $this->writeCode = $writeCode;
    }

    /**
     * @param string|null $writeStartTime
     *
     * @return void
     */
    public function setWriteStartTime(?string $writeStartTime): void
    {
        $this->writeStartTime = $writeStartTime;
    }

    /**
     * @param string|null $writeCloseTime
     *
     * @return void
     */
    public function setWriteCloseTime(?string $writeCloseTime): void
    {
        $this->writeCloseTime = $writeCloseTime;
    }

    /**
     * @param string|null $writeCodeImg
     *
     * @return void
     */
    public function setWriteCodeImg(?string $writeCodeImg): void
    {
        $this->writeCodeImg = $writeCodeImg;
    }

    /**
     * @param int|null $isWriteCode
     *
     * @return void
     */
    public function setIsWriteCode(?int $isWriteCode): void
    {
        $this->isWriteCode = $isWriteCode;
    }

    /**
     * @param string|null $playAt
     *
     * @return void
     */
    public function setPlayAt(?string $playAt): void
    {
        $this->playAt = $playAt;
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
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getOrderNo(): ?string
    {
        return $this->orderNo;
    }

    /**
     * @return string
     */
    public function getImgUrl(): ?string
    {
        return $this->imgUrl;
    }

    /**
     * @return int|null
     */
    public function getGoodId(): ?int
    {
        return $this->goodId;
    }

    /**
     * @return float
     */
    public function getGoodsPrice(): ?float
    {
        return $this->goodsPrice;
    }

    /**
     * @return float
     */
    public function getRealPrice(): ?float
    {
        return $this->realPrice;
    }

    /**
     * @return int|null
     */
    public function getCouponId(): ?int
    {
        return $this->couponId;
    }

    /**
     * @return float|null
     */
    public function getCouponPrice(): ?float
    {
        return $this->couponPrice;
    }

    /**
     * @return int
     */
    public function getGoodsNums(): ?int
    {
        return $this->goodsNums;
    }

    /**
     * @return int
     */
    public function getGoodsWeight(): ?int
    {
        return $this->goodsWeight;
    }

    /**
     * @return int|null
     */
    public function getMemberCityId(): ?int
    {
        return $this->memberCityId;
    }

    /**
     * @return int
     */
    public function getMemId(): ?int
    {
        return $this->memId;
    }

    /**
     * @return string
     */
    public function getGoodsName(): ?string
    {
        return $this->goodsName;
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
    public function getLogisticsCode(): ?string
    {
        return $this->logisticsCode;
    }

    /**
     * @return string|null
     */
    public function getLogisticsCompany(): ?string
    {
        return $this->logisticsCompany;
    }

    /**
     * @return string|null
     */
    public function getLogisticsPhone(): ?string
    {
        return $this->logisticsPhone;
    }

    /**
     * @return int|null
     */
    public function getWriteNum(): ?int
    {
        return $this->writeNum;
    }

    /**
     * @return int|null
     */
    public function getWriteCode(): ?int
    {
        return $this->writeCode;
    }

    /**
     * @return string|null
     */
    public function getWriteStartTime(): ?string
    {
        return $this->writeStartTime;
    }

    /**
     * @return string|null
     */
    public function getWriteCloseTime(): ?string
    {
        return $this->writeCloseTime;
    }

    /**
     * @return string|null
     */
    public function getWriteCodeImg(): ?string
    {
        return $this->writeCodeImg;
    }

    /**
     * @return int|null
     */
    public function getIsWriteCode(): ?int
    {
        return $this->isWriteCode;
    }

    /**
     * @return string|null
     */
    public function getPlayAt(): ?string
    {
        return $this->playAt;
    }

    /**
     * @return string|null
     */
    public function getDeletedAt(): ?string
    {
        return $this->deletedAt;
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

}

<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 商品表
 * Class Goods
 *
 * @since 2.0
 *
 * @Entity(table="goods")
 */
class Goods extends Model
{
    /**
     * 商品主键id
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 商品类型 0平台自营 1 第三方商家发布
     *
     * @Column(name="member_type", prop="memberType")
     *
     * @var int|null
     */
    private $memberType;

    /**
     * 景点名称
     *
     * @Column(name="scenic_name", prop="scenicName")
     *
     * @var string|null
     */
    private $scenicName;

    /**
     * 能检票的景点id
     *
     * @Column(name="scenic_id", prop="scenicId")
     *
     * @var int|null
     */
    private $scenicId;

    /**
     * 时间类型   1时间区间 2天数
     *
     * @Column(name="time_type", prop="timeType")
     *
     * @var int|null
     */
    private $timeType;

    /**
     * 过期时间
     *
     * @Column(name="day_times", prop="dayTimes")
     *
     * @var int|null
     */
    private $dayTimes;

    /**
     * 开始时间
     *
     * @Column(name="start_time", prop="startTime")
     *
     * @var string|null
     */
    private $startTime;

    /**
     * 商品结束时间
     *
     * @Column(name="closed_time", prop="closedTime")
     *
     * @var string|null
     */
    private $closedTime;

    /**
     * 商品类型 0自营  1票务通
     *
     * @Column(name="goods_source_type", prop="goodsSourceType")
     *
     * @var int|null
     */
    private $goodsSourceType;

    /**
     * 商品名称
     *
     * @Column(name="goods_name", prop="goodsName")
     *
     * @var string
     */
    private $goodsName;

    /**
     * 商品一级分类
     *
     * @Column(name="one_cat_id", prop="oneCatId")
     *
     * @var int|null
     */
    private $oneCatId;

    /**
     * 商品二级分类
     *
     * @Column(name="two_cat_id", prop="twoCatId")
     *
     * @var int
     */
    private $twoCatId;

    /**
     * 商品类型 0：实物商品 1:虚拟商品
     *
     * @Column(name="goods_type", prop="goodsType")
     *
     * @var int
     */
    private $goodsType;

    /**
     * 商品名称副标题
     *
     * @Column(name="goods_sub_na", prop="goodsSubNa")
     *
     * @var string|null
     */
    private $goodsSubNa;

    /**
     * 商品简单介绍
     *
     * @Column(name="goods_desc", prop="goodsDesc")
     *
     * @var string|null
     */
    private $goodsDesc;

    /**
     * 商品本店价格
     *
     * @Column(name="goods_price", prop="goodsPrice")
     *
     * @var float
     */
    private $goodsPrice;

    /**
     * 商品的市场价格
     *
     * @Column(name="market_price", prop="marketPrice")
     *
     * @var float
     */
    private $marketPrice;

    /**
     * 成本价
     *
     * @Column(name="cost_price", prop="costPrice")
     *
     * @var float|null
     */
    private $costPrice;

    /**
     * 商品是否上架 0:未上架 1：已上架
     *
     * @Column(name="is_on_sale", prop="isOnSale")
     *
     * @var int
     */
    private $isOnSale;

    /**
     * 0  无规格产品   1有
     *
     * @Column(name="is_sku", prop="isSku")
     *
     * @var int|null
     */
    private $isSku;

    /**
     * 商品排序
     *
     * @Column()
     *
     * @var int
     */
    private $sort;

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
     * 0:商品审核中 1:商品审核通过2:商品拒绝
     *
     * @Column(name="is_pass", prop="isPass")
     *
     * @var int|null
     */
    private $isPass;

    /**
     * 商品详情
     *
     * @Column()
     *
     * @var string|null
     */
    private $desc;

    /**
     * 商品的运费
     *
     * @Column()
     *
     * @var float
     */
    private $freight;

    /**
     * 商家所属城市id
     *
     * @Column(name="member_city_id", prop="memberCityId")
     *
     * @var int|null
     */
    private $memberCityId;

    /**
     * 运营部id
     *
     * @Column(name="member_id", prop="memberId")
     *
     * @var int|null
     */
    private $memberId;

    /**
     * 核销码类型 自己的0 预导1 手动2
     *
     * @Column(name="is_write_code", prop="isWriteCode")
     *
     * @var int|null
     */
    private $isWriteCode;

    /**
     * 商品售量
     *
     * @Column(name="sales_count", prop="salesCount")
     *
     * @var int|null
     */
    private $salesCount;

    /**
     * 商品预警
     *
     * @Column(name="count_call", prop="countCall")
     *
     * @var int|null
     */
    private $countCall;

    /**
     * 商品库存
     *
     * @Column(name="store_count", prop="storeCount")
     *
     * @var int|null
     */
    private $storeCount;

    /**
     * 商品推荐 0:不推荐 1:限时秒杀2:每日爆品3:热销商品4:新品推荐
     *
     * @Column(name="recom_id", prop="recomId")
     *
     * @var int|null
     */
    private $recomId;

    /**
     * 下单留言类型 默认什么都不要 包含1--手机号 2--身份证   3----游玩儿日期
     *
     * @Column(name="order_desc_type", prop="orderDescType")
     *
     * @var string|null
     */
    private $orderDescType;

    /**
     * 0 当天使用 剩下的就是多少天
     *
     * @Column(name="order_start_time", prop="orderStartTime")
     *
     * @var int|null
     */
    private $orderStartTime;


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
     * @param int|null $memberType
     *
     * @return void
     */
    public function setMemberType(?int $memberType): void
    {
        $this->memberType = $memberType;
    }

    /**
     * @param string|null $scenicName
     *
     * @return void
     */
    public function setScenicName(?string $scenicName): void
    {
        $this->scenicName = $scenicName;
    }

    /**
     * @param int|null $scenicId
     *
     * @return void
     */
    public function setScenicId(?int $scenicId): void
    {
        $this->scenicId = $scenicId;
    }

    /**
     * @param int|null $timeType
     *
     * @return void
     */
    public function setTimeType(?int $timeType): void
    {
        $this->timeType = $timeType;
    }

    /**
     * @param int|null $dayTimes
     *
     * @return void
     */
    public function setDayTimes(?int $dayTimes): void
    {
        $this->dayTimes = $dayTimes;
    }

    /**
     * @param string|null $startTime
     *
     * @return void
     */
    public function setStartTime(?string $startTime): void
    {
        $this->startTime = $startTime;
    }

    /**
     * @param string|null $closedTime
     *
     * @return void
     */
    public function setClosedTime(?string $closedTime): void
    {
        $this->closedTime = $closedTime;
    }

    /**
     * @param int|null $goodsSourceType
     *
     * @return void
     */
    public function setGoodsSourceType(?int $goodsSourceType): void
    {
        $this->goodsSourceType = $goodsSourceType;
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
     * @param int|null $oneCatId
     *
     * @return void
     */
    public function setOneCatId(?int $oneCatId): void
    {
        $this->oneCatId = $oneCatId;
    }

    /**
     * @param int $twoCatId
     *
     * @return void
     */
    public function setTwoCatId(int $twoCatId): void
    {
        $this->twoCatId = $twoCatId;
    }

    /**
     * @param int $goodsType
     *
     * @return void
     */
    public function setGoodsType(int $goodsType): void
    {
        $this->goodsType = $goodsType;
    }

    /**
     * @param string|null $goodsSubNa
     *
     * @return void
     */
    public function setGoodsSubNa(?string $goodsSubNa): void
    {
        $this->goodsSubNa = $goodsSubNa;
    }

    /**
     * @param string|null $goodsDesc
     *
     * @return void
     */
    public function setGoodsDesc(?string $goodsDesc): void
    {
        $this->goodsDesc = $goodsDesc;
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
     * @param float $marketPrice
     *
     * @return void
     */
    public function setMarketPrice(float $marketPrice): void
    {
        $this->marketPrice = $marketPrice;
    }

    /**
     * @param float|null $costPrice
     *
     * @return void
     */
    public function setCostPrice(?float $costPrice): void
    {
        $this->costPrice = $costPrice;
    }

    /**
     * @param int $isOnSale
     *
     * @return void
     */
    public function setIsOnSale(int $isOnSale): void
    {
        $this->isOnSale = $isOnSale;
    }

    /**
     * @param int|null $isSku
     *
     * @return void
     */
    public function setIsSku(?int $isSku): void
    {
        $this->isSku = $isSku;
    }

    /**
     * @param int $sort
     *
     * @return void
     */
    public function setSort(int $sort): void
    {
        $this->sort = $sort;
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
     * @param int|null $isPass
     *
     * @return void
     */
    public function setIsPass(?int $isPass): void
    {
        $this->isPass = $isPass;
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
     * @param float $freight
     *
     * @return void
     */
    public function setFreight(float $freight): void
    {
        $this->freight = $freight;
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
     * @param int|null $memberId
     *
     * @return void
     */
    public function setMemberId(?int $memberId): void
    {
        $this->memberId = $memberId;
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
     * @param int|null $salesCount
     *
     * @return void
     */
    public function setSalesCount(?int $salesCount): void
    {
        $this->salesCount = $salesCount;
    }

    /**
     * @param int|null $countCall
     *
     * @return void
     */
    public function setCountCall(?int $countCall): void
    {
        $this->countCall = $countCall;
    }

    /**
     * @param int|null $storeCount
     *
     * @return void
     */
    public function setStoreCount(?int $storeCount): void
    {
        $this->storeCount = $storeCount;
    }

    /**
     * @param int|null $recomId
     *
     * @return void
     */
    public function setRecomId(?int $recomId): void
    {
        $this->recomId = $recomId;
    }

    /**
     * @param string|null $orderDescType
     *
     * @return void
     */
    public function setOrderDescType(?string $orderDescType): void
    {
        $this->orderDescType = $orderDescType;
    }

    /**
     * @param int|null $orderStartTime
     *
     * @return void
     */
    public function setOrderStartTime(?int $orderStartTime): void
    {
        $this->orderStartTime = $orderStartTime;
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
    public function getMemberType(): ?int
    {
        return $this->memberType;
    }

    /**
     * @return string|null
     */
    public function getScenicName(): ?string
    {
        return $this->scenicName;
    }

    /**
     * @return int|null
     */
    public function getScenicId(): ?int
    {
        return $this->scenicId;
    }

    /**
     * @return int|null
     */
    public function getTimeType(): ?int
    {
        return $this->timeType;
    }

    /**
     * @return int|null
     */
    public function getDayTimes(): ?int
    {
        return $this->dayTimes;
    }

    /**
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->startTime;
    }

    /**
     * @return string|null
     */
    public function getClosedTime(): ?string
    {
        return $this->closedTime;
    }

    /**
     * @return int|null
     */
    public function getGoodsSourceType(): ?int
    {
        return $this->goodsSourceType;
    }

    /**
     * @return string
     */
    public function getGoodsName(): ?string
    {
        return $this->goodsName;
    }

    /**
     * @return int|null
     */
    public function getOneCatId(): ?int
    {
        return $this->oneCatId;
    }

    /**
     * @return int
     */
    public function getTwoCatId(): ?int
    {
        return $this->twoCatId;
    }

    /**
     * @return int
     */
    public function getGoodsType(): ?int
    {
        return $this->goodsType;
    }

    /**
     * @return string|null
     */
    public function getGoodsSubNa(): ?string
    {
        return $this->goodsSubNa;
    }

    /**
     * @return string|null
     */
    public function getGoodsDesc(): ?string
    {
        return $this->goodsDesc;
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
    public function getMarketPrice(): ?float
    {
        return $this->marketPrice;
    }

    /**
     * @return float|null
     */
    public function getCostPrice(): ?float
    {
        return $this->costPrice;
    }

    /**
     * @return int
     */
    public function getIsOnSale(): ?int
    {
        return $this->isOnSale;
    }

    /**
     * @return int|null
     */
    public function getIsSku(): ?int
    {
        return $this->isSku;
    }

    /**
     * @return int
     */
    public function getSort(): ?int
    {
        return $this->sort;
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
     * @return int|null
     */
    public function getIsPass(): ?int
    {
        return $this->isPass;
    }

    /**
     * @return string|null
     */
    public function getDesc(): ?string
    {
        return $this->desc;
    }

    /**
     * @return float
     */
    public function getFreight(): ?float
    {
        return $this->freight;
    }

    /**
     * @return int|null
     */
    public function getMemberCityId(): ?int
    {
        return $this->memberCityId;
    }

    /**
     * @return int|null
     */
    public function getMemberId(): ?int
    {
        return $this->memberId;
    }

    /**
     * @return int|null
     */
    public function getIsWriteCode(): ?int
    {
        return $this->isWriteCode;
    }

    /**
     * @return int|null
     */
    public function getSalesCount(): ?int
    {
        return $this->salesCount;
    }

    /**
     * @return int|null
     */
    public function getCountCall(): ?int
    {
        return $this->countCall;
    }

    /**
     * @return int|null
     */
    public function getStoreCount(): ?int
    {
        return $this->storeCount;
    }

    /**
     * @return int|null
     */
    public function getRecomId(): ?int
    {
        return $this->recomId;
    }

    /**
     * @return string|null
     */
    public function getOrderDescType(): ?string
    {
        return $this->orderDescType;
    }

    /**
     * @return int|null
     */
    public function getOrderStartTime(): ?int
    {
        return $this->orderStartTime;
    }

}

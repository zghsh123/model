<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 商品利率副表
 * Class GoodScale
 *
 * @since 2.0
 *
 * @Entity(table="good_scale")
 */
class GoodScale extends Model
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
     * 普通一级利率
     *
     * @Column(name="first_ordinary_proportion", prop="firstOrdinaryProportion")
     *
     * @var string|null
     */
    private $firstOrdinaryProportion;

    /**
     * 一级利率返费具体金额
     *
     * @Column(name="first_ordinary_proportion_money", prop="firstOrdinaryProportionMoney")
     *
     * @var float|null
     */
    private $firstOrdinaryProportionMoney;

    /**
     * 普通二级利率
     *
     * @Column(name="two_ordinary_proportion", prop="twoOrdinaryProportion")
     *
     * @var string|null
     */
    private $twoOrdinaryProportion;

    /**
     * 二级利率金额
     *
     * @Column(name="two_ordinary_proportion_money", prop="twoOrdinaryProportionMoney")
     *
     * @var float|null
     */
    private $twoOrdinaryProportionMoney;

    /**
     * vip一级利率
     *
     * @Column(name="vip_one_proportion", prop="vipOneProportion")
     *
     * @var string|null
     */
    private $vipOneProportion;

    /**
     * vip一级金额
     *
     * @Column(name="vip_one_proportion_money", prop="vipOneProportionMoney")
     *
     * @var float|null
     */
    private $vipOneProportionMoney;

    /**
     * vip二级利率
     *
     * @Column(name="vip_two_proportion", prop="vipTwoProportion")
     *
     * @var string|null
     */
    private $vipTwoProportion;

    /**
     * vip二级代理价格
     *
     * @Column(name="vip_two_proportion_money", prop="vipTwoProportionMoney")
     *
     * @var string|null
     */
    private $vipTwoProportionMoney;

    /**
     * 商品id
     *
     * @Column(name="good_id", prop="goodId")
     *
     * @var int|null
     */
    private $goodId;

    /**
     * 海报图
     *
     * @Column()
     *
     * @var string|null
     */
    private $poster;

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
     * @param string|null $firstOrdinaryProportion
     *
     * @return void
     */
    public function setFirstOrdinaryProportion(?string $firstOrdinaryProportion): void
    {
        $this->firstOrdinaryProportion = $firstOrdinaryProportion;
    }

    /**
     * @param float|null $firstOrdinaryProportionMoney
     *
     * @return void
     */
    public function setFirstOrdinaryProportionMoney(?float $firstOrdinaryProportionMoney): void
    {
        $this->firstOrdinaryProportionMoney = $firstOrdinaryProportionMoney;
    }

    /**
     * @param string|null $twoOrdinaryProportion
     *
     * @return void
     */
    public function setTwoOrdinaryProportion(?string $twoOrdinaryProportion): void
    {
        $this->twoOrdinaryProportion = $twoOrdinaryProportion;
    }

    /**
     * @param float|null $twoOrdinaryProportionMoney
     *
     * @return void
     */
    public function setTwoOrdinaryProportionMoney(?float $twoOrdinaryProportionMoney): void
    {
        $this->twoOrdinaryProportionMoney = $twoOrdinaryProportionMoney;
    }

    /**
     * @param string|null $vipOneProportion
     *
     * @return void
     */
    public function setVipOneProportion(?string $vipOneProportion): void
    {
        $this->vipOneProportion = $vipOneProportion;
    }

    /**
     * @param float|null $vipOneProportionMoney
     *
     * @return void
     */
    public function setVipOneProportionMoney(?float $vipOneProportionMoney): void
    {
        $this->vipOneProportionMoney = $vipOneProportionMoney;
    }

    /**
     * @param string|null $vipTwoProportion
     *
     * @return void
     */
    public function setVipTwoProportion(?string $vipTwoProportion): void
    {
        $this->vipTwoProportion = $vipTwoProportion;
    }

    /**
     * @param string|null $vipTwoProportionMoney
     *
     * @return void
     */
    public function setVipTwoProportionMoney(?string $vipTwoProportionMoney): void
    {
        $this->vipTwoProportionMoney = $vipTwoProportionMoney;
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
     * @param string|null $poster
     *
     * @return void
     */
    public function setPoster(?string $poster): void
    {
        $this->poster = $poster;
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
    public function getFirstOrdinaryProportion(): ?string
    {
        return $this->firstOrdinaryProportion;
    }

    /**
     * @return float|null
     */
    public function getFirstOrdinaryProportionMoney(): ?float
    {
        return $this->firstOrdinaryProportionMoney;
    }

    /**
     * @return string|null
     */
    public function getTwoOrdinaryProportion(): ?string
    {
        return $this->twoOrdinaryProportion;
    }

    /**
     * @return float|null
     */
    public function getTwoOrdinaryProportionMoney(): ?float
    {
        return $this->twoOrdinaryProportionMoney;
    }

    /**
     * @return string|null
     */
    public function getVipOneProportion(): ?string
    {
        return $this->vipOneProportion;
    }

    /**
     * @return float|null
     */
    public function getVipOneProportionMoney(): ?float
    {
        return $this->vipOneProportionMoney;
    }

    /**
     * @return string|null
     */
    public function getVipTwoProportion(): ?string
    {
        return $this->vipTwoProportion;
    }

    /**
     * @return string|null
     */
    public function getVipTwoProportionMoney(): ?string
    {
        return $this->vipTwoProportionMoney;
    }

    /**
     * @return int|null
     */
    public function getGoodId(): ?int
    {
        return $this->goodId;
    }

    /**
     * @return string|null
     */
    public function getPoster(): ?string
    {
        return $this->poster;
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

<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 购物车
 * Class Cart
 *
 * @since 2.0
 *
 * @Entity(table="cart")
 */
class Cart extends Model
{
    /**
     * 商品id
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 商品id
     *
     * @Column(name="user_id", prop="userId")
     *
     * @var int
     */
    private $userId;

    /**
     * 
     *
     * @Column(name="goods_id", prop="goodsId")
     *
     * @var int
     */
    private $goodsId;

    /**
     * 
     *
     * @Column(name="goods_num", prop="goodsNum")
     *
     * @var int
     */
    private $goodsNum;

    /**
     * 商品sku的笛卡尔积
     *
     * @Column(name="sku_index", prop="skuIndex")
     *
     * @var string|null
     */
    private $skuIndex;

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
     * @param int $goodsId
     *
     * @return void
     */
    public function setGoodsId(int $goodsId): void
    {
        $this->goodsId = $goodsId;
    }

    /**
     * @param int $goodsNum
     *
     * @return void
     */
    public function setGoodsNum(int $goodsNum): void
    {
        $this->goodsNum = $goodsNum;
    }

    /**
     * @param string|null $skuIndex
     *
     * @return void
     */
    public function setSkuIndex(?string $skuIndex): void
    {
        $this->skuIndex = $skuIndex;
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
    public function getGoodsId(): ?int
    {
        return $this->goodsId;
    }

    /**
     * @return int
     */
    public function getGoodsNum(): ?int
    {
        return $this->goodsNum;
    }

    /**
     * @return string|null
     */
    public function getSkuIndex(): ?string
    {
        return $this->skuIndex;
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

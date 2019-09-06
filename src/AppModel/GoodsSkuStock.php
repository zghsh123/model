<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 商品-sku库存表
 * Class GoodsSkuStock
 *
 * @since 2.0
 *
 * @Entity(table="goods_sku_stock")
 */
class GoodsSkuStock extends Model
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
     * 商品 sku 详情
     *
     * @Column(name="goods_sku_detail", prop="goodsSkuDetail")
     *
     * @var string|null
     */
    private $goodsSkuDetail;

    /**
     * 商品 sku 详情 index
     *
     * @Column(name="goods_sku_index", prop="goodsSkuIndex")
     *
     * @var string|null
     */
    private $goodsSkuIndex;

    /**
     * 商品 sku 详情价格
     *
     * @Column()
     *
     * @var float
     */
    private $price;

    /**
     * 商品 sku 库存
     *
     * @Column()
     *
     * @var int
     */
    private $stock;

    /**
     * 商品 ID
     *
     * @Column(name="goods_id", prop="goodsId")
     *
     * @var int|null
     */
    private $goodsId;

    /**
     * 商品 sku 状态(0: 显示 1: 删除)
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 创建日期
     *
     * @Column(name="created_at", prop="createdAt")
     *
     * @var string|null
     */
    private $createdAt;

    /**
     * 更新日期
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
     * @param string|null $goodsSkuDetail
     *
     * @return void
     */
    public function setGoodsSkuDetail(?string $goodsSkuDetail): void
    {
        $this->goodsSkuDetail = $goodsSkuDetail;
    }

    /**
     * @param string|null $goodsSkuIndex
     *
     * @return void
     */
    public function setGoodsSkuIndex(?string $goodsSkuIndex): void
    {
        $this->goodsSkuIndex = $goodsSkuIndex;
    }

    /**
     * @param float $price
     *
     * @return void
     */
    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    /**
     * @param int $stock
     *
     * @return void
     */
    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }

    /**
     * @param int|null $goodsId
     *
     * @return void
     */
    public function setGoodsId(?int $goodsId): void
    {
        $this->goodsId = $goodsId;
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
     * @return string|null
     */
    public function getGoodsSkuDetail(): ?string
    {
        return $this->goodsSkuDetail;
    }

    /**
     * @return string|null
     */
    public function getGoodsSkuIndex(): ?string
    {
        return $this->goodsSkuIndex;
    }

    /**
     * @return float
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getStock(): ?int
    {
        return $this->stock;
    }

    /**
     * @return int|null
     */
    public function getGoodsId(): ?int
    {
        return $this->goodsId;
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

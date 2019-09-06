<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 商品-sku表
 * Class GoodsSku
 *
 * @since 2.0
 *
 * @Entity(table="goods_sku")
 */
class GoodsSku extends Model
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
     * 最小库存单位(商品属性)
     *
     * @Column()
     *
     * @var string|null
     */
    private $name;

    /**
     * sku_type ID
     *
     * @Column(name="sku_type_id", prop="skuTypeId")
     *
     * @var int|null
     */
    private $skuTypeId;

    /**
     * 商品 ID
     *
     * @Column(name="goods_id", prop="goodsId")
     *
     * @var int|null
     */
    private $goodsId;

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
     * @param string|null $name
     *
     * @return void
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param int|null $skuTypeId
     *
     * @return void
     */
    public function setSkuTypeId(?int $skuTypeId): void
    {
        $this->skuTypeId = $skuTypeId;
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
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return int|null
     */
    public function getSkuTypeId(): ?int
    {
        return $this->skuTypeId;
    }

    /**
     * @return int|null
     */
    public function getGoodsId(): ?int
    {
        return $this->goodsId;
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

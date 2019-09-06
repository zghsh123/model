<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 商品副表
 * Class GoodsImg
 *
 * @since 2.0
 *
 * @Entity(table="goods_img")
 */
class GoodsImg extends Model
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
     * 商品图片的路径
     *
     * @Column(name="img_url", prop="imgUrl")
     *
     * @var string
     */
    private $imgUrl;

    /**
     * 商品图片的类型 0:商品图片 1：合同图片
     *
     * @Column()
     *
     * @var int
     */
    private $type;

    /**
     * 商品id
     *
     * @Column(name="good_id", prop="goodId")
     *
     * @var int|null
     */
    private $goodId;

    /**
     * 商品图片创建时间
     *
     * @Column(name="created_at", prop="createdAt")
     *
     * @var string|null
     */
    private $createdAt;

    /**
     * 商品图片更新
     *
     * @Column(name="updated_at", prop="updatedAt")
     *
     * @var string|null
     */
    private $updatedAt;

    /**
     * 商品删除时间
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
     * @param string $imgUrl
     *
     * @return void
     */
    public function setImgUrl(string $imgUrl): void
    {
        $this->imgUrl = $imgUrl;
    }

    /**
     * @param int $type
     *
     * @return void
     */
    public function setType(int $type): void
    {
        $this->type = $type;
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
     * @return string
     */
    public function getImgUrl(): ?string
    {
        return $this->imgUrl;
    }

    /**
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
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

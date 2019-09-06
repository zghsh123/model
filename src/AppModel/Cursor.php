<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 
 * Class Cursor
 *
 * @since 2.0
 *
 * @Entity(table="cursor")
 */
class Cursor extends Model
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
     * 图片地址
     *
     * @Column(name="img_url", prop="imgUrl")
     *
     * @var string|null
     */
    private $imgUrl;

    /**
     * 一级分类
     *
     * @Column(name="one_cat_id", prop="oneCatId")
     *
     * @var int|null
     */
    private $oneCatId;

    /**
     * 排序
     *
     * @Column()
     *
     * @var int|null
     */
    private $sort;

    /**
     * 
     *
     * @Column(name="good_id", prop="goodId")
     *
     * @var int|null
     */
    private $goodId;

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
     * @param string|null $imgUrl
     *
     * @return void
     */
    public function setImgUrl(?string $imgUrl): void
    {
        $this->imgUrl = $imgUrl;
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
     * @param int|null $sort
     *
     * @return void
     */
    public function setSort(?int $sort): void
    {
        $this->sort = $sort;
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
     * @return string|null
     */
    public function getImgUrl(): ?string
    {
        return $this->imgUrl;
    }

    /**
     * @return int|null
     */
    public function getOneCatId(): ?int
    {
        return $this->oneCatId;
    }

    /**
     * @return int|null
     */
    public function getSort(): ?int
    {
        return $this->sort;
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

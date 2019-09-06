<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 二级分类表
 * Class Category
 *
 * @since 2.0
 *
 * @Entity(table="category")
 */
class Category extends Model
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
     * 商品的分类名称
     *
     * @Column(name="cate_name", prop="cateName")
     *
     * @var string
     */
    private $cateName;

    /**
     * 商品的父级id
     *
     * @Column(name="p_id", prop="pId")
     *
     * @var int
     */
    private $pId;

    /**
     * 商品的分类排序
     *
     * @Column()
     *
     * @var int
     */
    private $sort;

    /**
     * 商品的分类是否显示0不显示 1:显示
     *
     * @Column(name="is_show", prop="isShow")
     *
     * @var int
     */
    private $isShow;

    /**
     * 商品分类的添加时间
     *
     * @Column(name="created_at", prop="createdAt")
     *
     * @var string|null
     */
    private $createdAt;

    /**
     * 商品分类的更新时间
     *
     * @Column(name="updated_at", prop="updatedAt")
     *
     * @var string|null
     */
    private $updatedAt;

    /**
     * 商品分类的删除时间
     *
     * @Column(name="deleted_at", prop="deletedAt")
     *
     * @var string|null
     */
    private $deletedAt;

    /**
     * 商品分类的地区管理
     *
     * @Column(name="area_id", prop="areaId")
     *
     * @var int
     */
    private $areaId;


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
     * @param string $cateName
     *
     * @return void
     */
    public function setCateName(string $cateName): void
    {
        $this->cateName = $cateName;
    }

    /**
     * @param int $pId
     *
     * @return void
     */
    public function setPId(int $pId): void
    {
        $this->pId = $pId;
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
     * @param int $isShow
     *
     * @return void
     */
    public function setIsShow(int $isShow): void
    {
        $this->isShow = $isShow;
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
     * @param int $areaId
     *
     * @return void
     */
    public function setAreaId(int $areaId): void
    {
        $this->areaId = $areaId;
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
    public function getCateName(): ?string
    {
        return $this->cateName;
    }

    /**
     * @return int
     */
    public function getPId(): ?int
    {
        return $this->pId;
    }

    /**
     * @return int
     */
    public function getSort(): ?int
    {
        return $this->sort;
    }

    /**
     * @return int
     */
    public function getIsShow(): ?int
    {
        return $this->isShow;
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
     * @return int
     */
    public function getAreaId(): ?int
    {
        return $this->areaId;
    }

}

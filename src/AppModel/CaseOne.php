<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 一级分类主表
 * Class CaseOne
 *
 * @since 2.0
 *
 * @Entity(table="case_one")
 */
class CaseOne extends Model
{
    /**
     * 分类id
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 分类名称
     *
     * @Column(name="case_name", prop="caseName")
     *
     * @var string|null
     */
    private $caseName;

    /**
     * 分类图片
     *
     * @Column(name="img_src", prop="imgSrc")
     *
     * @var string|null
     */
    private $imgSrc;

    /**
     * 
     *
     * @Column()
     *
     * @var int|null
     */
    private $type;

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
     * @param string|null $caseName
     *
     * @return void
     */
    public function setCaseName(?string $caseName): void
    {
        $this->caseName = $caseName;
    }

    /**
     * @param string|null $imgSrc
     *
     * @return void
     */
    public function setImgSrc(?string $imgSrc): void
    {
        $this->imgSrc = $imgSrc;
    }

    /**
     * @param int|null $type
     *
     * @return void
     */
    public function setType(?int $type): void
    {
        $this->type = $type;
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
    public function getCaseName(): ?string
    {
        return $this->caseName;
    }

    /**
     * @return string|null
     */
    public function getImgSrc(): ?string
    {
        return $this->imgSrc;
    }

    /**
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
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

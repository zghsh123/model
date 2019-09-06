<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 后台审核记录表
 * Class GoodsAudit
 *
 * @since 2.0
 *
 * @Entity(table="goods_audit")
 */
class GoodsAudit extends Model
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
     * 商品的id
     *
     * @Column(name="good_id", prop="goodId")
     *
     * @var int
     */
    private $goodId;

    /**
     * 商品审核结果 1：已通过 2拒绝
     *
     * @Column(name="res_audit", prop="resAudit")
     *
     * @var int
     */
    private $resAudit;

    /**
     * 商品审核的详细信息
     *
     * @Column()
     *
     * @var string
     */
    private $detail;

    /**
     * 创建时候的时间戳
     *
     * @Column(name="created_at", prop="createdAt")
     *
     * @var string|null
     */
    private $createdAt;

    /**
     * 更新时候的时间戳
     *
     * @Column(name="updated_at", prop="updatedAt")
     *
     * @var string|null
     */
    private $updatedAt;

    /**
     * 删除时的时间戳
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
     * @param int $goodId
     *
     * @return void
     */
    public function setGoodId(int $goodId): void
    {
        $this->goodId = $goodId;
    }

    /**
     * @param int $resAudit
     *
     * @return void
     */
    public function setResAudit(int $resAudit): void
    {
        $this->resAudit = $resAudit;
    }

    /**
     * @param string $detail
     *
     * @return void
     */
    public function setDetail(string $detail): void
    {
        $this->detail = $detail;
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
    public function getGoodId(): ?int
    {
        return $this->goodId;
    }

    /**
     * @return int
     */
    public function getResAudit(): ?int
    {
        return $this->resAudit;
    }

    /**
     * @return string
     */
    public function getDetail(): ?string
    {
        return $this->detail;
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

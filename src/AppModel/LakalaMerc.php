<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 拉卡拉商家表
 * Class LakalaMerc
 *
 * @since 2.0
 *
 * @Entity(table="lakala_merc")
 */
class LakalaMerc extends Model
{
    /**
     * 主键ID
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 拉卡拉商家商户号
     *
     * @Column(name="merc_id", prop="mercId")
     *
     * @var string|null
     */
    private $mercId;

    /**
     * 商户的终端号
     *
     * @Column(name="term_id", prop="termId")
     *
     * @var string|null
     */
    private $termId;

    /**
     * 创建时间
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
     * @param string|null $mercId
     *
     * @return void
     */
    public function setMercId(?string $mercId): void
    {
        $this->mercId = $mercId;
    }

    /**
     * @param string|null $termId
     *
     * @return void
     */
    public function setTermId(?string $termId): void
    {
        $this->termId = $termId;
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
    public function getMercId(): ?string
    {
        return $this->mercId;
    }

    /**
     * @return string|null
     */
    public function getTermId(): ?string
    {
        return $this->termId;
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

<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 
 * Class Bank
 *
 * @since 2.0
 *
 * @Entity(table="bank")
 */
class Bank extends Model
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
     * 银行名称
     *
     * @Column(name="bank_name", prop="bankName")
     *
     * @var string|null
     */
    private $bankName;

    /**
     * 银行code码
     *
     * @Column(name="bank_code", prop="bankCode")
     *
     * @var string|null
     */
    private $bankCode;

    /**
     * 
     *
     * @Column()
     *
     * @var string|null
     */
    private $logo;

    /**
     * 创建时间
     *
     * @Column(name="created_at", prop="createdAt")
     *
     * @var int|null
     */
    private $createdAt;

    /**
     * 更新时间
     *
     * @Column(name="updated_at", prop="updatedAt")
     *
     * @var int|null
     */
    private $updatedAt;

    /**
     * 删除时间
     *
     * @Column(name="deleted_at", prop="deletedAt")
     *
     * @var int|null
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
     * @param string|null $bankName
     *
     * @return void
     */
    public function setBankName(?string $bankName): void
    {
        $this->bankName = $bankName;
    }

    /**
     * @param string|null $bankCode
     *
     * @return void
     */
    public function setBankCode(?string $bankCode): void
    {
        $this->bankCode = $bankCode;
    }

    /**
     * @param string|null $logo
     *
     * @return void
     */
    public function setLogo(?string $logo): void
    {
        $this->logo = $logo;
    }

    /**
     * @param int|null $createdAt
     *
     * @return void
     */
    public function setCreatedAt(?int $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param int|null $updatedAt
     *
     * @return void
     */
    public function setUpdatedAt(?int $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @param int|null $deletedAt
     *
     * @return void
     */
    public function setDeletedAt(?int $deletedAt): void
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
    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    /**
     * @return string|null
     */
    public function getBankCode(): ?string
    {
        return $this->bankCode;
    }

    /**
     * @return string|null
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }

    /**
     * @return int|null
     */
    public function getCreatedAt(): ?int
    {
        return $this->createdAt;
    }

    /**
     * @return int|null
     */
    public function getUpdatedAt(): ?int
    {
        return $this->updatedAt;
    }

    /**
     * @return int|null
     */
    public function getDeletedAt(): ?int
    {
        return $this->deletedAt;
    }

}

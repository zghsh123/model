<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 分销员审核申请
 * Class DistributorInfo
 *
 * @since 2.0
 *
 * @Entity(table="distributor_info")
 */
class DistributorInfo extends Model
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
     * 姓名
     *
     * @Column(name="real_name", prop="realName")
     *
     * @var string|null
     */
    private $realName;

    /**
     * 手机号
     *
     * @Column()
     *
     * @var string|null
     */
    private $phone;

    /**
     * 上级id
     *
     * @Column(name="uppler_id", prop="upplerId")
     *
     * @var int|null
     */
    private $upplerId;

    /**
     * 状态 0 审核中 1：通过 2:拒绝
     *
     * @Column()
     *
     * @var int|null
     */
    private $status;

    /**
     * 
     *
     * @Column(name="user_id", prop="userId")
     *
     * @var int|null
     */
    private $userId;

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
     * @param string|null $realName
     *
     * @return void
     */
    public function setRealName(?string $realName): void
    {
        $this->realName = $realName;
    }

    /**
     * @param string|null $phone
     *
     * @return void
     */
    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @param int|null $upplerId
     *
     * @return void
     */
    public function setUpplerId(?int $upplerId): void
    {
        $this->upplerId = $upplerId;
    }

    /**
     * @param int|null $status
     *
     * @return void
     */
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }

    /**
     * @param int|null $userId
     *
     * @return void
     */
    public function setUserId(?int $userId): void
    {
        $this->userId = $userId;
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
    public function getRealName(): ?string
    {
        return $this->realName;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @return int|null
     */
    public function getUpplerId(): ?int
    {
        return $this->upplerId;
    }

    /**
     * @return int|null
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
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

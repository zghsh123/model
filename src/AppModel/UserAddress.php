<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 用户地址副表
 * Class UserAddress
 *
 * @since 2.0
 *
 * @Entity(table="user_address")
 */
class UserAddress extends Model
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
     * 用户id
     *
     * @Column(name="user_id", prop="userId")
     *
     * @var int|null
     */
    private $userId;

    /**
     * 收货人名称
     *
     * @Column()
     *
     * @var string
     */
    private $consignee;

    /**
     * 省
     *
     * @Column()
     *
     * @var string
     */
    private $province;

    /**
     * 市
     *
     * @Column()
     *
     * @var string
     */
    private $city;

    /**
     * 区
     *
     * @Column()
     *
     * @var string
     */
    private $district;

    /**
     * 收获人的详细地址
     *
     * @Column()
     *
     * @var string
     */
    private $address;

    /**
     * 收货人手机
     *
     * @Column()
     *
     * @var string|null
     */
    private $phone;

    /**
     * 0:不是默认地址 1：是默认地址
     *
     * @Column(name="is_default", prop="isDefault")
     *
     * @var int
     */
    private $isDefault;

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
     * @param int|null $userId
     *
     * @return void
     */
    public function setUserId(?int $userId): void
    {
        $this->userId = $userId;
    }

    /**
     * @param string $consignee
     *
     * @return void
     */
    public function setConsignee(string $consignee): void
    {
        $this->consignee = $consignee;
    }

    /**
     * @param string $province
     *
     * @return void
     */
    public function setProvince(string $province): void
    {
        $this->province = $province;
    }

    /**
     * @param string $city
     *
     * @return void
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    /**
     * @param string $district
     *
     * @return void
     */
    public function setDistrict(string $district): void
    {
        $this->district = $district;
    }

    /**
     * @param string $address
     *
     * @return void
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
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
     * @param int $isDefault
     *
     * @return void
     */
    public function setIsDefault(int $isDefault): void
    {
        $this->isDefault = $isDefault;
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
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getConsignee(): ?string
    {
        return $this->consignee;
    }

    /**
     * @return string
     */
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * @return string
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @return int
     */
    public function getIsDefault(): ?int
    {
        return $this->isDefault;
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

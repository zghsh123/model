<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 用户银行卡表
 * Class UserBankCard
 *
 * @since 2.0
 *
 * @Entity(table="user_bank_card")
 */
class UserBankCard extends Model
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
     * 银行id
     *
     * @Column(name="bank_id", prop="bankId")
     *
     * @var int|null
     */
    private $bankId;

    /**
     * 银行卡号
     *
     * @Column(name="card_no", prop="cardNo")
     *
     * @var string|null
     */
    private $cardNo;

    /**
     * 微信用户id
     *
     * @Column(name="user_id", prop="userId")
     *
     * @var int|null
     */
    private $userId;

    /**
     * 省份
     *
     * @Column()
     *
     * @var string|null
     */
    private $province;

    /**
     * 市
     *
     * @Column()
     *
     * @var string|null
     */
    private $city;

    /**
     * 区
     *
     * @Column()
     *
     * @var string|null
     */
    private $area;

    /**
     * 银行所在地
     *
     * @Column(name="bank_address", prop="bankAddress")
     *
     * @var string|null
     */
    private $bankAddress;

    /**
     * 手机号
     *
     * @Column()
     *
     * @var string|null
     */
    private $phone;

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
     * @param int|null $bankId
     *
     * @return void
     */
    public function setBankId(?int $bankId): void
    {
        $this->bankId = $bankId;
    }

    /**
     * @param string|null $cardNo
     *
     * @return void
     */
    public function setCardNo(?string $cardNo): void
    {
        $this->cardNo = $cardNo;
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
     * @param string|null $province
     *
     * @return void
     */
    public function setProvince(?string $province): void
    {
        $this->province = $province;
    }

    /**
     * @param string|null $city
     *
     * @return void
     */
    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    /**
     * @param string|null $area
     *
     * @return void
     */
    public function setArea(?string $area): void
    {
        $this->area = $area;
    }

    /**
     * @param string|null $bankAddress
     *
     * @return void
     */
    public function setBankAddress(?string $bankAddress): void
    {
        $this->bankAddress = $bankAddress;
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
     * @return int|null
     */
    public function getBankId(): ?int
    {
        return $this->bankId;
    }

    /**
     * @return string|null
     */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
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
    public function getProvince(): ?string
    {
        return $this->province;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @return string|null
     */
    public function getArea(): ?string
    {
        return $this->area;
    }

    /**
     * @return string|null
     */
    public function getBankAddress(): ?string
    {
        return $this->bankAddress;
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

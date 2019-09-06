<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 用户收支流水表
 * Class BillFlow
 *
 * @since 2.0
 *
 * @Entity(table="bill_flow")
 */
class BillFlow extends Model
{
    /**
     * id主键
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 用户ID
     *
     * @Column(name="u_id", prop="uId")
     *
     * @var int|null
     */
    private $uId;

    /**
     * 用户的操作 0 :充值 1：提现
     *
     * @Column()
     *
     * @var int
     */
    private $opera;

    /**
     * 来源 0：微信 1：银行卡
     *
     * @Column()
     *
     * @var int
     */
    private $from;

    /**
     * 金额
     *
     * @Column()
     *
     * @var float
     */
    private $money;

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
     * 银行卡的名字
     *
     * @Column(name="bank_name", prop="bankName")
     *
     * @var string|null
     */
    private $bankName;

    /**
     * 银行卡的标识码
     *
     * @Column(name="bank_no", prop="bankNo")
     *
     * @var string|null
     */
    private $bankNo;

    /**
     * 银行卡号
     *
     * @Column(name="card_no", prop="cardNo")
     *
     * @var string|null
     */
    private $cardNo;

    /**
     * 开户卡的手机地址
     *
     * @Column(name="bank_address", prop="bankAddress")
     *
     * @var string|null
     */
    private $bankAddress;

    /**
     * 开户行绑定的手机号
     *
     * @Column()
     *
     * @var string|null
     */
    private $phone;

    /**
     * 0:等待 1:成功 2:失败
     *
     * @Column()
     *
     * @var int|null
     */
    private $status;

    /**
     * 审核拒绝的原因
     *
     * @Column()
     *
     * @var string|null
     */
    private $reason;


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
     * @param int|null $uId
     *
     * @return void
     */
    public function setUId(?int $uId): void
    {
        $this->uId = $uId;
    }

    /**
     * @param int $opera
     *
     * @return void
     */
    public function setOpera(int $opera): void
    {
        $this->opera = $opera;
    }

    /**
     * @param int $from
     *
     * @return void
     */
    public function setFrom(int $from): void
    {
        $this->from = $from;
    }

    /**
     * @param float $money
     *
     * @return void
     */
    public function setMoney(float $money): void
    {
        $this->money = $money;
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
     * @param string|null $bankName
     *
     * @return void
     */
    public function setBankName(?string $bankName): void
    {
        $this->bankName = $bankName;
    }

    /**
     * @param string|null $bankNo
     *
     * @return void
     */
    public function setBankNo(?string $bankNo): void
    {
        $this->bankNo = $bankNo;
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
     * @param int|null $status
     *
     * @return void
     */
    public function setStatus(?int $status): void
    {
        $this->status = $status;
    }

    /**
     * @param string|null $reason
     *
     * @return void
     */
    public function setReason(?string $reason): void
    {
        $this->reason = $reason;
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
    public function getUId(): ?int
    {
        return $this->uId;
    }

    /**
     * @return int
     */
    public function getOpera(): ?int
    {
        return $this->opera;
    }

    /**
     * @return int
     */
    public function getFrom(): ?int
    {
        return $this->from;
    }

    /**
     * @return float
     */
    public function getMoney(): ?float
    {
        return $this->money;
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
     * @return string|null
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }

    /**
     * @return string|null
     */
    public function getBankNo(): ?string
    {
        return $this->bankNo;
    }

    /**
     * @return string|null
     */
    public function getCardNo(): ?string
    {
        return $this->cardNo;
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
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }

}

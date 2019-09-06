<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 公众号用户表
 * Class Wechat
 *
 * @since 2.0
 *
 * @Entity(table="wechat")
 */
class Wechat extends Model
{
    /**
     * 更疼心花四溅
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 小程序id
     *
     * @Column()
     *
     * @var string|null
     */
    private $openid;

    /**
     * 头像
     *
     * @Column()
     *
     * @var string|null
     */
    private $headimgurl;

    /**
     * 昵称
     *
     * @Column()
     *
     * @var string|null
     */
    private $nickname;

    /**
     * 0普通用户  1----普通分销商 2-----vip分销商
     *
     * @Column()
     *
     * @var int|null
     */
    private $type;

    /**
     * 上级用户
     *
     * @Column()
     *
     * @var int|null
     */
    private $upplervel;

    /**
     * 用户手机号
     *
     * @Column()
     *
     * @var string|null
     */
    private $phone;

    /**
     * 用户密码
     *
     * @Column(hidden=true)
     *
     * @var string|null
     */
    private $password;

    /**
     * 用户支付密码
     *
     * @Column()
     *
     * @var string|null
     */
    private $paypwd;

    /**
     * 生日
     *
     * @Column()
     *
     * @var string|null
     */
    private $birthday;

    /**
     * 性别  0保密 1男 2女
     *
     * @Column()
     *
     * @var int|null
     */
    private $sex;

    /**
     * 用户余额
     *
     * @Column()
     *
     * @var float|null
     */
    private $balance;

    /**
     * 冻结金额
     *
     * @Column(name="frozen_money", prop="frozenMoney")
     *
     * @var float|null
     */
    private $frozenMoney;

    /**
     * 消费积分
     *
     * @Column(name="pay_points", prop="payPoints")
     *
     * @var float|null
     */
    private $payPoints;

    /**
     * 分销金额
     *
     * @Column(name="return_money", prop="returnMoney")
     *
     * @var float|null
     */
    private $returnMoney;

    /**
     * 是否锁定
     *
     * @Column(name="is_lock", prop="isLock")
     *
     * @var int|null
     */
    private $isLock;

    /**
     * 小程序分享码
     *
     * @Column(name="xcx_qrcode", prop="xcxQrcode")
     *
     * @var string|null
     */
    private $xcxQrcode;

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
     * 分组id
     *
     * @Column(name="distributor_id", prop="distributorId")
     *
     * @var int|null
     */
    private $distributorId;

    /**
     * 备注
     *
     * @Column()
     *
     * @var string|null
     */
    private $remarks;


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
     * @param string|null $openid
     *
     * @return void
     */
    public function setOpenid(?string $openid): void
    {
        $this->openid = $openid;
    }

    /**
     * @param string|null $headimgurl
     *
     * @return void
     */
    public function setHeadimgurl(?string $headimgurl): void
    {
        $this->headimgurl = $headimgurl;
    }

    /**
     * @param string|null $nickname
     *
     * @return void
     */
    public function setNickname(?string $nickname): void
    {
        $this->nickname = $nickname;
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
     * @param int|null $upplervel
     *
     * @return void
     */
    public function setUpplervel(?int $upplervel): void
    {
        $this->upplervel = $upplervel;
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
     * @param string|null $password
     *
     * @return void
     */
    public function setPassword(?string $password): void
    {
        $this->password = $password;
    }

    /**
     * @param string|null $paypwd
     *
     * @return void
     */
    public function setPaypwd(?string $paypwd): void
    {
        $this->paypwd = $paypwd;
    }

    /**
     * @param string|null $birthday
     *
     * @return void
     */
    public function setBirthday(?string $birthday): void
    {
        $this->birthday = $birthday;
    }

    /**
     * @param int|null $sex
     *
     * @return void
     */
    public function setSex(?int $sex): void
    {
        $this->sex = $sex;
    }

    /**
     * @param float|null $balance
     *
     * @return void
     */
    public function setBalance(?float $balance): void
    {
        $this->balance = $balance;
    }

    /**
     * @param float|null $frozenMoney
     *
     * @return void
     */
    public function setFrozenMoney(?float $frozenMoney): void
    {
        $this->frozenMoney = $frozenMoney;
    }

    /**
     * @param float|null $payPoints
     *
     * @return void
     */
    public function setPayPoints(?float $payPoints): void
    {
        $this->payPoints = $payPoints;
    }

    /**
     * @param float|null $returnMoney
     *
     * @return void
     */
    public function setReturnMoney(?float $returnMoney): void
    {
        $this->returnMoney = $returnMoney;
    }

    /**
     * @param int|null $isLock
     *
     * @return void
     */
    public function setIsLock(?int $isLock): void
    {
        $this->isLock = $isLock;
    }

    /**
     * @param string|null $xcxQrcode
     *
     * @return void
     */
    public function setXcxQrcode(?string $xcxQrcode): void
    {
        $this->xcxQrcode = $xcxQrcode;
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
     * @param int|null $distributorId
     *
     * @return void
     */
    public function setDistributorId(?int $distributorId): void
    {
        $this->distributorId = $distributorId;
    }

    /**
     * @param string|null $remarks
     *
     * @return void
     */
    public function setRemarks(?string $remarks): void
    {
        $this->remarks = $remarks;
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
    public function getOpenid(): ?string
    {
        return $this->openid;
    }

    /**
     * @return string|null
     */
    public function getHeadimgurl(): ?string
    {
        return $this->headimgurl;
    }

    /**
     * @return string|null
     */
    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    /**
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @return int|null
     */
    public function getUpplervel(): ?int
    {
        return $this->upplervel;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @return string|null
     */
    public function getPaypwd(): ?string
    {
        return $this->paypwd;
    }

    /**
     * @return string|null
     */
    public function getBirthday(): ?string
    {
        return $this->birthday;
    }

    /**
     * @return int|null
     */
    public function getSex(): ?int
    {
        return $this->sex;
    }

    /**
     * @return float|null
     */
    public function getBalance(): ?float
    {
        return $this->balance;
    }

    /**
     * @return float|null
     */
    public function getFrozenMoney(): ?float
    {
        return $this->frozenMoney;
    }

    /**
     * @return float|null
     */
    public function getPayPoints(): ?float
    {
        return $this->payPoints;
    }

    /**
     * @return float|null
     */
    public function getReturnMoney(): ?float
    {
        return $this->returnMoney;
    }

    /**
     * @return int|null
     */
    public function getIsLock(): ?int
    {
        return $this->isLock;
    }

    /**
     * @return string|null
     */
    public function getXcxQrcode(): ?string
    {
        return $this->xcxQrcode;
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
     * @return int|null
     */
    public function getDistributorId(): ?int
    {
        return $this->distributorId;
    }

    /**
     * @return string|null
     */
    public function getRemarks(): ?string
    {
        return $this->remarks;
    }

}

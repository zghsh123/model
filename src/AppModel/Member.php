<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 商户登录表
 * Class Member
 *
 * @since 2.0
 *
 * @Entity(table="member")
 */
class Member extends Model
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
     * 
     *
     * @Column()
     *
     * @var string|null
     */
    private $name;

    /**
     * 
     *
     * @Column(hidden=true)
     *
     * @var string|null
     */
    private $password;

    /**
     * 
     *
     * @Column()
     *
     * @var string|null
     */
    private $email;

    /**
     * 真实名称
     *
     * @Column(name="real_name", prop="realName")
     *
     * @var string|null
     */
    private $realName;

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
     * 
     *
     * @Column()
     *
     * @var string|null
     */
    private $headimgurl;

    /**
     * 
     *
     * @Column(name="city_id", prop="cityId")
     *
     * @var int|null
     */
    private $cityId;

    /**
     * 0 1
     *
     * @Column()
     *
     * @var int|null
     */
    private $type;


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
     * @param string|null $name
     *
     * @return void
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
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
     * @param string|null $email
     *
     * @return void
     */
    public function setEmail(?string $email): void
    {
        $this->email = $email;
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
     * @param string|null $headimgurl
     *
     * @return void
     */
    public function setHeadimgurl(?string $headimgurl): void
    {
        $this->headimgurl = $headimgurl;
    }

    /**
     * @param int|null $cityId
     *
     * @return void
     */
    public function setCityId(?int $cityId): void
    {
        $this->cityId = $cityId;
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
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
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
    public function getEmail(): ?string
    {
        return $this->email;
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
    public function getHeadimgurl(): ?string
    {
        return $this->headimgurl;
    }

    /**
     * @return int|null
     */
    public function getCityId(): ?int
    {
        return $this->cityId;
    }

    /**
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }

}

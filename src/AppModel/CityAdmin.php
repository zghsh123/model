<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 
 * Class CityAdmin
 *
 * @since 2.0
 *
 * @Entity(table="city_admin")
 */
class CityAdmin extends Model
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
     * 账号
     *
     * @Column()
     *
     * @var string|null
     */
    private $name;

    /**
     * 密码
     *
     * @Column(hidden=true)
     *
     * @var string|null
     */
    private $password;

    /**
     * 超管组
     *
     * @Column(name="is_super", prop="isSuper")
     *
     * @var int|null
     */
    private $isSuper;

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
     * 排序
     *
     * @Column()
     *
     * @var string|null
     */
    private $sort;

    /**
     * 用户头像
     *
     * @Column()
     *
     * @var string|null
     */
    private $headimgurl;

    /**
     * 用户姓名
     *
     * @Column(name="real_name", prop="realName")
     *
     * @var string|null
     */
    private $realName;

    /**
     * 用户所属用户组
     *
     * @Column(name="group_id", prop="groupId")
     *
     * @var int|null
     */
    private $groupId;


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
     * @param int|null $isSuper
     *
     * @return void
     */
    public function setIsSuper(?int $isSuper): void
    {
        $this->isSuper = $isSuper;
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
     * @param string|null $sort
     *
     * @return void
     */
    public function setSort(?string $sort): void
    {
        $this->sort = $sort;
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
     * @param string|null $realName
     *
     * @return void
     */
    public function setRealName(?string $realName): void
    {
        $this->realName = $realName;
    }

    /**
     * @param int|null $groupId
     *
     * @return void
     */
    public function setGroupId(?int $groupId): void
    {
        $this->groupId = $groupId;
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
     * @return int|null
     */
    public function getIsSuper(): ?int
    {
        return $this->isSuper;
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
    public function getSort(): ?string
    {
        return $this->sort;
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
    public function getRealName(): ?string
    {
        return $this->realName;
    }

    /**
     * @return int|null
     */
    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

}

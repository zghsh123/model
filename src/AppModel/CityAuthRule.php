<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 
 * Class CityAuthRule
 *
 * @since 2.0
 *
 * @Entity(table="city_auth_rule")
 */
class CityAuthRule extends Model
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
     * 规则的唯一标识路径
     *
     * @Column()
     *
     * @var string
     */
    private $name;

    /**
     * 中文名称
     *
     * @Column()
     *
     * @var string
     */
    private $title;

    /**
     * 状态 0:禁用 1:启用
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 关系ID 管理父级ID
     *
     * @Column()
     *
     * @var int
     */
    private $pid;

    /**
     * 菜单图标
     *
     * @Column()
     *
     * @var string|null
     */
    private $icon;

    /**
     * 备注信息
     *
     * @Column()
     *
     * @var string|null
     */
    private $remark;

    /**
     * 菜单类型;1:有界面可访问菜单,2:无界面可访问菜单,0:只作为菜单
     *
     * @Column()
     *
     * @var int|null
     */
    private $type;

    /**
     * 删除的时间
     *
     * @Column(name="deleted_at", prop="deletedAt")
     *
     * @var string|null
     */
    private $deletedAt;

    /**
     * 创建的时间
     *
     * @Column(name="created_at", prop="createdAt")
     *
     * @var string|null
     */
    private $createdAt;

    /**
     * 更新的时间
     *
     * @Column(name="updated_at", prop="updatedAt")
     *
     * @var string|null
     */
    private $updatedAt;


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
     * @param string $name
     *
     * @return void
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $title
     *
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @param int $status
     *
     * @return void
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @param int $pid
     *
     * @return void
     */
    public function setPid(int $pid): void
    {
        $this->pid = $pid;
    }

    /**
     * @param string|null $icon
     *
     * @return void
     */
    public function setIcon(?string $icon): void
    {
        $this->icon = $icon;
    }

    /**
     * @param string|null $remark
     *
     * @return void
     */
    public function setRemark(?string $remark): void
    {
        $this->remark = $remark;
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
     * @param string|null $deletedAt
     *
     * @return void
     */
    public function setDeletedAt(?string $deletedAt): void
    {
        $this->deletedAt = $deletedAt;
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
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getPid(): ?int
    {
        return $this->pid;
    }

    /**
     * @return string|null
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }

    /**
     * @return string|null
     */
    public function getRemark(): ?string
    {
        return $this->remark;
    }

    /**
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
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

}

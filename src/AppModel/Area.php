<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 地区表
 * Class Area
 *
 * @since 2.0
 *
 * @Entity(table="area")
 */
class Area extends Model
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
     * 父级ID
     *
     * @Column()
     *
     * @var int
     */
    private $pid;

    /**
     * 地区名称
     *
     * @Column(name="area_name", prop="areaName")
     *
     * @var string
     */
    private $areaName;

    /**
     * 子属关系
     *
     * @Column()
     *
     * @var int
     */
    private $level;

    /**
     * 城市码
     *
     * @Column(name="city_code", prop="cityCode")
     *
     * @var string
     */
    private $cityCode;

    /**
     * 是否开通城市
     *
     * @Column(name="is_start", prop="isStart")
     *
     * @var int|null
     */
    private $isStart;


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
     * @param int $pid
     *
     * @return void
     */
    public function setPid(int $pid): void
    {
        $this->pid = $pid;
    }

    /**
     * @param string $areaName
     *
     * @return void
     */
    public function setAreaName(string $areaName): void
    {
        $this->areaName = $areaName;
    }

    /**
     * @param int $level
     *
     * @return void
     */
    public function setLevel(int $level): void
    {
        $this->level = $level;
    }

    /**
     * @param string $cityCode
     *
     * @return void
     */
    public function setCityCode(string $cityCode): void
    {
        $this->cityCode = $cityCode;
    }

    /**
     * @param int|null $isStart
     *
     * @return void
     */
    public function setIsStart(?int $isStart): void
    {
        $this->isStart = $isStart;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getPid(): ?int
    {
        return $this->pid;
    }

    /**
     * @return string
     */
    public function getAreaName(): ?string
    {
        return $this->areaName;
    }

    /**
     * @return int
     */
    public function getLevel(): ?int
    {
        return $this->level;
    }

    /**
     * @return string
     */
    public function getCityCode(): ?string
    {
        return $this->cityCode;
    }

    /**
     * @return int|null
     */
    public function getIsStart(): ?int
    {
        return $this->isStart;
    }

}

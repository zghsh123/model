<?php declare(strict_types=1);


namespace App\Models\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 
 * Class UsersShareImg
 *
 * @since 2.0
 *
 * @Entity(table="users_share_img")
 */
class UsersShareImg extends Model
{
    /**
     * 用户图片分享表主键
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
     * @var int
     */
    private $uId;

    /**
     * 分享商品的ID
     *
     * @Column(name="goods_id", prop="goodsId")
     *
     * @var int
     */
    private $goodsId;

    /**
     * 分享图片的url
     *
     * @Column(name="img_url", prop="imgUrl")
     *
     * @var string
     */
    private $imgUrl;

    /**
     * 分享商品的背景图片
     *
     * @Column(name="bg_color", prop="bgColor")
     *
     * @var string
     */
    private $bgColor;

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
     * @param int $uId
     *
     * @return void
     */
    public function setUId(int $uId): void
    {
        $this->uId = $uId;
    }

    /**
     * @param int $goodsId
     *
     * @return void
     */
    public function setGoodsId(int $goodsId): void
    {
        $this->goodsId = $goodsId;
    }

    /**
     * @param string $imgUrl
     *
     * @return void
     */
    public function setImgUrl(string $imgUrl): void
    {
        $this->imgUrl = $imgUrl;
    }

    /**
     * @param string $bgColor
     *
     * @return void
     */
    public function setBgColor(string $bgColor): void
    {
        $this->bgColor = $bgColor;
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
     * @return int
     */
    public function getUId(): ?int
    {
        return $this->uId;
    }

    /**
     * @return int
     */
    public function getGoodsId(): ?int
    {
        return $this->goodsId;
    }

    /**
     * @return string
     */
    public function getImgUrl(): ?string
    {
        return $this->imgUrl;
    }

    /**
     * @return string
     */
    public function getBgColor(): ?string
    {
        return $this->bgColor;
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

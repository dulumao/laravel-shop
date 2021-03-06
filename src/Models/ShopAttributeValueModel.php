<?php
namespace SimpleShop\Commodity\Models;
/**
 *  @description 商品属性表
 *  @author  wangzhoudong  <admin@yijinba.com>;
 *  @version    1.0
 *  @date 2017-01-05
 *
 */
class ShopAttributeValueModel extends BaseModel
{
    /**
     * 数据表名
     * 
     * @var string
     *
     */
    protected $table = 'shop_attribute_value';
    /**
                主键
     */
    protected $primaryKey = 'id';

    //分页
    protected $perPage = PAGE_NUMS;
    
    /**
     * 可以被集体附值的表的字段
     *
     * @var string
     */
    protected $fillable = [
                           'name',
                           'attr_id',
                           'cate_id',
                           'sort'
                           ];

    public function attrInfo(){
        return $this->hasOne('SimpleShop\Commodity\Models\ShopAttributeModel', 'id', 'attr_id');
    }
}
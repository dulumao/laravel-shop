<?php
/**
 * Created by PhpStorm.
 * User: Jiangzhiheng
 * Date: 2017/4/14
 * Time: 下午6:53
 */

namespace Commodity\Facades;


use Illuminate\Support\Facades\Facade;
use Commodity\Search;

class CommoditySearch extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Search::class;
    }
}
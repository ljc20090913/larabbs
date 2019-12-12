<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/12/2019
 * Time: 10:51
 */

namespace App\Observers;


use App\Models\Link;
use Illuminate\Support\Facades\Cache;

class LinkObserver
{
	//在保存时情况cache_key对应的缓存
	public function saved(Link $link){
		Cache::forget ($link->cache_key);
	}

}
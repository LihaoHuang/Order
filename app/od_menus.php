<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\AnnounceAttach
 *
 * @property int $att_id 流水號PK
 * @property int $id announce_info.id
 * @property string|null $att_name 檔案名稱
 * @property string|null $ori_name 原檔案名稱
 * @property int|null $status 狀態
 * @property \Carbon\Carbon $upload_date 上傳日期
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AnnounceAttach whereAttId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AnnounceAttach whereAttName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AnnounceAttach whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AnnounceAttach whereOriName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AnnounceAttach whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AnnounceAttach whereUploadDate($value)
 * @mixin \Eloquent
 */
class od_menus extends Model
{
    protected  $table = 'od_menus';
    protected  $primaryKey = 'id';
    protected $fillable = ['id', 'store_id', 'sort', 'classify', 'food_name', 'cost'];
    protected $dates = ['create_date', 'modify_date'];

    public function announce_info()
    {
        $this->hasMany()
    }
}

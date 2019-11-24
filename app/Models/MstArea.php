<?php
/**
 * @Author: C Yongky Pranowo
 * @Date:   2019-11-24 17:54:13
 * @Last Modified by:   C Yongky Pranowo
 * @Last Modified time: 2019-11-24 19:20:25
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MstArea extends Model
{
    protected $table = 'mst_area';
    protected $fillable = ['area_name'];
}

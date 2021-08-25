<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    /**
     * The table used by the model
     *
     *
     * @var string
     */
    protected $table = 'tbm_meetings';

    /**
     * @var string[]
     */

    protected $guarded = ['id'];

    protected $casts = [
        'created_at' => 'date:Y-m-d H:i:s',
        'updated_at' => 'date:Y-m-d H:i:s'
    ];


}

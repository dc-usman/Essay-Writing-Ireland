<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderQuery extends Model
{

    public $table = 'order_queries';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'website',
        'service',
        'detail',
    ];

}

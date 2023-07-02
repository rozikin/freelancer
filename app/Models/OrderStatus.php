<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderStatus extends Model
{
    use HasFactory;

    use SoftDeletes;




    public $table = 'order_status';

    protected $dates = [
        'update_at',
        'created_at',
        'deleted_at'
    ];

    protected $fillable = [
        'name', 
        'update_at',
        'created_at',
        'deleted_at'
    ];

        //one to many
        public function order(){
            return $this->belongsTo('App\Models\Order'.'order_status_id');
        }
}
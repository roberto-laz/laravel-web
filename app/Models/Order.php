<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'concept',
        'discount',
        'price',
        'user_id'
    ];

    protected $table = 'orders';


        /*

    ----------------------------------------------------------------

    ------------------------RELATIONS-------------------------------

    ----------------------------------------------------------------

    */

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

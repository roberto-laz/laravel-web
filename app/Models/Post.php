<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'content',
        'likes'
    ];

    protected $table = 'posts';


    /*

    ----------------------------------------------------------------

    ------------------------RELATIONS-------------------------------

    ----------------------------------------------------------------

    */

    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}

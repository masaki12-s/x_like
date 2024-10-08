<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    /**
     * `
     * @var
     */
    protected $fillable = [
        'user_id',
        'date',
        'time',
        'tweet',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}

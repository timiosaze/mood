<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{
    use HasFactory;

    protected $fillable = [
        'state_id',
        'user_id',
        'user_prediction',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $fillable=[
        'record',
    ];
    use HasFactory;
    protected $table = 'treatments';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

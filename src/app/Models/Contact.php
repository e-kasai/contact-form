<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // $fillableで操作可能なデータを指定
    protected $fillable = [
        'name',
        'email',
        'tel',
        'message'
    ];
}

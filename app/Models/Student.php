<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_id',
        'name',
        'kana',
        'email',
        'password',
        'zip_code',
        'address1',
        'address2',
        'tel',
        'gender',
        'birthday',
        'joindate',
        'is_payment',
        'intorducer',
        'parent_name',
        'canpaign',
        'memo',
        'is_rest',
    ];
}

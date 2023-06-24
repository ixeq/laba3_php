<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cars extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'cars';
    protected $fillable = [
        'id',
        'model',
        'owner',
        'date',
        'price',
        'sell',
        'debt',
    ];
}
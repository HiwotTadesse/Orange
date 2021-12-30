<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
    ];

    public function bids(){
        return $this->hasMany(Bid::class, 'language_id');
    }
}
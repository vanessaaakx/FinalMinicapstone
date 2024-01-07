<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plugin extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'daws', 'price'];

    public function discounts()
    {
        return $this->hasMany(Discount::class);
    }
}

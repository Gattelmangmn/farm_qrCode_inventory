<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function infoScan() {
        return $this->hasMany(InfoScan::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class  InfoScan extends Model
{
    protected $guarded = [];

    public function ingredients()
    {
        return $this->belongsTo(Ingredients::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function ingredient()
    {
        return $this->belongsTo(Ingredients::class);
    }
}

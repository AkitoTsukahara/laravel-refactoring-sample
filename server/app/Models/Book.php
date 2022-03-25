<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function detail()
    {
        return $this->hasOne('\App\Models\BookDetail');
    }

    public function author()
    {
        return $this->belongsTo('\App\Models\Authos');
    }

    public function publisher()
    {
        return $this->belongsTo('\App\Models\Publisher');
    }
}

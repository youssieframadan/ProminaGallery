<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'album_id',
        'url'
    ];
    public function Album()
    {
        return $this->belongsTo(Album::class);
    }

}

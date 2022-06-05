<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'community_name',
        'slug',
        'cabinet_id',
    ];

    public function cabinet()
    {
        return $this->belongsTo('App\Models\Cabinet');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Symfony\Component\String\Slugger\SluggerInterface;

class Konten extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'judul'
    //         ]
    //     ];
    // }
}

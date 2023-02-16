<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model // Article -> articles
{
    use HasFactory;
    protected $fillable=[
      "name",
      "body"
    ];
    public function categories(){
        return $this->belongsTo(Category::class);

    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Post extends Model
{
    use HasFactory, HasApiTokens;

    #Accesors

    public function getExcerptAttribute(){
        return substr($this->content, 0, 120);
    }

    public function getPublishedAtAttribute(){
        return $this->created_at->diffForHumans();
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}

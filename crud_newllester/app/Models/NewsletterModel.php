<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class NewsletterModel extends Model {

    protected $table = 'news';
    protected $fillable = ['titulo', 'emails', 'conteudo'];

}

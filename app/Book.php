<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $table = 'book';
    protected $fillable = ['bookname','author','description','date'];

    public static $rules = [
    	"bookname" => 'required|min:4',
    	"author" => 'required|min:4',
    	"description" => 'required|min:10',
    	"date" => 'required'
    ];
}

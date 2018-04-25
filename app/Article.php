<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //Article::create 和 Article::update 方法中可以使用它们
    /**
     * 可以被批量赋值的字段
     *
     * @var array
     */
    protected $fillable = ['title', 'bosy'];


    /**
     * 不能被批量赋值的属性
     *
     * @var array
     */
    protected $guarded = [];







}

<?php

namespace Models;
class Article{

    public $table = 'articles';
    public $fields = [
        'id',
        'category_id',
        'title',
        'content',
        'status',
        'updated'
    ];

    public $fillable = [
        'category_id' => null,
        'title' => '',
        'content' => '',
        'status' => false
    ];




}
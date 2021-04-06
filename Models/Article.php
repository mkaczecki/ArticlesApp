<?php

namespace Models;
class Article{

    private string $table = 'articles';
    private array $fields = [
        'id',
        'category_id',
        'title',
        'content',
        'status',
        'updated'
    ];

    private array $fillable = [
        'category_id' => null,
        'content' => '',
        'title' => '',
        'status' => false
    ];

    public function table(): string
    {
        return $this->table;
    }
    public function fields(): array
    {
        return $this->fields;
    }
    public function fillable(): array
    {
        return $this->fillable;
    }


}
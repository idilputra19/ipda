<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ArticleNews extends Model
{
    use HasFactory, SoftDeletes;

    protected $filltabel = [
        'name',
        'slug',
        'thumnail',
        'content',
        'category_id',
        'author_id',
        'is_featured ',
    ];
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class, 'category_id');
    }

    public function author(): BelongsTo
    {
        return $this->belongsTO(Author::class, 'author_id');
    }


}

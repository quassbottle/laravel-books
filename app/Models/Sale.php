<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sale extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'sales';

    protected $fillable = [
        'price',
        'author_id',
        'book_id',
    ];

    public function author(): BelongsTo {
        return $this->belongsTo(Author::class);
    }

    public function book(): BelongsTo {
        return $this->belongsTo(Book::class);
    }
}

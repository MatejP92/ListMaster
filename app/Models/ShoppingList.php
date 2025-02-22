<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShoppingList extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'item',
        'note',
        'category',
        'finished',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

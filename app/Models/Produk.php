<?php

namespace App\Models;

use App\Models\Jenis;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $guarded = ['id'];

    public function jenis(): BelongsTo
    {
        return $this->belongsTo(Jenis::class);
    }
}

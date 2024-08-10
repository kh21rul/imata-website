<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $with = ['division'];
    protected $guarded = ['id'];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['division'] ?? false, function ($query, $division) {
            return $query->whereHas('division', function ($query) use ($division) {
                $query->where('slug', $division);
            });
        });
    }
}

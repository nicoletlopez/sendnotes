<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [
        'id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // public function publishedNotes(User $user)
    // {
    //     return $this->where('user_id', $user->id)
    //         ->where('is_published', true)
    //         ->get();
    // }

    // we don't have to do it like this below
    // protected $fillable = [
    //     'title',
    //     'body',
    //     'send_date',
    //     'is_published',
    //     'heart_count',
    //     'timestamps',
    //     'created_at',
    //     'updated_at',
    //     'deleted_at',
    // ];
}

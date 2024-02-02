<?php

namespace App\Models;

use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
    ];




    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

class ChirpReaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'reaction',
        'user_id', // Add this line if 'user_id' is a field in the 'chirp_reactions' table
    ];




    protected $dispatchesEvents = [
        'created' => ChirpCreated::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}


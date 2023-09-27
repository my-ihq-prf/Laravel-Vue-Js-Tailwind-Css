<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmbassadorProfile extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'active' => 'boolean',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'fullName', 'activeText'
    ];
    public function getFullNameAttribute()
    {
        return $this->full_name;
    }
    public function getActiveTextAttribute()
    {
        return $this->active_text;
    }
}

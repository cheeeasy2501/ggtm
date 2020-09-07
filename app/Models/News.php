<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'content'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public function user()
    {
        return $this->belongsToMany(app(User::class));
    }
}

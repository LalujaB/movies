<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 */
class Movie extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['title','genre','director', 'year', 'storyline'];


}

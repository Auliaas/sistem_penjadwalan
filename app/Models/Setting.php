<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table   = 'settings';
    protected $guarded = [];

    const CROSSOVER = 'total_gen';
    const MUTASI    = 'mutasi';
}

<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use Searchable;

    protected $table = 'departments';

    protected $fillable = ['name'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function searchableAs()
    {
        return 'departments';
    }
}

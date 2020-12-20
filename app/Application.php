<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use Searchable;

    protected $table = 'applications';

    protected $fillable = ['type', 'start_date', 'amount'];

    public function searchableAs()
    {
        return 'applications';
    }
}

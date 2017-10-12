<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Options extends Model {

    protected $connection = 'mysql';
    protected $fillable = ['option_id', 'option_name', 'option_value'];
    protected $hidden = ['option_id'];

}

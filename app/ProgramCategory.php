<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class ProgramCategory extends Model
{
    use Translatable;
    protected $translatable = ['name'];
}

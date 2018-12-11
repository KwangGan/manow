<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;

class Program extends Model
{
    use Translatable;
    protected $translatable = ['title','body','excerpt','seo_title','meta_description','meta_keywords'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ModelScopes;
class Category extends Model
{
    //
    use ModelScopes;
    
    public $timestamps = true;
     /**
     * The model's default values for attributes.
     *
     * @var array
     */

    public function products(){
       return $this->hasMany('App\Models\Product', 'category_id', 'id');
    }
}

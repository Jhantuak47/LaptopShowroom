<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\ModelScopes;
class Product extends Model
{
    //
    use ModelScopes;


    public $timestamps = true;
     /**
     * The model's default values for attributes.
     *
     * @var array
     */ 
    protected $fillable = [
    	'name',
        'category_id',
        'brand_id',
    	'price',
    	'avl_stock',
        'description',
        'manufacturer',
        'img_url'
    ];

    public function images(){
        return $this->hasMany(Image::class,'pro_id');
    }
    public function brand(){
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function category(){
        return $this->belongsTo(Category::class, 'category_id','id');
    }

}

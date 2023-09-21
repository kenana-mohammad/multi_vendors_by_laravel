<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Stancl\Tenancy\Database\Concerns\BelongsToTenant;

class store extends Model
{
    use HasFactory,BelongsToTenant;

   



    protected $fillable=['id', 'name', 'user_id', 'image', 'status','rating','category_id','address',
    'description','subcategory_id','thems','tenant_id'];
    protected $table='stores';




    public function user(){
        return $this->beLongsTo(User::class);
    }


    public function category(){
        return $this->beLongsTo(category::class);
    }
    public function subcategory(){
        return $this->beLongsTo(subcategory::class);
    }

    public function ProductCategory(){
        return $this->hasMany(ProductCategory::class);
    }

}

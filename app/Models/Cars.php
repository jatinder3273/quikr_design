<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    
    use HasFactory;
    protected $table = 'p_cars';
    protected $fillable =['user_id','category_id','subcategory_id','brand_id','model_id','year_of_registration','kms_driven','description','file','price',];
}

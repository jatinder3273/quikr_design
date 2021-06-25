<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobiles extends Model
{
    use HasFactory;
    protected $table = 'p_mobiles';
    protected $fillable = ['user_id', 'category_id', 'subcategory_id', 'brand_id', 'model_id', 'year_of_registration', 'physical_condition', 'Ad_title', 'price','description','file',];
}

<?php

namespace App\Models;
use App\Models\category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $table = 'subcategory';
    protected $fillable =['name','category_id',];

    protected $appends = ['category_name'];

    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function getCategoryNameAttribute()
    {
        return category::select('name')->where('id', $this->category_id)->first();
    }
}

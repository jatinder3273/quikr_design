<?php

namespace App\Models;
use App\Models\category;
use App\Models\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table ="brand";
    protected $fillable =['name','category_id',];

    protected $append = ['category_name'];

    public function Category()
    {
        return $this->belongsTo(Brand::class);
    }

    public function getCategoryNameAttribute()
    {
        return category::select('name')->where('id',$this->category_id)->first();
    }

    public function Models()
    {
        return $this->hasmany(Models::class,'brand_id','id');
    }
}

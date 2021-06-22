<?php

namespace App\Models;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Models extends Model
{
    use HasFactory;
    protected $table ='model';
    protected $fillable =['name','brand_id',];

    protected $appends = ['brand_name'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function getBrandNameAttribute()
    {
        return Brand::select('name')->where('id', $this->brand_id)->first();
    }
}

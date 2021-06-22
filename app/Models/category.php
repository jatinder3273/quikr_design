<?php

namespace App\Models;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table ="category";
    protected $fillable =[
        'name',
    ];

    public function SubCategory()
    {
        return $this->hasmany(SubCategory::class);
    }

    public function Brand()
    {
        return $this->hasmany(Brand::class);
    }
    
}

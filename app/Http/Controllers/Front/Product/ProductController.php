<?php

namespace App\Http\Controllers\Front\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function addCar()
    {
        return view('Front.QuickrProduct.Cars_&_Bikes.add');
    }

    public function addMobile()
    {
        return view('Front.QuickrProduct.Mobiles_&_Tablets.add');
    }

    public function addElectronics()
    {
        return view('Front.QuickrProduct.Electronics _&_Appliances.add');
    }
    public function addRealestate()
    {
        return view('Front.QuickrProduct.Real_Estate.add');
    }
    public function addHome()
    {
        return view('Front.QuickrProduct.Home_&_Lifestyle.add');
    }
    public function addJobs()
    {
        return view('Front.QuickrProduct.Jobs.add');
    }
    public function addServices()
    {
        return view('Front.QuickrProduct.Services.add');
    }
    public function addEducation()
    {
        return view('Front.QuickrProduct.Education_&_Tranning.add');
    }
    public function addEntertainment()
    {
        return view('Front.QuickrProduct.Entertainment.add');
    }
    public function addPets()
    {
        return view('Front.QuickrProduct.Pets_&_Petcare.add');
    }
    public function addCommunity()
    {
        return view('Front.QuickrProduct.Community.add');
    }
    public function addEvents()
    {
        return view('Front.QuickrProduct.Events.add');
    }
    public function addMatrimonial()
    {
        return view('Front.QuickrProduct.Matrimonial.add');
    }
}

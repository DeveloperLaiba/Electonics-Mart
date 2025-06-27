<?php

namespace App\Http\Controllers;

use App\Models\ABackgroundImage;
use App\Models\AboutBackgroundImage;
use App\Models\AboutBackgroundImage2;
use App\Models\AboutCard;
use App\Models\AboutCheckbox;
use App\Models\AboutCustomer;
use App\Models\AboutImage;
use App\Models\Category;
use App\Models\CBackgroundImage;
use App\Models\ContactBackgroundImage;
use App\Models\ContactCompany;
use App\Models\ContactConnect;
use App\Models\ContactForm;
use App\Models\ContactMap;
use App\Models\HBackgroundImage;
use App\Models\HCard1;
use App\Models\HCard2;
use App\Models\HCarousal;
use App\Models\HExcitingDeal;
use App\Models\HSmartWatches;
use App\Models\Product;
use App\Models\WeWork;
use Illuminate\Http\Request;

class ElectronicsMartController extends Controller
{
   public function about(){
      $category = Category::all();
      $wework = WeWork::all();
      $aboutcheckbox = AboutCheckbox::all();
      $aboutcheckbox = AboutCheckbox::all();
      $aboutimage = AboutImage::all();
      $aboutcustomer = AboutCustomer::all();
      $aboutcard = AboutCard::all();
      $aboutbackgroundimage = AboutBackgroundImage::all();
      $aboutbackgroundimage2 = AboutBackgroundImage2::all();
    return view('ElectronicsMart.About Us' ,compact('category','aboutbackgroundimage','wework','aboutcheckbox','aboutimage','aboutbackgroundimage2','aboutcustomer','aboutcard'));
   }
   public function contact(){
      $category = Category::all();
      $contactconnect = ContactConnect::all();
      $contactcompany = ContactCompany::all();
      $contactform = ContactForm::all();
      $contactmap = ContactMap::all();
      $contactbackgroundimage = ContactBackgroundImage::all();
    return view('ElectronicsMart.Contact', compact('category','contactbackgroundimage','contactconnect','contactcompany','contactform','contactmap'));
   }
   public function home(){
      $carousal = HCarousal::all();
      $card1 = HCard1::all();
      $card2 = HCard2::all();
      $excitingdeal = HExcitingDeal::all();
      $smartwatches = HSmartWatches::all();
      $category = Category::all();
      $hbackgroundimage = HBackgroundImage::all();
      return view('ElectronicsMart.Home',compact('carousal','card1','card2','excitingdeal','hbackgroundimage','smartwatches','category'));
     }
     public function categories($id){
      $product = Product::where('category_id',$id)->get();
      $smartwatches = HSmartWatches::all();
      $category = Category::all();
      $cbackgroundimage = CBackgroundImage::all();
      $hbackgroundimage = HBackgroundImage::all();
      return view('Product.Categories' ,compact('category','cbackgroundimage','product','hbackgroundimage','smartwatches'));
     }
     public function cart($id){
      $category = Category::all();
      $product = Product::find($id);
      return view('ElectronicsMart.Cart',compact('category','product'));
     }

     public function payment(){
      $category = Category::all();
      $cart = session('addtocart', []);
      return view('ElectronicsMart.Payment',compact('category','cart'));
     }

     public function message(){
      $category = Category::all();
      return view('ElectronicsMart.Message',compact('category'));
     }
}

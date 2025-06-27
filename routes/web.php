<?php

use App\Http\Controllers\AboutBackgroundImage2Controller;
use App\Http\Controllers\AboutBackgroundImageController;
use App\Http\Controllers\AboutCardController;
use App\Http\Controllers\AboutCheckboxController;
use App\Http\Controllers\AboutCustomerController;
use App\Http\Controllers\AboutImageController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CBackgroundImageController;
use App\Http\Controllers\ContactBackgroundImageController;
use App\Http\Controllers\ContactCompanyController;
use App\Http\Controllers\ContactConnectController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ContactMapController;
use App\Http\Controllers\ElectronicsMartController;
use App\Http\Controllers\HBackgroundImageController;
use App\Http\Controllers\HCard1Controller;
use App\Http\Controllers\HCard2Controller;
use App\Http\Controllers\HCarousalController;
use App\Http\Controllers\HExcitingDealController;
use App\Http\Controllers\HSmartWatchesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WeWorkController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/receipt', [App\Http\Controllers\PaymentController::class, 'showReceipt']);


Route::get('/post', function () {
    return view('post');
});
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');




Route::view('register', 'register')->name('register');
Route::post('/registerSave', [UserController::class, 'registersave'])
    ->name('registerSave');
Route::get('/RegisterTable', [UserController::class, 'Table'])
    ->name('table.register');
Route::get('/RegisterDelete/{id}', [UserController::class, 'delete'])
    ->name('delete.register');
Route::view('login', 'login')->name('login');
Route::post('/loginMatch', [UserController::class, 'loginuser'])
    ->name('loginMatch');
Route::get('/logout', [UserController::class, 'logout'])
    ->name('logout');




Route::middleware(['auth', 'ValidUser:admin'])->group(function () {
    Route::get('/AdminPanel', [AdminPanelController::class, 'create'])
        ->name('AdminPanel.dashboard');

    Route::get('/HCarousal', [HCarousalController::class, 'create'])->name('HCarousal');
    Route::post('/HCarousalstore', [HCarousalController::class, 'store'])
        ->name('store.HCarousal');
    Route::get('/HCarousalTable', [HCarousalController::class, 'Table'])
        ->name('table.HCarousal');
    Route::get('/HCarousalEdit/{id}', [HCarousalController::class, 'edit'])
        ->name('edit.HCarousal');
    Route::post('/HCarousalUpdate/{id}', [HCarousalController::class, 'update'])
        ->name('update.HCarousal');
    Route::get('/HCarousalDelete/{id}', [HCarousalController::class, 'delete'])
        ->name('delete.HCarousal');


    Route::get('/HCard1', [HCard1Controller::class, 'create'])->name('HCard1');
    Route::post('/HCard1store', [HCard1Controller::class, 'store'])
        ->name('store.HCard1');
    Route::get('/HCard1Table', [HCard1Controller::class, 'Table'])
        ->name('table.HCard1');
    Route::get('/HCard1Edit/{id}', [HCard1Controller::class, 'edit'])
        ->name('edit.HCard1');
    Route::post('/HCard1Update/{id}', [HCard1Controller::class, 'update'])
        ->name('update.HCard1');
    Route::get('/HCard1Delete/{id}', [HCard1Controller::class, 'delete'])
        ->name('delete.HCard1');

    Route::get('/HCard2', [HCard2Controller::class, 'create'])->name('HCard2');
    Route::post('/HCard2store', [HCard2Controller::class, 'store'])
        ->name('store.HCard2');
    Route::get('/HCard2Table', [HCard2Controller::class, 'Table'])
        ->name('table.HCard2');
    Route::get('/HCard2Edit/{id}', [HCard2Controller::class, 'edit'])
        ->name('edit.HCard2');
    Route::post('/HCard2Update/{id}', [HCard2Controller::class, 'update'])
        ->name('update.HCard2');
    Route::get('/HCard2Delete/{id}', [HCard2Controller::class, 'delete'])
        ->name('delete.HCard2');


    Route::get('/HExcitingDeal', [HExcitingDealController::class, 'create'])->name('HExcitingDeal');
    Route::post('/HExcitingDealstore', [HExcitingDealController::class, 'store'])
        ->name('store.HExcitingDeal');
    Route::get('/HExcitingDealTable', [HExcitingDealController::class, 'Table'])
        ->name('table.HExcitingDeal');
    Route::get('/HExcitingDealEdit/{id}', [HExcitingDealController::class, 'edit'])
        ->name('edit.HExcitingDeal');
    Route::post('/HExcitingDealUpdate/{id}', [HExcitingDealController::class, 'update'])
        ->name('update.HExcitingDeal');
    Route::get('/HExcitingDealDelete/{id}', [HExcitingDealController::class, 'delete'])
        ->name('delete.HExcitingDeal');


    Route::get('/HBackgroundImage', [HBackgroundImageController::class, 'create'])->name('HBackgroundImage');
    Route::post('/HBackgroundImagestore', [HBackgroundImageController::class, 'store'])
        ->name('store.HBackgroundImage');
    Route::get('/HBackgroundImageTable', [HBackgroundImageController::class, 'Table'])
        ->name('table.HBackgroundImage');
    Route::get('/HBackgroundImageEdit/{id}', [HBackgroundImageController::class, 'edit'])
        ->name('edit.HBackgroundImage');
    Route::post('/HBackgroundImageUpdate/{id}', [HBackgroundImageController::class, 'update'])
        ->name('update.HBackgroundImage');
    Route::get('/HBackgroundImageDelete/{id}', [HBackgroundImageController::class, 'delete'])
        ->name('delete.HBackgroundImage');


    Route::get('/HSmartWatches', [HSmartWatchesController::class, 'create'])->name('HSmartWatches');
    Route::post('/HSmartWatchesstore', [HSmartWatchesController::class, 'store'])
        ->name('store.HSmartWatches');
    Route::get('/HSmartWatchesTable', [HSmartWatchesController::class, 'Table'])
        ->name('table.HSmartWatches');
    Route::get('/HSmartWatchesEdit/{id}', [HSmartWatchesController::class, 'edit'])
        ->name('edit.HSmartWatches');
    Route::post('/HSmartWatchesUpdate/{id}', [HSmartWatchesController::class, 'update'])
        ->name('update.HSmartWatches');
    Route::get('/HSmartWatchesDelete/{id}', [HSmartWatchesController::class, 'delete'])
        ->name('delete.HSmartWatches');


    Route::get('/Category', [CategoryController::class, 'create'])->name('Category');
    Route::post('/Categorystore', [CategoryController::class, 'store'])
        ->name('store.Category');
    Route::get('/CategoryTable', [CategoryController::class, 'Table'])
        ->name('table.Category');
    Route::get('/CategoryEdit/{id}', [CategoryController::class, 'edit'])
        ->name('edit.Category');
    Route::post('/CategoryUpdate/{id}', [CategoryController::class, 'update'])
        ->name('update.Category');
    Route::get('/CategoryDelete/{id}', [CategoryController::class, 'delete'])
        ->name('delete.Category');


    Route::get('/Product', [ProductController::class, 'create'])->name('Product');
    Route::post('/Productstore', [ProductController::class, 'store'])
        ->name('store.Product');
    Route::get('/ProductTable', [ProductController::class, 'Table'])
        ->name('table.Product');
    Route::get('/ProductEdit/{id}', [ProductController::class, 'edit'])
        ->name('edit.Product');
    Route::post('/ProductUpdate/{id}', [ProductController::class, 'update'])
        ->name('update.Product');
    Route::get('/ProductDelete/{id}', [ProductController::class, 'delete'])
        ->name('delete.Product');





    Route::get('/CBackgroundImage', [CBackgroundImageController::class, 'create'])->name('CBackgroundImage');
    Route::post('/CBackgroundImagestore', [CBackgroundImageController::class, 'store'])
        ->name('store.CBackgroundImage');
    Route::get('/CBackgroundImageTable', [CBackgroundImageController::class, 'Table'])
        ->name('table.CBackgroundImage');
    Route::get('/CBackgroundImageEdit/{id}', [CBackgroundImageController::class, 'edit'])
        ->name('edit.CBackgroundImage');
    Route::post('/CBackgroundImageUpdate/{id}', [CBackgroundImageController::class, 'update'])
        ->name('update.CBackgroundImage');
    Route::get('/CBackgroundImageDelete/{id}', [CBackgroundImageController::class, 'delete'])
        ->name('delete.CBackgroundImage');



    Route::get('/AboutBackgroundImage', [AboutBackgroundImageController::class, 'create'])->name('AboutBackgroundImage');
    Route::post('/AboutBackgroundImagestore', [AboutBackgroundImageController::class, 'store'])
        ->name('store.AboutBackgroundImage');
    Route::get('/AboutBackgroundImageTable', [AboutBackgroundImageController::class, 'Table'])
        ->name('table.AboutBackgroundImage');
    Route::get('/AboutBackgroundImageEdit/{id}', [AboutBackgroundImageController::class, 'edit'])
        ->name('edit.AboutBackgroundImage');
    Route::post('/AboutBackgroundImageUpdate/{id}', [AboutBackgroundImageController::class, 'update'])
        ->name('update.AboutBackgroundImage');
    Route::get('/AboutBackgroundImageDelete/{id}', [AboutBackgroundImageController::class, 'delete'])
        ->name('delete.AboutBackgroundImage');



    Route::get('/WeWork', [WeWorkController::class, 'create'])->name('WeWork');
    Route::post('/WeWorkstore', [WeWorkController::class, 'store'])
        ->name('store.WeWork');
    Route::get('/WeWorkTable', [WeWorkController::class, 'Table'])
        ->name('table.WeWork');
    Route::get('/WeWorkEdit/{id}', [WeWorkController::class, 'edit'])
        ->name('edit.WeWork');
    Route::post('/WeWorkUpdate/{id}', [WeWorkController::class, 'update'])
        ->name('update.WeWork');
    Route::get('/WeWorkDelete/{id}', [WeWorkController::class, 'delete'])
        ->name('delete.WeWork');


    Route::get('/AboutCheckbox', [AboutCheckboxController::class, 'create'])->name('AboutCheckbox');
    Route::post('/AboutCheckboxstore', [AboutCheckboxController::class, 'store'])
        ->name('store.AboutCheckbox');
    Route::get('/AboutCheckboxTable', [AboutCheckboxController::class, 'Table'])
        ->name('table.AboutCheckbox');
    Route::get('/AboutCheckboxEdit/{id}', [AboutCheckboxController::class, 'edit'])
        ->name('edit.AboutCheckbox');
    Route::post('/AboutCheckboxUpdate/{id}', [AboutCheckboxController::class, 'update'])
        ->name('update.AboutCheckbox');
    Route::get('/AboutCheckboxDelete/{id}', [AboutCheckboxController::class, 'delete'])
        ->name('delete.AboutCheckbox');





    Route::get('/AboutImage', [AboutImageController::class, 'create'])->name('AboutImage');
    Route::post('/AboutImagestore', [AboutImageController::class, 'store'])
        ->name('store.AboutImage');
    Route::get('/AboutImageTable', [AboutImageController::class, 'Table'])
        ->name('table.AboutImage');
    Route::get('/AboutImageEdit/{id}', [AboutImageController::class, 'edit'])
        ->name('edit.AboutImage');
    Route::post('/AboutImageUpdate/{id}', [AboutImageController::class, 'update'])
        ->name('update.AboutImage');
    Route::get('/AboutImageDelete/{id}', [AboutImageController::class, 'delete'])
        ->name('delete.AboutImage');





    Route::get('/AboutBackgroundImage2', [AboutBackgroundImage2Controller::class, 'create'])->name('AboutBackgroundImage2');
    Route::post('/AboutBackgroundImage2store', [AboutBackgroundImage2Controller::class, 'store'])
        ->name('store.AboutBackgroundImage2');
    Route::get('/AboutBackgroundImage2Table', [AboutBackgroundImage2Controller::class, 'Table'])
        ->name('table.AboutBackgroundImage2');
    Route::get('/AboutBackgroundImage2Edit/{id}', [AboutBackgroundImage2Controller::class, 'edit'])
        ->name('edit.AboutBackgroundImage2');
    Route::post('/AboutBackgroundImage2Update/{id}', [AboutBackgroundImage2Controller::class, 'update'])
        ->name('update.AboutBackgroundImage2');
    Route::get('/AboutBackgroundImage2Delete/{id}', [AboutBackgroundImage2Controller::class, 'delete'])
        ->name('delete.AboutBackgroundImage2');


    Route::get('/AboutCustomer', [AboutCustomerController::class, 'create'])->name('AboutCustomer');
    Route::post('/AboutCustomerstore', [AboutCustomerController::class, 'store'])
        ->name('store.AboutCustomer');
    Route::get('/AboutCustomerTable', [AboutCustomerController::class, 'Table'])
        ->name('table.AboutCustomer');
    Route::get('/AboutCustomerEdit/{id}', [AboutCustomerController::class, 'edit'])
        ->name('edit.AboutCustomer');
    Route::post('/AboutCustomerUpdate/{id}', [AboutCustomerController::class, 'update'])
        ->name('update.AboutCustomer');
    Route::get('/AboutCustomerDelete/{id}', [AboutCustomerController::class, 'delete'])
        ->name('delete.AboutCustomer');


    Route::get('/AboutCard', [AboutCardController::class, 'create'])->name('AboutCard');
    Route::post('/AboutCardstore', [AboutCardController::class, 'store'])
        ->name('store.AboutCard');
    Route::get('/AboutCardTable', [AboutCardController::class, 'Table'])
        ->name('table.AboutCard');
    Route::get('/AboutCardEdit/{id}', [AboutCardController::class, 'edit'])
        ->name('edit.AboutCard');
    Route::post('/AboutCardUpdate/{id}', [AboutCardController::class, 'update'])
        ->name('update.AboutCard');
    Route::get('/AboutCardDelete/{id}', [AboutCardController::class, 'delete'])
        ->name('delete.AboutCard');


    Route::get('/ContactBackgroundImage', [ContactBackgroundImageController::class, 'create'])->name('ContactBackgroundImage');
    Route::post('/ContactBackgroundImagestore', [ContactBackgroundImageController::class, 'store'])
        ->name('store.ContactBackgroundImage');
    Route::get('/ContactBackgroundImageTable', [ContactBackgroundImageController::class, 'Table'])
        ->name('table.ContactBackgroundImage');
    Route::get('/ContactBackgroundImageEdit/{id}', [ContactBackgroundImageController::class, 'edit'])
        ->name('edit.ContactBackgroundImage');
    Route::post('/ContactBackgroundImageUpdate/{id}', [ContactBackgroundImageController::class, 'update'])
        ->name('update.ContactBackgroundImage');
    Route::get('/ContactBackgroundImageDelete/{id}', [ContactBackgroundImageController::class, 'delete'])
        ->name('delete.ContactBackgroundImage');



    Route::get('/ContactConnect', [ContactConnectController::class, 'create'])->name('ContactConnect');
    Route::post('/ContactConnectstore', [ContactConnectController::class, 'store'])
        ->name('store.ContactConnect');
    Route::get('/ContactConnectTable', [ContactConnectController::class, 'Table'])
        ->name('table.ContactConnect');
    Route::get('/ContactConnectEdit/{id}', [ContactConnectController::class, 'edit'])
        ->name('edit.ContactConnect');
    Route::post('/ContactConnectUpdate/{id}', [ContactConnectController::class, 'update'])
        ->name('update.ContactConnect');
    Route::get('/ContactConnectDelete/{id}', [ContactConnectController::class, 'delete'])
        ->name('delete.ContactConnect');



    Route::get('/ContactCompany', [ContactCompanyController::class, 'create'])->name('ContactCompany');
    Route::post('/ContactCompanystore', [ContactCompanyController::class, 'store'])
        ->name('store.ContactCompany');
    Route::get('/ContactCompanyTable', [ContactCompanyController::class, 'Table'])
        ->name('table.ContactCompany');
    Route::get('/ContactCompanyEdit/{id}', [ContactCompanyController::class, 'edit'])
        ->name('edit.ContactCompany');
    Route::post('/ContactCompanyUpdate/{id}', [ContactCompanyController::class, 'update'])
        ->name('update.ContactCompany');
    Route::get('/ContactCompanyDelete/{id}', [ContactCompanyController::class, 'delete'])
        ->name('delete.ContactCompany');




    Route::get('/ContactForm', [ContactFormController::class, 'create'])->name('ContactForm');
    Route::post('/ContactFormstore', [ContactFormController::class, 'store'])
        ->name('store.ContactForm');
    Route::get('/ContactFormTable', [ContactFormController::class, 'Table'])
        ->name('table.ContactForm');
    Route::get('/ContactFormEdit/{id}', [ContactFormController::class, 'edit'])
        ->name('edit.ContactForm');
    Route::post('/ContactFormUpdate/{id}', [ContactFormController::class, 'update'])
        ->name('update.ContactForm');
    Route::get('/ContactFormDelete/{id}', [ContactFormController::class, 'delete'])
        ->name('delete.ContactForm');


    Route::get('/ContactMap', [ContactMapController::class, 'create'])->name('ContactMap');
    Route::post('/ContactMapstore', [ContactMapController::class, 'store'])
        ->name('store.ContactMap');
    Route::get('/ContactMapTable', [ContactMapController::class, 'Table'])
        ->name('table.ContactMap');
    Route::get('/ContactMapEdit/{id}', [ContactMapController::class, 'edit'])
        ->name('edit.ContactMap');
    Route::post('/ContactMapUpdate/{id}', [ContactMapController::class, 'update'])
        ->name('update.ContactMap');
    Route::get('/ContactMapDelete/{id}', [ContactMapController::class, 'delete'])
        ->name('delete.ContactMap');



    Route::post('/Contactstore', [ContactController::class, 'store'])
        ->name('store.Contact');
    Route::get('/ContactTable', [ContactController::class, 'Table'])
        ->name('table.Contact');
    Route::get('/ContactEdit/{id}', [ContactController::class, 'edit'])
        ->name('edit.Contact');
    Route::post('/ContactUpdate/{id}', [ContactController::class, 'update'])
        ->name('update.Contact');
    Route::get('/ContactDelete/{id}', [ContactController::class, 'delete'])
        ->name('delete.Contact');
        Route::get('/clienttable', [PaymentController::class, 'clienttable'])
        ->name('ElectronicsMart.clienttable');
    Route::get('/orders', [PaymentController::class, 'table'])
        ->name('ElectronicsMart.table');
});



Route::middleware(['auth', 'ValidUser:user'])->group(function () {
    Route::get('/About', [ElectronicsMartController::class, 'about']);
    Route::get('/Contact', [ElectronicsMartController::class, 'contact']);
    Route::get('/Home', [ElectronicsMartController::class, 'home'])->name('Electronics Mart.Home');
    Route::get('/Cart/{id}', [ElectronicsMartController::class, 'cart'])->name('Cart');
    Route::get('/products/{id}', [ElectronicsMartController::class, 'categories'])->name('category.product');
    Route::get('/Payment', [ElectronicsMartController::class, 'payment'])->name('Payment');
    Route::get('/Message', [ElectronicsMartController::class, 'message'])->name('Message');
    Route::get('/Carttable', [ProductController::class, 'carttable'])
        ->name('carttable');
    Route::post('/ProductCart', [ProductController::class, 'cart'])
        ->name('addtocart');

  
});


Route::get('/cart/delete/{id}', [ProductController::class, 'deleteCart'])
    ->name('deleteCart');
Route::post('/process-payment', [PaymentController::class, 'processPayment']);
Route::post('/cashondelivery',[PaymentController::class,'cash'])->name('process.cash');

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/producten', function () {
    return view('components/products/products');
});


// Route::get('/login', App\Http\Livewire\Login::class)->name('login');

// Route::group(['middleware' => 'auth'], function () {
//     Route::group(['prefix' => 'apps', 'as' => 'apps.'], function () {
//         Route::get('/', App\Http\Livewire\Dashboard::class)->name('dashboard');

        // // customers
        // Route::group(['prefix' => 'klant', 'as' => 'customer.'], function () {
        //     Route::get('/zoek', app\View\Components\customers\Customers::class)->name('customers');
        //     Route::get('/bekijken/{customer}', App\Http\Livewire\Article\ArticleView::class)->name('view-customer');
        //     Route::get('/bewerken/{customer}', App\Http\Livewire\Article\ArticleForm::class)->name('form-cutstomer');
        //     });

//             // Details
//             Route::group(['prefix' => 'detail', 'as' => 'detail.'], function () {
//                 Route::get('/bekijken/{articleDetail}', App\Http\Livewire\Article\Detail\ArticleDetailView::class)->name('article-detail-view');
//                 Route::get('/bewerken/{articleDetail}', App\Http\Livewire\Article\Detail\ArticleDetailForm::class)->name('article-detail-edit');
//                 Route::get('/nieuw/{article}', App\Http\Livewire\Article\Detail\ArticleDetailForm::class)->name('article-detail-create');

//                 Route::group(['prefix' => 'tag', 'as' => 'tags.'], function () {
//                     Route::get('/', App\Http\Livewire\Article\Detail\TagsDetail::class)->name('tags-detail');
//                     Route::get('/bekijken/{tag}',App\Http\Livewire\Article\Detail\TagDetailView::class)->name('tag-detail-view');
//                     Route::get('/bewerken/{tag}', App\Http\Livewire\Article\Detail\TagDetailForm::class)->name('tag-detail-edit');
//                     Route::get('/nieuw', App\Http\Livewire\Article\Detail\TagDetailForm::class)->name('tag-detail-create');
//             });

//             Route::group(['prefix' => 'merk', 'as' => 'brands.'], function () {
//                 Route::get('/', App\Http\Livewire\Article\Brand\Brands::class)->name('brands');
//                 Route::get('/bekijken/{brand}',App\Http\Livewire\Article\Brand\BrandView::class)->name('brand-view');
//                 Route::get('/bewerken/{brand}', App\Http\Livewire\Article\Brand\BrandForm::class)->name('brand-edit');
//                 Route::get('/nieuw', App\Http\Livewire\Article\Brand\BrandForm::class)->name('brand-create');
//             });

//             Route::group(['prefix' => 'groep', 'as' => 'groups.'], function () {
//                 Route::get('/', App\Http\Livewire\Article\Group\Groups::class)->name('groups');
//                 Route::get('/bekijken/{group}',App\Http\Livewire\Article\Group\GroupView::class)->name('group-view');
//                 Route::get('/bewerken/{group}', App\Http\Livewire\Article\Group\GroupForm::class)->name('group-edit');
//                 Route::get('/nieuw', App\Http\Livewire\Article\Group\GroupForm::class)->name('group-create');
//             });

//             Route::group(['prefix' => 'categorie', 'as' => 'categories.'], function () {
//                 Route::get('/', App\Http\Livewire\Article\Category\Categories::class)->name('categories');
//                 Route::get('/bekijken/{category}',App\Http\Livewire\Article\Category\CategoryView::class)->name('category-view');
//                 Route::get('/bewerken/{category}', App\Http\Livewire\Article\Category\CategoryForm::class)->name('category-edit');
//                 Route::get('/nieuw', App\Http\Livewire\Article\Category\CategoryForm::class)->name('category-create');
//             });
//         });

//         Route::group(['prefix' => 'eanscan', 'as' => 'eanscanner.'], function () {
//             Route::get('/', App\Http\Livewire\Scan\EanScan::class)->name('eanscan');
//         });

//         Route::group(['prefix' => 'factuur', 'as' => 'invoice.'], function () {
//             Route::get('/', App\Http\Livewire\Invoice\Invoices::class)->name('invoices');
//             Route::get('/bekijken/{invoice}', App\Http\Livewire\Invoice\InvoiceView::class)->name('invoice-view');
//             Route::get('/bekijken/pdf/pdf', App\Http\Livewire\Invoice\InvoicePdf::class)->name('invoice-view-pdf');
//             Route::get('/bewerken/{invoice}', App\Http\Livewire\Invoice\InvoiceForm::class)->name('invoice-edit');
//             Route::get('/nieuw', App\Http\Livewire\Invoice\InvoiceForm::class)->name('invoice-create');
//         });

//         Route::group(['prefix' => 'gebruiker', 'as' => 'user.'], function () {
//             Route::get('/', App\Http\Livewire\User\UserDashboard::class)->name('users');
//         });

//         // locations
//         Route::group(['prefix' => 'klant', 'as' => 'customer.'], function () {
//             Route::get('/', App\Http\Livewire\Customer\Customers::class)->name('customers');
//             Route::get('/bekijken/{customer}', App\Http\Livewire\Customer\CustomerView::class)->name('customer-view');
//             Route::get('/bewerken/{customer}', App\Http\Livewire\Customer\CustomerForm::class)->name('customer-edit');
//             Route::get('/nieuw', App\Http\Livewire\Customer\CustomerForm::class)->name('customer-create');
//         });

//         Route::group(['prefix' => 'medewerker', 'as' => 'user.'], function () {
//             Route::get('/', App\Http\Livewire\Employee\Users::class)->name('employees');
//             Route::get('/bekijken/{user}', App\Http\Livewire\Employee\UserView::class)->name('employee-view');
//             Route::get('/bewerken/{user}', App\Http\Livewire\Employee\UserForm::class)->name('employee-edit');
//         });

//         // Deliveries
//         Route::group(['prefix' => 'levering', 'as' => 'delivery.'], function () {
//             Route::get('/', App\Http\Livewire\Delivery\DeliveryDashboard::class)->name('delivery-dashboard');
//             Route::get('/zoek', App\Http\Livewire\Delivery\Deliveries::class)->name('deliveries');
//             Route::get('/bekijken/{delivery}', App\Http\Livewire\Delivery\DeliveryView::class)->name('delivery-view');
//             Route::get('/bewerken/{delivery}', App\Http\Livewire\Delivery\DeliveryForm::class)->name('delivery-edit');
//             Route::get('/nieuw', App\Http\Livewire\Delivery\DeliveryForm::class)->name('delivery-create');
//         });

//         // locations
//         Route::group(['prefix' => 'opslaglocatie', 'as' => 'location.'], function () {
//             Route::get('/', App\Http\Livewire\Location\Locations::class)->name('locations');
//             Route::get('/bekijken/{location}', App\Http\Livewire\Location\LocationView::class)->name('location-view');
//             Route::get('/bewerken/{location}', App\Http\Livewire\Location\LocationForm::class)->name('location-edit');
//         });

//         Route::group(['prefix' => 'rapportages', 'as' => 'report.'], function () {
//             Route::group(['prefix' => 'waarde', 'as' => 'value.'], function () {
//                 Route::get('/voorraadmaten', App\Http\Livewire\Report\StockSize::class)->name('stock-size');
//             });
//         });

//         Route::group(['prefix' => 'voorraadwijzigen', 'as' => 'changestock.'], function () {
//             Route::get('/', App\Http\Livewire\Stock\ChangeStock::class)->name('changestock');
//         });

//         Route::group(['prefix' => 'acties', 'as' => 'action.'], function () {
//             Route::get('/', App\Http\Livewire\Actions\Actions::class)->name('actions');
//         });
//     });

//     Route::group(['middleware' => 'can:isAdmin'], function () {

//     });
// });

// Route::resource("editor", App\Http\Controllers\CKEditorController::class);

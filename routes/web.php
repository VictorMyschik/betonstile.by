<?php

use App\Forms\MrPriceEditForm;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\MrBaseController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
  return view('welcome');
});

Auth::routes();

Route::get('/admin', [AdminController::class, 'index'])->name('admin_page');

Route::get('/', [MrBaseController::class, 'index'])->name('welcome');
Route::get('/faq', [MrBaseController::class, 'faqPage'])->name('faq_page');
Route::get('/contact', [MrBaseController::class, 'contactPage'])->name('contact_page');
Route::post('/feedback', [MrBaseController::class, 'feedback'])->name('feedback');// отправка почты
Route::get('/portfolio', [MrBaseController::class, 'portfolioPage'])->name('portfolio_page');

// Статьи
Route::get('/articles', [ArticlesController::class, 'list'])->name('article_listarticles');
Route::get('/articles/classification_beton', [ArticlesController::class, 'classificationBeton'])->name('classification_beton');
Route::get('/articles/ukladka_plitki', [ArticlesController::class, 'ukladkaPlitki'])->name('ukladka_plitki');
Route::get('/articles/fasadnaja', [ArticlesController::class, 'fasadnaja'])->name('fasadnaja');
Route::get('/articles/pro_fundament', [ArticlesController::class, 'proFundament'])->name('pro_fundament');
Route::get('/articles/tverdenie_betona', [ArticlesController::class, 'tverdenieBetona'])->name('tverdenie_betona');
Route::get('/articles/zasita_betona', [ArticlesController::class, 'zasitaBetona'])->name('zasita_betona');
Route::get('/articles/bruschatka', [ArticlesController::class, 'bruschatka'])->name('bruschatka');

// Catalog
Route::get('/catalog', [CatalogController::class, 'catalogList'])->name('catalog_list_page');
Route::get('/catalog/zabor', [CatalogController::class, 'zaborPage'])->name('zabor_page');
Route::get('/catalog/malarh', [CatalogController::class, 'malarhPage'])->name('malarh_page');
Route::get('/catalog/block', [CatalogController::class, 'blockPage'])->name('block_page');
Route::get('/catalog/vorota', [CatalogController::class, 'vorotaPage'])->name('vorota_page');
Route::get('/catalog/trotuar', [CatalogController::class, 'trotuarPage'])->name('trotuar_page');
Route::get('/catalog/oblicovka', [CatalogController::class, 'oblicovkaPage'])->name('oblicovka_page');
Route::get('/catalog/forms', [CatalogController::class, 'formsPage'])->name('forms_page');

// Admin
Route::group(['middleware' => ['auth']], function() {
  Route::match(['get', 'post'], '/admin/zabor', [AdminController::class, 'zaborPage'])->name('admin_zabor_page');
  Route::match(['get', 'post'], '/admin/blok', [AdminController::class, 'blokPage'])->name('admin_blok_page');

  Route::match(['get', 'post'], '/admin/new/{price_id}/kind/{kind}/submit', [MrPriceEditForm::class, 'submitForm'])->name('admin_price_form_submit');
  Route::match(['get', 'post'], '/admin/new/{price_id}/kind/{kind}/edit', [MrPriceEditForm::class, 'getFormBuilder'])->name('admin_price_form_edit');

  // delete price
  Route::get('/admin/{price_id}/delete', [AdminController::class, 'deleteById'])->name('admin_delete_by_id');

  // Очистка кеша
  Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    //composer dump-autoload --optimize
    return back();
  })->name('clear');
});


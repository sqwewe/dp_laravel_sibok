<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MyPlaceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/subs', 'MyPlaceController@subs')->name('subs');

require __DIR__ . '/auth.php';


Route::get('register', [RegisteredUserController::class])->name('register');

Route::get('/index', 'MyPlaceController@main')->name('main');
Route::get('/event', 'MyPlaceController@event')->name('event');
// Route::get('/storeroom','MyPlaceController@storeroom')->name('storeroom');
Route::get('/storeroom', 'ChartController@index')->name('storeroom');

// Админ
Route::get('/admin', 'AdminController@main')->name('admin');


// Журналы
Route::delete('/admin/{journal}', 'AdminController@destroy')->name('admin_journal.delete');
Route::get('/admin/journal/{id}', 'AdminController@editJournal')->name('admin.edit-journal');
Route::post('/admin/journal/{id}/update', 'AdminController@UpdateJournal')->name('admin.update-journal');
Route::post('/admin/journal', 'AdminController@store_Journal')->name('admin.store_Journal');
Route::get('/admin/journal', 'AdminController@create_Journal')->name('admin.create_Journal');
// Подписки ///////////////////////////////////////////////////
Route::delete('/admin/subs/{subscrib}', 'AdminController@destroySubscribs')->name('admin_subscribs.delete');
Route::get('/admin/subscrib/{id}', 'AdminController@editSubscrib')->name('admin.edit-subscribs');
Route::post('/admin/subscrib/{id}/update', 'AdminController@UpdateSubscrib')->name('admin.update-Subscrib');
Route::post('/admin/subscrib', 'AdminController@store_Subscrib')->name('admin.store_Subscrib');
Route::get('/admin/subscrib', 'AdminController@create_Subscrib')->name('admin.create_Subscrib');
// Склад ///////////////////////////////////////////////////
Route::delete('/admin/storeroom/{storerooms}', 'AdminController@destroy_Storeroom')->name('admin_storerooms.delete');
Route::get('/admin/storeroom/{id}', 'AdminController@editStoreroom')->name('admin.edit-storerooms');
Route::post('/admin/storeroom/{id}/update', 'AdminController@UpdateStoreroom')->name('admin.update-storerooms');
Route::post('/admin/storeroom', 'AdminController@store_Storeroom')->name('admin.store_Storeroom');
Route::get('/admin/storeroom', 'AdminController@create_Storeroom')->name('admin.create_Storeroom');
// Списание ///////////////////////////////////////////////////
Route::delete('/admin/dismiss/{dismissfull}', 'AdminController@destroy_dismiss')->name('admin_dismissfull.delete');
Route::get('/admin/dismissfull/{id}', 'AdminController@editdismissfull')->name('admin.edit-dismissfull');
Route::post('/admin/dismissfull/{id}/update', 'AdminController@Updatedismissfull')->name('admin.update-dismissfull');
Route::post('/admin/dismissfull', 'AdminController@store_dismissfull')->name('admin.store_dismissfull');
Route::get('/admin/dismissfull', 'AdminController@create_dismissfull')->name('admin.create_dismissfull');
// Подписчики ///////////////////////////////////////////////////
Route::delete('/admin/subscriber/{subscriber}', 'AdminController@destroy_subscriber')->name('admin_subscriber.delete');
Route::get('/admin/subscriber/{id}', 'AdminController@editsubscriber')->name('admin.edit-subscriber');
Route::post('/admin/subscriber/{id}/update', 'AdminController@Updatesubscriber')->name('admin.update-subscriber');
Route::post('/admin/subscriber', 'AdminController@store_subscriber')->name('admin.store_subscriber');
Route::get('/admin/subscriber', 'AdminController@create_subscriber')->name('admin.create_subscriber');
////////////////////////////////////////////////////////////////
Route::post('/index/event', 'MyPlaceController@storeE')->name('event.storeE');
Route::get('/index/event', 'MyPlaceController@createE')->name('index.createE');
Route::post('/index/event_journal', 'MyPlaceController@storeEJ')->name('event_journal.storeEJ');
Route::get('/index/event_journal', 'MyPlaceController@createEJ')->name('index.createEJ');
Route::post('/index/sold', 'MyPlaceController@storeS')->name('sold.storeS');
Route::get('/index/sold', 'MyPlaceController@createS')->name('index.createS');
// Журналы на мероприятие //////////////////////////////////////////////////////
Route::delete('/admin/event_journal/{event_journal}', 'AdminController@destroy_event_journal')->name('admin_event_journals_full.delete');

Route::get('/index/event/{id}', 'MyPlaceController@editevent')->name('index.edit-event');
Route::post('/index/event/{id}/update', 'MyPlaceController@Updateevent')->name('index.update-event');
Route::get('/index/event_journal/{id}', 'MyPlaceController@editevent_journal')->name('index.edit-event_journal');
Route::post('/index/event_journal/{id}/update', 'MyPlaceController@Updateevent_journal')->name('index.update-event_journal');


// Архив//////////////////////////////////////////////////////////
Route::get('/arhiv', 'AuthorController@arhiv')->name('arhiv');
Route::get('/arhiv/search', 'AuthorController@search')->name('search');
// Route::get('/arhiv/searchD', 'AuthorController@searchD')->name('searchD');

Route::post('/arhiv/author', 'AuthorController@store')->name('author.store');
Route::get('/arhiv/author', 'AuthorController@create')->name('arhiv.create');
Route::get('/arhiv/author/{id}', 'AuthorController@editAuthor')->name('arhiv.edit-author');
Route::post('/arhiv/author/{id}/update', 'AuthorController@UpdateAuthor')->name('arhiv.update-author');
Route::post('/arhiv/designer', 'AuthorController@storeD')->name('designer.storeD');

Route::get('/arhiv/designer', 'AuthorController@createD')->name('arhiv.createD');
Route::get('/arhiv/designer/{id}', 'AuthorController@editDesigner')->name('arhiv.edit-designer');
Route::post('/arhiv/designer/{id}/update', 'AuthorController@UpdateDesigner')->name('arhiv.update-designer');

Route::post('/arhiv/Child', 'AuthorController@storeChild')->name('Child.storeChild');
Route::get('/arhiv/Child', 'AuthorController@createChild')->name('arhiv.createChild');
Route::get('/arhiv/Child/{id}', 'AuthorController@editChild')->name('arhiv.edit-Child');
Route::post('/arhiv/Child/{id}/update', 'AuthorController@UpdateChild')->name('arhiv.update-Child');


Route::delete('/arhiv/{author}', 'AuthorController@destroy')->name('arhiv.delete');

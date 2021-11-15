<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArchdeconaryController;
use App\Http\Controllers\ChurchController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;


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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/*archideconaries croutes*/
Route::get('church/archideconaries/bunyore', [ArchdeconaryController::class, 'bunyore'])->name('bunyore');
Route::get('church/archideconaries/ekwanda', [ArchdeconaryController::class, 'ekwanda'])->name('ekwanda');
Route::get('church/archideconaries/esiandumba', [ArchdeconaryController::class, 'esiandumba'])->name('esiandumba');
Route::get('church/archideconaries/kakamega', [ArchdeconaryController::class, 'kakamega'])->name('kakamega');
Route::get('church/archideconaries/eshiamboko', [ArchdeconaryController::class, 'eshiamboko'])->name('eshiamboko');
Route::get('church/archideconaries/soy', [ArchdeconaryController::class, 'soy'])->name('soy');
Route::get('church/archideconaries/maseno', [ArchdeconaryController::class, 'index'])->name('maseno');
Route::get('church/archideconaries/kiminini', [ArchdeconaryController::class, 'kiminini'])->name('kiminini');

/*church routes*/
Route::get('/', [ChurchController::class, 'index'])->name('index');
Route::get('church/about-us', [ChurchController::class, 'about'])->name('about.church');
Route::get('church/history', [ChurchController::class, 'history'])->name('history');
Route::get('church/governance', [ChurchController::class, 'governance'])->name('governance');
Route::get('church/events', [ChurchController::class, 'event'])->name('church.events');

/*departments Controller*/
Route::get('church/departments/kayo', [DepartmentsController::class, 'kayo'])->name('kayo');
Route::get('church/departments/kama', [DepartmentsController::class, 'kama'])->name('kama');
Route::get('church/departments/mothers-union', [DepartmentsController::class, 'mothers_union'])->name('mothers-union');
Route::get('church/departments/children-ministry', [DepartmentsController::class, 'children_ministry'])->name('children-ministry');
Route::get('church/departments/education', [DepartmentsController::class, 'education'])->name('education');
Route::get('church/departments/tee', [DepartmentsController::class, 'tee'])->name('tee');
Route::get('church/departments/music', [DepartmentsController::class, 'music'])->name('music');

/*admin routes */
Route::get('administrator/', [AdminController::class, 'index'])->name('index');
Route::get('administrator/layouts/home', [AdminController::class, 'home'])->name('home');
Route::get('administrator/layouts/about', [AdminController::class, 'about'])->name('about');
Route::get('administrator/layouts/events', [AdminController::class, 'event'])->name('event');

/*event routes*/
Route::post('create_event', [EventController::class, 'store'])->name('new_event');

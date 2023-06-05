<?php

use Illuminate\Http\Response;
use App\Models\Demande;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisiteController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\DemandeurController;
use App\Http\Controllers\CalendrierController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SendingController;
use App\Http\Controllers\ConsultingController;

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

Route::get('consultation', [ConsultingController::class, 'consult'])->name('consult');
Route::post('consultation-execute', [ConsultingController::class, 'GetDemand'])->name('consult.execute');

Route::resource('forms', FormController::class);

// Route::get('formulaire', [ReseauController::class, 'reseaux']);


// Route::post('store', [SendingController::class, 'store']);
Route::resource('data', SendingController::class);


Route::get('/download', function(Request $request){
    $file = public_path()."/sbeeDoc.pdf";

    $headers = array(
        'Content-Type: sbee/pdf',
    );

    return response()->download($file, "SBEE_DOC.pdf", $headers);
});

Route::get('/dashboard', function () {

    if (Auth::check()) {
        if (Auth::user()->is_admin == 0) {
            if (Auth::user()->role == 'SBEE') {
                return view('agentsbee.dashboard');
            } elseif (Auth::user()->role == 'CONTRELEC') {
                return view('agentcont.indexcont');
            }
        }else {
            return view('admin.index');
        }
    }
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function () {

    Route::get('/', [AdminController::class, 'index'])->name('index');

    Route::get('/downloadPdf/{id}', [DemandeController::class, 'downloadPdf'])->name('downloadPdf');

    Route::resource('users', UserController::class);

    Route::resource('demandes', DemandeController::class);
    Route::resource('demandeur', DemandeurController::class);
});

Route::middleware(['auth', 'agentsbee'])->name('agentsbee.')->prefix('agentsbee')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/demandes/downloadPdf/{id}', [DemandeController::class, 'downloadPdf'])->name('downloadPdf');
    Route::get('/demandes/viewPdf/{id}', [DemandeController::class, 'viewPdf'])->name('viewPdf');

    Route::resource('users', UserController::class);
    Route::resource('demandes', DemandeController::class);
    Route::resource('demandeur', DemandeurController::class);
    Route::resource('visites', VisiteController::class);
    Route::resource('calendrier', CalendrierController::class);

    Route::delete('demandes_mass_destroy', [DemandeController::class, 'massDestroy'])->name('demandes.mass_destroy');
    Route::post('calendrierAjax', [CalendrierController::class, 'ajax']);
});

require __DIR__ . '/auth.php';

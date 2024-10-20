<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;
use App\Http\Controllers\AdminController;





Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'redirect']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');




    Route::get('/search', [AdminController::class, 'search_data'])->name('search.route');


    Route::get('/Add_doctor_view',[AdminController::class,'addview']);
    Route::post('/upload_doctor', [AdminController::class, 'upload'])->middleware('auth');


    Route::post('/appoinment', [HomeController::class, 'appoinment'])->middleware('auth');
    Route::get('/myappointment', [HomeController::class, 'myappointment']);

    Route::post('/appoint', [HomeController::class, 'appoint'])->name('appoint');
    Route::get('/appoint', [HomeController::class, 'showAppointmentForm']);

    Route::get('cancel_appoint/{id}', [HomeController::class, 'cancel_appoint']);
    Route::get('/showappointment', [AdminController::class, 'showappointment']);
    Route::get('/approved/{id}', [AdminController::class, 'approved']);
    Route::get('/Cancled/{id}', [AdminController::class, 'Cancled']);
    Route::get('/deletedoctor/{id}', [AdminController::class, 'deletedoctor']);
    Route::get('/updatedoctor/{id}', [AdminController::class, 'updatedoctor']);
    Route::post('/editdoctor/{id}', [AdminController::class, 'editdoctor']);
    Route::get('/showdoctor', [AdminController::class, 'showdoctor']);


    Route::get('/elwkhay', [HomeController::class, 'elwkhay']);
    Route::get('/matega',     [HomeController::class, 'matega']);
    Route::get('/eldahmani',  [HomeController::class, 'eldahmani']);





    Route::get('/w_alazam', [HomeController::class, 'alazam']);
    Route::get('/w_algalb', [HomeController::class, 'algalb']);
    Route::get('/w_sadrya', [HomeController::class, 'sadrya']);
    Route::get('/w_aljehazh', [HomeController::class, 'aljehazh']);
    Route::get('/w_aoayadmoya', [HomeController::class, 'aoayadmoya']);
    Route::get('/w_bpholter', [HomeController::class, 'bpholter']);
    Route::get('/w_children', [HomeController::class, 'children']);
    Route::get('/w_ecg', [HomeController::class, 'ecg']);
    Route::get('/w_Ent', [HomeController::class, 'ent']);
    Route::get('/w_eyes', [HomeController::class, 'eyes']);
    Route::get('/w_gayene', [HomeController::class, 'gayene']);
    Route::get('/w_hadesealwlada', [HomeController::class, 'hadese']);
    Route::get('/w_jerahachildren', [HomeController::class, 'jerahachildren']);
    Route::get('/w_jraha_g', [HomeController::class, 'jeraha_g']);
    Route::get('/w_jerahtalsamna', [HomeController::class, 'jerahtalsamna']);
    Route::get('/w_mnazeratfal', [HomeController::class, 'mnazeratfal']);
    Route::get('/w_msalik', [HomeController::class, 'msalik']);
    Route::get('/w_mnazer', [HomeController::class, 'mnazer']);
    Route::get('/w_jerah_msalik', [HomeController::class, 'w_jerah_msalik']);
    Route::get('/w_majhod', [HomeController::class, 'w_majhod']);


    Route::get('/m_alazam', [HomeController::class, 'm_alazam']);
    Route::get('/m_algalb', [HomeController::class, 'm_algalb']);
    Route::get('/m_sadrya', [HomeController::class, 'm_sadrya']);
    Route::get('/m_algalb_eko', [HomeController::class, 'm_algalb_eko']);
    Route::get('/m_skin', [HomeController::class, 'm_skin']);
    Route::get('/m_suga', [HomeController::class, 'm_suga']);
    Route::get('/m_children', [HomeController::class, 'm_children']);
    Route::get('/m_Ent', [HomeController::class, 'm_Ent']);
    Route::get('/m_eyes', [HomeController::class, 'm_eyes']);
    Route::get('/m_gayene', [HomeController::class, 'm_gayene']);
    Route::get('/m_gastara', [HomeController::class, 'm_gastara']);
    Route::get('/m_msalik', [HomeController::class, 'm_msalik']);
    Route::get('/m_albatna', [HomeController::class, 'm_albatna']);
    Route::get('/m_aljeraha', [HomeController::class, 'm_aljeraha']);
    Route::get('/m_alasab', [HomeController::class, 'm_alasab']);




    Route::get('/D_alazam', [HomeController::class, 'D_alazam']);
    Route::get('/D_algalb', [HomeController::class, 'D_algalb']);
    Route::get('/D_shuga', [HomeController::class, 'D_shuga']);
    Route::get('/D_g_helth', [HomeController::class, 'D_g_helth']);
    Route::get('/D_skin', [HomeController::class, 'D_skin']);
    Route::get('/D_gayene', [HomeController::class, 'D_gayene']);
    Route::get('/D_batna', [HomeController::class, 'D_batna']);
    Route::get('/D_jraha_g', [HomeController::class, 'D_jraha_g']);
    Route::get('/D_msalik', [HomeController::class, 'D_msalik']);
    Route::get('/D_foot_h', [HomeController::class, 'D_foot_h']);
    Route::get('/D_Ent', [HomeController::class, 'D_Ent']);
    Route::get('/D_eyes', [HomeController::class, 'D_eyes']);
    Route::get('/D_ashea', [HomeController::class, 'D_ashea']);
    Route::get('/D_children', [HomeController::class, 'D_children']);
    Route::get('/D_askhsayatfal', [HomeController::class, 'D_askhsayatfal']);




    Route::get('lang/{locale}', function ($locale) {
        if (in_array($locale, ['en', 'ar'])) {
            session()->put('locale', $locale);
        }
        return redirect()->back();
    });





});











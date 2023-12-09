<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\MedicineListController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserController; 


Route::middleware(['auth'])->group(function () {

    Route::resource('medicines', MedicineListController::class);


    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/userlist', [UserListController::class, 'index'])->name('userlist.index');
    Route::get('/medicinelist', [MedicineListController::class, 'index'])->name('medicinelist.index');
    
    // Route MedicalRecordController untuk medicalrecord
    Route::get('/medicalrecord', [MedicalRecordController::class, 'index'])->name('medicalrecord.index');
    Route::get('/medicalrecord/create', [MedicalRecordController::class, 'create'])->name('medicalrecord.create');
    Route::post('/medicalrecord', [MedicalRecordController::class, 'store'])->name('medicalrecord.store');
    Route::get('/medicalrecord/{medicalRecord}/edit', [MedicalRecordController::class, 'edit'])->name('medicalrecord.edit');
    Route::delete('/medicalrecord/{medicalRecord}', [MedicalRecordController::class, 'destroy'])->name('medicalrecord.destroy');
    Route::put('/medicalrecord/{medicalRecord}', [MedicalRecordController::class, 'update'])->name('medicalrecord.update');

    Route::get('/dashboard/doctor', [DashboardController::class, 'index'])->name('dashboard.doctor');
    Route::get('/dashboard/patient', [DashboardController::class, 'index'])->name('dashboard.patient');
    

    Route::get('/userprofile', [UserProfileController::class, 'index'])->name('userprofile.index');

    // //userlist
    Route::get('/userlist/{userId}', [UserListController::class, 'show'])->name('userlist.show');
    Route::delete('/userlist/{userId}', 'UserListController@destroy')->name('userlist.destroy');




    // Rute User
    Route::group(['prefix' => 'user'], function () {
        // Contoh route untuk menampilkan profil pengguna
        Route::get('/user/{userId}', [UserController::class, 'show'])->name('user.show');
        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/store', [UserController::class, 'store'])->name('user.store');
        Route::get('/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/{user}', [UserController::class, 'update'])->name('user.update');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    });

    Route::get('/medicinelist', [MedicineListController::class, 'index'])->name('medicinelist.index');
    Route::get('/medicinelist/create', [MedicineListController::class, 'create'])->name('medicinelist.create');
    Route::post('/medicinelist', [MedicineListController::class, 'store'])->name('medicinelist.store');
    Route::get('/medicinelist/{medicineId}/edit', [MedicineListController::class, 'edit'])->name('medicinelist.edit');
    Route::put('/medicinelist/{medicineId}', [MedicineListController::class, 'update'])->name('medicinelist.update');
    Route::delete('/medicinelist/{medicineId}', [MedicineListController::class, 'destroy'])->name('medicinelist.destroy');

    // Route::resource('/medicinelist', MedicineListController::class);


});




// MedicalRecord
Route::group(['middleware' => ['auth', 'role:doctor']], function () {
    Route::get('/medicalrecord', [MedicalRecordController::class, 'index'])->name('medicalrecord.index');
    Route::get('/medicalrecord/{medicalRecord}/edit', [MedicalRecordController::class, 'edit'])->name('medicalrecord.edit');
    Route::delete('/medicalrecord/{medicalRecord}', [MedicalRecordController::class, 'destroy'])->name('medicalrecord.destroy');
    Route::put('/medicalrecord/{medicalRecord}', [MedicalRecordController::class, 'update'])->name('medicalrecord.update');
    Route::post('medicalrecord/store', [MedicalRecordController::class, 'store'])->name('medicalrecord.store');
    Route::get('/medicalrecord/create', [MedicalRecordController::class, 'create'])->name('medicalrecord.create');
});
// routes/web.php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// Add your other routes here
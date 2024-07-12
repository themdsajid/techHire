<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompnyControler;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdduserController;
use App\Http\Controllers\UserswCcontroler;
use App\Http\Controllers\PersonalinfoController;
use App\Http\Controllers\AcadamyController;
use App\Http\Controllers\EmployeeinfoController;

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

Route::middleware(['auth', 'role:admin,employee,company'])->group(function () {
    Route::get('/admin', [AdminController::class, 'adminload'])->name('admin.index');
    Route::get('add/compny', [AdminController::class, 'loadcopny'])->name('admin.add_company');

    Route::get('admin/add', [AdminController::class, 'addcompny'])->name('admin.addcompny');

    Route::post('save/company', [AdminController::class, 'store'])->name('save.company');
    Route::get('/compny/{id}', [AdminController::class, 'loadedit'])->name('edit.compny');

    Route::get('view/compny{id}', [AdminController::class, 'viewcompny'])->name('view.compny');

    Route::put('update/{id}', [AdminController::class, 'editcompny'])->name('company.update');
    //model


    Route::delete('compny/delite/{id}', [AdminController::class, 'destroyc'])->name('compny.delite');

    // User add//

    Route::get('admin/employeelist', [AdduserController::class, 'loaduser'])->name('admin.userview');

    Route::get('admin/addemployee', [AdduserController::class, 'adduser'])->name('admin.addemployee');

    Route::post('admin/add', [AdduserController::class, 'store'])->name('admin.save');

    Route::get('emp/edit/{id}', [AdduserController::class, 'editloads'])->name('emp.edit');



    Route::put('employe/update/{id}', [AdduserController::class, 'update'])->name('employe.update');

    Route::delete('delite/{id}', [AdduserController::class, 'distory'])->name('employe.del');

    Route::get('view/users/{id}', [AdduserController::class, 'viewusresu'])->name('view.users');


    // persnalinfo Route

    Route::get('admin/personalinfo', [PersonalinfoController::class, 'loadpernalinfo'])->name('admin.personalinfo');

    Route::post('save/info', [PersonalinfoController::class, 'savepenal'])->name('save.info');
    Route::get('view/info', [PersonalinfoController::class, 'loadparnalinfo'])->name('view.personalinfo_view');
    Route::get('view/pernalinfo/{id}', [PersonalinfoController::class, 'viewparnaldela'])->name('view.pernalinfo');

    Route::get('parnalinfo/edit/{id}', [PersonalinfoController::class, 'parnalinfiedit'])->name('parnalinfo.edit');

    Route::put('info/update/{id}', [PersonalinfoController::class, 'updateinfo'])->name('info.update');
    Route::delete('info/del{id}', [PersonalinfoController::class, 'deliteinfo'])->name('info.del');



    // Acadamy route

    Route::get('admin/educationinfo', [AcadamyController::class, 'loadacdamy'])->name('admin.educationinfo');

    Route::post('save/edu', [AcadamyController::class, 'store'])->name('save.edu');

    Route::get('academic_list/view', [AcadamyController::class, 'viewlist'])->name('academic_list.view');

    Route::get('ademic/view/{id}', [AcadamyController::class, 'fulldetials'])->name('ademic.view');

    Route::get('academic/edit/{id}', [AcadamyController::class, 'editacademy'])->name('academic.edit');





    // add employee route
    Route::get('employee/dasborad', [EmployeeinfoController::class, 'loaddasborad'])->name('employee.index');

    Route::post('employee/save', [EmployeeinfoController::class, 'storeemap'])->name('employee.save');

    Route::get('view/details', [EmployeeinfoController::class, 'loademployement'])->name('view.details');

    Route::get('view/emplyer/{user_id}', [EmployeeinfoController::class, 'viewemplyer'])->name('view.emplyer');

    Route::get('employee/edit/{user_id}', [EmployeeinfoController::class, 'editemploter'])->name('employee.edit');

    Route::put('employee/update/{user_id}', [EmployeeinfoController::class, 'updateEmployee'])->name('employee.update');




    Route::get('admin/employmentinfo', [EmployeeinfoController::class, 'loademp'])->name('admin.employmentinfo');

    Route::get('/company', [CompnyControler::class, 'compnyload'])->name('company.index');
    Route::get('user/userview', [UserswCcontroler::class, 'loadusers'])->name('user.userview');

    Route::get('users/view/{id}', [UserswCcontroler::class, 'viewusers'])->name('users.view');

    //My-Profile

Route::get('myProfile', [EmployeeinfoController::class, 'employeeProfile'])->name('myProfile');

});



// Route::get('/dashboard', function () {
//     return view('dashboard');

// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__ . '/auth.php';

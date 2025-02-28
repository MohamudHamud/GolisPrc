<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentsRegController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AcademicYearController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TakeAttendanceFormController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AcademicRegistrationController;
use App\Http\Controllers\roleController;
use App\Http\Controllers\ViewAttendenceController;
use App\Http\Controllers\userController;
use App\Http\Controllers\ProjectTableController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\visitorsController;

use App\Models\Semester;

use App\Http\Controllers\RequestFormController;



// Route::get('/' ,[AuthController::class, 'frontend']);
// frontend/about-us




Route::get('/', function () {
    return view('frontend.indexHome');
    });

    // Route::get(' /requist-form', function () {
    //     return view('requist-form/form');
    //     });
Route::get('/requist-form', [RequestFormController::class, 'index']);;

Route::post('/request/store', [RequestFormController::class, 'store'])->name('request.store');

Route::get('/login' ,[AuthController::class, 'login']);

Route::post('/Auth' ,[AuthController::class, 'Auth_login']);

Route::get('logOut' ,[AuthController::class, 'logOut']);



Route::group(['middleware' => 'userAdmin'], function () {

 Route::get('/dashboard' ,[DashboardController::class, 'index'])->name('dashboard');
//  Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/roles', [roleController::class, 'List']);
    Route::get('/roles/add', [roleController::class, 'add']);
    Route::post('/roles/add', [roleController::class, 'insert']);
    Route::get('/roles/edit/{id}', [roleController::class, 'edit']);
    Route::post('/roles/edit/{id}', [roleController::class, 'update']);
    Route::get('/roles/delete/{id}', [roleController::class, 'delete']);

    //Users
    Route::get('/Users/user', [userController::class, 'user']);
    Route::get('/Users/Add', [userController::class, 'Add']);
    Route::post('/Users/Add', [UserController::class, 'insert']);
    Route::get('/Users/edit/{id}', [UserController::class, 'edit']);
    Route::post('/Users/edit/{id}', [UserController::class, 'update']);
    Route::get('/Users/delete/{id}', [UserController::class, 'delete']);
    


    Route::get('/projects', [ProjectTableController::class, 'index']);
    Route::get('/projects/add', [ProjectTableController::class, 'create']);
    Route::post('/projects/add', [ProjectTableController::class, 'store']);
    Route::get('/projects/edit/{id}', [ProjectTableController::class, 'edit']);
    Route::post('/projects/edit/{id}', [ProjectTableController::class, 'update']);
    Route::get('/projects/delete/{id}', [ProjectTableController::class, 'destroy']);

    //visitors
    Route::get('/visitors', [visitorsController::class, 'index']);
    Route::get('/visitors/delete/{id}', [visitorsController::class, 'destroy']);

 

    // Route::get('/Attendence/portal', function () {
    // return view('Attendence.portal');
    // });
    
    
    // Route::get('/Attendence/ViewAttendence', [ViewAttendenceController::class, 'TakeAttendanceForm'])->name('Attendence.ViewAttendence');
    // Route::post('filter/getstudents', [ViewAttendenceController::class, 'getstudents'])->name('filter.getstudents');

    
    // Route::get('/Attendence/TakeAttendence', [TakeAttendanceFormController::class, 'TakeAttendanceForm'])->name('Attendence.TakeAttendence');
    // Route::post('/Attendence/TakeAttendence', [TakeAttendanceFormController::class, 'filterAttendance'])->name('filter.attendance');
    // Route::post('store/attendance', [TakeAttendanceFormController::class, 'storeAttendance'])->name('store.attendance');


  
    
    // Route::get('/get-students', [TakeAttendanceFormController::class, 'getStudents']);
    
    // Route::get('/take-attendance', [TakeAttendanceFormController::class, 'TakeAttendanceForm'])->name('take.attendance');
    
    
    
    // Route::get('Students/add', [StudentsRegController::class, 'Add'])->name('Students.add');
    // Route::post('Students/add', [StudentsRegController::class, 'store']);
    // Route::get('students/index', [StudentsRegController::class, 'index'])->name('students.index');
    // Route::get('Students/List', [StudentsRegController::class, 'index'])->name('Students.List');
    // Route::delete('/delete/{id}', [StudentsRegController::class, 'destroy'])->name('Students.delete');
    // // Show the edit form for a student
    // Route::get('Students/edit/{id}', [StudentsRegController::class, 'edit'])->name('Students.edit');
    
    // // Handle the update request
    // Route::Post('Students/edit/{id}', [StudentsRegController::class, 'update'])->name('Students.List');
    
    
    // // Route::get('Students/import', function () {
    // //     return view('Students.import');
    // // });
    
    
    // Route::post('/import-csv', [StudentsRegController::class, 'importCsv'])->name('import.csv');
    
    // Route::post('Students/storeCSV', [StudentsRegController::class, 'importCsv'])->name('students.import');
    
    // // // Route::post('students/storeCSV', [StudentsRegController::class, 'importCsv'])->name('Students.import');
    // // Route::Post('/students/import', [StudentsRegController::class, 'import'])->name('Students.import');
    
    
    
    
    // Route::get('academic-year/create', [AcademicYearController::class, 'create'])->name('academic-year.create');
    // Route::post('/academic-year/store', [AcademicYearController::class, 'store'])->name('academic-year.store');
    

    
    // Route::get('Department/create', function () {
    //     return view('Department.create');
    // });
    // Route::post('academic/register', [AcademicRegistrationController::class, 'register'])->name('academic.register');
    
    
    // // Route::get('academic-year/view', function () {
    // //     return view('academic-year.view');
    // // });
    // Route::get('academic-year/view', [AcademicYearController::class, 'show'])->name('academic-year.view');
    // Route::get('academic-year/{id}/edit', [AcademicYearController::class, 'edit'])->name('academic-year.edit');
    // Route::post('academic-year/{id}/update', [AcademicYearController::class, 'update'])->name('academic-year.update');
    // Route::delete('academic-year/{id}', [AcademicYearController::class, 'destroy'])->name('academic-year.destroy');
    
    
    // Route::get('Department/view', [AcademicRegistrationController::class, 'showForm'])->name('academic.register.form');
    // // web.php (routes file)
    
    // Route::get('Department/edit/{id}', [AcademicRegistrationController::class, 'edit'])->name('Department.edit');
    // Route::put('Department/edit/{id}', [AcademicRegistrationController::class, 'update'])->name('Department.update');
    // Route::delete('Department/delete/{id}', [AcademicRegistrationController::class, 'destroy'])->name('Department.delete');
    
    
    
    // Route::get('Semester/view', [SemesterController::class, 'index'])->name('Semester.view');
    // Route::post('semesters/store', [SemesterController::class, 'store'])->name('semesters.store');
    // Route::delete('semesters/delete/{id}', [SemesterController::class, 'destroy'])->name('semesters.delete');
    
    
    // Route::get('semesters/edit/{id}', [SemesterController::class, 'edit'])->name('semesters.edit');
    // Route::put('semesters/update/{id}', [SemesterController::class, 'update'])->name('semesters.update');
    
    // Route::get('Subjects/view', [SubjectController::class, 'index'])->name('Subjects.view');
    // Route::post('/Subjects/store', [SubjectController::class, 'store'])->name('Subjects.store');
    // Route::put('/Subjects/{id}', [SubjectController::class, 'update'])->name('Subjects.update');
    // Route::delete('/Subject/delete/{id}', [SubjectController::class, 'destroy'])->name('Subjects.delete');
    
    // Route::post('subject/assign', [SubjectController::class, 'assignSubject'])->name('subject.assign');
    
    
 

});

require __DIR__.'/auth.php';

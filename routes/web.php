<?php

use App\Http\Livewire\Admin\AdminAddBookComponent;
use App\Http\Livewire\Admin\AdminAddSectionComponent;
use App\Http\Livewire\Admin\AdminAddStudentComponent;
use App\Http\Livewire\Admin\AdminAddTeacherComponent;
use App\Http\Livewire\Admin\AdminBooksComponent;
use App\Http\Livewire\Admin\AdminClassComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminEditSectionComponent;
use App\Http\Livewire\Admin\AdminEditStudentComponent;
use App\Http\Livewire\Admin\AdminEditTeacherComponent;
use App\Http\Livewire\Admin\AdminSectionComponent;
use App\Http\Livewire\Admin\AdminStudentComponent;
use App\Http\Livewire\Admin\AdminTeacherComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\User\UserDashboardComponent;
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

/* Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/',HomeComponent::class);

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
 //   return view('dashboard');
//})->name('dashboard');

//for user or student
Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');
    
});

//for Admin
Route::middleware(['auth:sanctum','verified','authadmin'])->group(function(){
   Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');   

   Route::get('/admin/class',AdminClassComponent::class)->name('admin.class');
   Route::get('/admin/section',AdminSectionComponent::class)->name('admin.section');
   Route::get('/admin/section/add',AdminAddSectionComponent::class)->name('admin.addsection');
   Route::get('/admin/section/edit/{sections_id}',AdminEditSectionComponent::class)->name('admin.editsection');

   Route::get('/admin/teacher/add',AdminAddTeacherComponent::class)->name('admin.addteacher');
   Route::get('/admin/teacher',AdminTeacherComponent::class)->name('admin.teacher');  
   Route::get('/admin/teacher/edit/{teacher_id}',AdminEditTeacherComponent::class)->name('admin.editteacher');
   
   Route::get('/admin/student/add',AdminAddStudentComponent::class)->name('admin.addstudent');
   Route::get('admin/student',AdminStudentComponent::class)->name('admin.student');
   Route::get('/admin/student/edit/{student_id}',AdminEditStudentComponent::class)->name('admin.editstudent');

   Route::get('/admin/book/add',AdminAddBookComponent::class)->name('admin.addbook');
   Route::get('/admin/books',AdminBooksComponent::class)->name('admin.books');
});

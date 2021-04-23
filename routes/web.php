<?php

use App\Http\Livewire\Admin\AddSectionComponent;
use App\Http\Livewire\Admin\AdminAddBookComponent;
use App\Http\Livewire\Admin\AdminAddStudentComponent;
use App\Http\Livewire\Admin\AdminAddTeacherComponent;
use App\Http\Livewire\Admin\AdminAddUserComponent;
use App\Http\Livewire\Admin\AdminBooksComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminTeacherComponent;
use App\Http\Livewire\Admin\ClassComponent;
use App\Http\Livewire\Admin\EditSectionComponent;
use App\Http\Livewire\Admin\SectionComponent;
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
   Route::get('/admin/class',ClassComponent::class)->name('admin.class');
   Route::get('/admin/section',SectionComponent::class)->name('admin.section');
   Route::get('/admin/section/add',AddSectionComponent::class)->name('admin.addsection');
   Route::get('/admin/section/edit/{sections_id}',EditSectionComponent::class)->name('admin.editsection');

   Route::get('/admin/teacher/add',AdminAddTeacherComponent::class)->name('admin.addteacher');
   Route::get('/admin/teacher',AdminTeacherComponent::class)->name('admin.teacher');
   
   Route::get('/admin/student/add',AdminAddStudentComponent::class)->name('admin.addstudent');
   Route::get('/admin/add/student',AdminAddUserComponent::class)->name('admin.adduser');

   Route::get('/admin/book/add',AdminAddBookComponent::class)->name('admin.addbook');
   Route::get('/admin/books',AdminBooksComponent::class)->name('admin.books');
});

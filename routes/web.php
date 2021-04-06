<?php

use App\Http\Livewire\Admin\AddSectionComponent;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminTeacherComponent;
use App\Http\Livewire\Admin\ClassComponent;
use App\Http\Livewire\Admin\EditSectionComponent;
use App\Http\Livewire\Admin\SectionComponent;
use App\Http\Livewire\Admin\StudentRegistrationComponent;
use App\Http\Livewire\Admin\TeacherRegistrationComponent;
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
   Route::get('/admin/students/registration',StudentRegistrationComponent::class)->name('admin.studentregister');
   Route::get('/admin/teacher/registration',TeacherRegistrationComponent::class)->name('admin.teacherregister');
   Route::get('/admin/class',ClassComponent::class)->name('admin.class');
   Route::get('/admin/section',SectionComponent::class)->name('admin.section');
   Route::get('/admin/section/add',AddSectionComponent::class)->name('admin.addsection');
   Route::get('/admin/section/edit/{sections_id}',EditSectionComponent::class)->name('admin.editsection');
   Route::get('/admin/teacher',AdminTeacherComponent::class)->name('admin.teacher');
});

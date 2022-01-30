<?php

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

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();

Route::group(['middleware' => 'auth'], function (){
    // Dashboard
Route::get('manager/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'showDashboard'])->name('view.dashboard');

// Task
Route::get('manager/addtask', [App\Http\Controllers\Admin\TasksController::class, 'addTask'])->name('add.task');
Route::post('manager/storetask', [App\Http\Controllers\Admin\TasksController::class, 'store'])->name('store.task');
Route::get('manager/mytasks', [App\Http\Controllers\Admin\TasksController::class, 'showTasks'])->name('view.tasks');
Route::get('manager', [App\Http\Controllers\Admin\TasksController::class, 'taskHome'])->name('home.manager');

// Profile
Route::get('manager/profile', [App\Http\Controllers\Admin\ProfileSettingController::class, 'profile'])->name('view.profile');

// Ticket
Route::get('manager/addticket', [App\Http\Controllers\Admin\TicketController::class, 'addTicket'])->name('add.ticket');
Route::get('manager/tickets', [App\Http\Controllers\Admin\TicketController::class, 'showTickets'])->name('view.tickets');

// Module
Route::get('manager/addmodule', [App\Http\Controllers\Admin\ModuleController::class, 'addModule'])->name('add.module');
Route::post('manager/storemodule', [App\Http\Controllers\Admin\ModuleController::class, 'store'])->name('store.module');
Route::get('manager/modules', [App\Http\Controllers\Admin\ModuleController::class, 'showModules'])->name('view.modules');

// Project
Route::get('manager/addproject', [App\Http\Controllers\Admin\ProjectController::class, 'addProject'])->name('add.project');
Route::post('manager/storeproject', [App\Http\Controllers\Admin\ProjectController::class, 'store'])->name('store.project');
Route::get('manager/projects', [App\Http\Controllers\Admin\ProjectController::class, 'showProjects'])->name('view.projects');
Route::get('manager/project/details/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'showDetails'])->name('view.projectsingleview');
Route::get('manager/project/edit/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'editProject']);
Route::post('manager/project/update/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'update']);
Route::post('manager/project/statusupdate/{status}/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'updateStatus']);
Route::get('manager/project/delete/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'destroy']);

// Employees
Route::get('manager/addemployee', [App\Http\Controllers\Admin\EmployeesController::class, 'addEmployee'])->name('add.employee');
Route::post('manager/storeemployee', [App\Http\Controllers\Admin\EmployeesController::class, 'store'])->name('store.employee');
Route::get('manager/employees', [App\Http\Controllers\Admin\EmployeesController::class, 'showEmployees'])->name('view.employees');
   
// Index
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


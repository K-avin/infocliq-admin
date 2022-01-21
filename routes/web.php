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
    return view('welcome');
});
Auth::routes();

Route::get('manager/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'showDashboard'])->name('view.dashboard');

Route::get('manager/addtask', [App\Http\Controllers\Admin\TasksController::class, 'addTask'])->name('add.task');
Route::get('manager/mytasks', [App\Http\Controllers\Admin\TasksController::class, 'showTasks'])->name('view.tasks');

Route::get('manager/setting', [App\Http\Controllers\Admin\ProfileSettingController::class, 'profileSetting'])->name('view.profile-setting');

Route::get('manager/addticket', [App\Http\Controllers\Admin\TicketController::class, 'addTicket'])->name('add.ticket');
Route::get('manager/tickets', [App\Http\Controllers\Admin\TicketController::class, 'showTickets'])->name('view.tickets');

Route::get('manager/addmodule', [App\Http\Controllers\Admin\ModuleController::class, 'addModule'])->name('add.module');
Route::get('manager/modules', [App\Http\Controllers\Admin\ModuleController::class, 'showModules'])->name('view.modules');

Route::get('manager/addproject', [App\Http\Controllers\Admin\ProjectController::class, 'addProject'])->name('add.project');
Route::get('manager/projects', [App\Http\Controllers\Admin\ProjectController::class, 'showProjects'])->name('view.projects');
Route::get('manager/project/details', [App\Http\Controllers\Admin\ProjectController::class, 'showDetails'])->name('view.projectsingleview');

Route::get('manager/addemployee', [App\Http\Controllers\Admin\EmployeesController::class, 'addEmployee'])->name('add.employee');
Route::get('manager/employees', [App\Http\Controllers\Admin\EmployeesController::class, 'showEmployees'])->name('view.employees');



Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

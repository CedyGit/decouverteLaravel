<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\StatController;
use GuzzleHttp\Middleware;

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

// 
Route::get('/', [UsersController::class, 'welcome'])->middleware('AlreadyLoggedIn');

// redirection vers Admin
Route::get('/admin/home', [UsersController::class, 'home'])->middleware('isLoggedIn')->name('admin/home');
// Users (Admin and RH)
Route::get('/user', [UsersController::class, 'usersP'])->middleware('isLoggedIn')->name('user');
Route::get('/user', [UsersController::class, 'tableUser'])->name('user')->middleware('isLoggedIn');
// edit User page and update
Route::get('/editUser/{id}', [UsersController::class, 'editPage'])->name('userEdit')->middleware('isLoggedIn');
Route::put('/update-user/{id}', [UsersController::class, 'updateUser'])->name('update-user');
// User details
Route::get('/userDetails', [UsersController::class, 'userDetailsPage'])->name('userDetails');
Route::get('userDetails/{id}', [UsersController::class, 'userDetails'])->name('userDetails');
// login and registration
Route::get('/login',[UsersController::class, 'login'])->name('login')->middleware('AlreadyLoggedIn');
Route::get('/registration', [UsersController::class, 'registration'])->name('registration')->middleware('AlreadyLoggedIn');
// redirect after login 
// redirection vers RH toute operations
Route::get('/dashboard', [UsersController::class, 'dashboard'])->middleware('isLoggedIn')->name('dashboard'); 

Route::post('register-user', [UsersController::class, 'registerUser'])->name('register-user');
Route::post('login-user', [UsersController::class, 'loginUser'])->name('login-user');
// Logout
Route::get('logout', [UsersController::class, 'logout'])->name('logout');
// redirect
// personnel/employés
Route::get('/employe', [EmployeController::class, 'employe'])->name('employe');
Route::get('/NewEmploye', [EmployeController::class, 'newEmploye'])->name('NewEmploye');
// nouveau employé
Route::post('/register-employe', [EmployeController::class, 'registerEmploye'])->name('register-employe');
// tableau
Route::get('/employe', [EmployeController::class, 'tableEmploye'])->name('employe')->middleware('isLoggedIn');
// contrats page
Route::get('/cdd', [EmployeController::class, 'cdd'])->name('cdd');
Route::get('/cdi', [EmployeController::class, 'cdi'])->name('cdi');
Route::get('/stagiaire', [EmployeController::class, 'stagiaire'])->name('stagiaire');
// contrat Cdd
Route::get('/cdd', [EmployeController::class, 'CDdetermine'])->name('cdd')->middleware('isLoggedIn');
// contrat cdI
Route::get('/cdi', [EmployeController::class, 'CDIndetermine'])->name('cdi')->middleware('isLoggedIn');
// contrat Stagiaire
Route::get('/stagiaire', [EmployeController::class, 'Cstagiaire'])->name('stagiaire')->middleware('isLoggedIn');
// statistique
Route::get('/dashboard', [StatController::class, 'stat'])->name('stat')->middleware('isLoggedIn');
Route::get('/dashboard', [StatController::class, 'total'])->name('stat')->middleware('isLoggedIn');
// barre de recherche
Route::get('/chercher', [EmployeController::class, 'rechercher'])->name('chercher')->middleware('isLoggedIn');

// details
Route::get('/details', [EmployeController::class, 'details'])->name('details');
Route::get('details/{id}', [EmployeController::class, 'employeDetails'])->name('details');
// supprimer
Route::get('delete-employe/{id}', [EmployeController::class, 'delete'])->name('delete-employe')->middleware('isLoggedIn');
// modifier employe
Route::get('/editEmploye/{id}', [EmployeController::class, 'editPage'])->name('editEmploye');
// update
Route::put('/update-employe/{id}', [EmployeController::class, 'updateEmploye'])->name('update-employe');

// conge form the Page
Route::get('/congeForm', [EmployeController::class, 'congeForm'])->name('congeForm')->middleware('isLoggedIn');
// Conger tableau 
Route::get('/congeEmploye', [EmployeController::class, 'congeEmploye'])->name('congeEmploye')->middleware('isLoggedIn');
// all conges tables
Route::get('/congeEmploye', [EmployeController::class, 'allConge'])->name('congeEmploye')->middleware('isLoggedIn');
// conge redirection within Id to congeForm
Route::get('congeForm/{id}', [EmployeController::class, 'congeId'])->name('congeForm')->middleware('isLoggedIn');
// register conge
Route::post('/register-conge', [EmployeController::class, 'newConge'])->name('register-conge')->middleware('isLoggedIn');
// conger par classement
Route::get('/congePayer', [EmployeController::class, 'congeP'])->name('congePayer')->middleware('isLoggedIn');
Route::get('/congePayer', [EmployeController::class, 'congePayer'])->name('congePayer');
// conge sans solde
Route::get('/congeSansSolde', [EmployeController::class, 'congeSS'])->name('congeSansSolde')->middleware('isLoggedIn');
Route::get('/congeSansSolde', [EmployeController::class, 'congeSansSolde'])->name('congeSansSolde');
// delete conge
Route::get('/delete-conge/{id}', [EmployeController::class, 'deleteConge'])->name('delete-conge')->middleware('isLoggedIn');
// attestation
Route::get('/attestation', [EmployeController::class, 'attestationPage'])->name('attestation');
// attestion id
Route::get('attestation/{id}', [EmployeController::class, 'attestationId'])->name('attestation');
// Edit and Update Conge
Route::get('editConge/{id}', [EmployeController::class, 'editCongePage'])->name('editConge');
Route::put('/update-conge/{id}', [EmployeController::class, 'updateConge'])->name('update-conge');
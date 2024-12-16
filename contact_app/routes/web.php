<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

//Route that will return a list of contacts
Route::get(
    '/contacts',
    [
        ContactController::class,
        'index'
    ]
)->name('contacts.index');

//Route that will allow the user to create a contact. This will get the form
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');

//Route that will store the contact in the database. This will submit the data that was entered in the form.
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');

//Route that will show the details of a specific contact
Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');

//Route that will show the edit form
Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');

//Route that will process the updated values of the contact
Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('contacts.update');
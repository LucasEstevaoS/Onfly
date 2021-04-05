<?php
use App\Http\Controllers\{
    DespesaController
};


use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function(){ 
    Route::any('/despesas/search', [DespesaController::class, 'search' ])->name('despesas.search');

    Route::get('/despesas/create', [DespesaController::class, 'create' ])->name('despesas.create');

    Route::put('/despesa/{id}', [DespesaController::class, 'update' ])->name('despesa.update');

    Route::get('/despesa/edit/{id}', [DespesaController::class, 'edit' ])->name('despesa.edit');

    Route::delete('/despesa/{id}', [DespesaController::class, 'destroy' ])->name('despesa.destroy');

    Route::get('/despesa/{id}', [DespesaController::class, 'show' ])->name('despesa.show');

    Route::post('/despesas', [DespesaController::class, 'store' ])->name('despesas.store');

    Route::get('/despesas', [DespesaController::class, 'index' ])->name('despesas.index');

});


Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';
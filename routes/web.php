<?php

use App\Http\Controllers\AgentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BankController;
use App\Http\Controllers\CustomerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!  agentViewPage
|
*/

// Route::get('/', function () {
//     // return view('layouts.back-end.app');
//     return view('layouts.index');
//     // return view('layouts.back-end.partials.agent.agent_view');
// });


Route::get('/', [AgentController::class, 'index'])->name('dashboard');

Route::get('/agent_list',[AgentController::class,'agentViewPage'])->name('agent_list');
Route::prefix('agent')->group(function () {
    Route::post('/store_agent_data',[AgentController::class,'storeAgent']);
    Route::get('/getData',[AgentController::class,'agentgetData']);
    Route::get('/edit/{agent_id}',[AgentController::class,'edit'])->name('customer.edit');
    Route::post('/update/{agent_id}',[AgentController::class,'update']);
    Route::get('/remove/{agent_id}',[AgentController::class,'removeAgent']);
});
Route::put('/agent-update-status/{id}/{status}',[AgentController::class,'statusUpdate']);


/// Bank
Route::get('/bank-list',[BankController::class, 'index'])->name('bank.list');
Route::post('/bank-details-store/',[BankController::class, 'store'])->name('bank.details.store');
Route::get('/bank-details-show/',[BankController::class, 'show'])->name('bank.details.show');
Route::delete('/bank-details-delete/{id}',[BankController::class, 'destroy'])->name('bank.details.destroy');
Route::get('/bank-details-edit/{id}',[BankController::class, 'edit'])->name('bank.details.edit');
Route::put('/bank-details-update/{id}',[BankController::class, 'update'])->name('bank.details.update');
Route::get('/data-search',[BankController::class, 'search'])->name('data.search');

// Customer
Route::get('/customer-list',[CustomerController::class, 'index'])->name('all.customer');
Route::get('/customer',[CustomerController::class, 'create'])->name('customer');
Route::get('/customer-order-history',[CustomerController::class, 'customerOderHistory'])->name('customer.oder.history');
Route::get('/single-customer-order-history',[CustomerController::class, 'singleCustomerOderHistory'])->name('single.customer.oder.history');
Route::get('/all-agent-customer-list',[CustomerController::class, 'allAgentCustomerList'])->name('all.agent.customer.list');
Route::get('/all-agent-sale-commission-report',[CustomerController::class, 'allAgentSaleCommissionReport'])->name('all.agent.sale.commission.report');
Route::get('/single-agent-sale-commission-report',[CustomerController::class, 'singleAgentSaleCommissionReport'])->name('single.agent.sale.commission.report');
Route::get('/all-agent-sale-commission-summary',[CustomerController::class, 'allAgentSaleCommissionSummary'])->name('all.agent.sale.commission.summary');
Route::get('/agent-sale-report',[CustomerController::class, 'agentSaleReport'])->name('agent.sale.report');


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('layouts.back-end.customer.customer-view');
    }

    public function create(){
        return view('layouts.back-end.customer.customer');
    }

    public function customerOderHistory(){
        return view('layouts.back-end.customer.customer-oder-history');
    }

    public function singleCustomerOderHistory(){
        return view('layouts.back-end.customer.single-customer-oder-history');
    }

    public function allAgentCustomerList(){
        return view('layouts.back-end.customer.all-agent-customer-list');
    }

    public function allAgentSaleCommissionReport(){
        return view('layouts.back-end.customer.all-agent-sale-com-report');
    }

    public function singleAgentSaleCommissionReport(){
        return view('layouts.back-end.customer.single-agent-sale-com-report');
    }

    public function allAgentSaleCommissionSummary(){
        return view('layouts.back-end.customer.all-agent-sale-com-summary');
    }

    public function agentSaleReport(){
        return view('layouts.back-end.customer.agent-sale-report');
    }
}

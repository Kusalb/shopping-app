<?php

namespace App\Http\Controllers;


use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');
    }


    public function index()
    {
        $customers= Customer::all();
        Log::debug("customers retrived", ['size'=> count($customers)]);
        Log::info("sucessfully retrived");


        return view('customer.index',compact('customers'));
    }
    public function show($id)
    {
        return view('customer.show', ['customer'=>Customer::findOrFail($id)]);
    }

    public function create()
    {
        return view('customer.create');
    }
    public function store(Request $request)
    {
        $customer = Customer::create($request->all());
        return redirect ('customer/show/'.$customer->customer_id);
    }
}

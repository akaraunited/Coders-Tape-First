<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list(){
        $customers = [
            'John Doe',
            'Bill the builder',
            'John Legend',
            'Another Name'
        ];
    
        return view('internals.customers',[
            'customers' => $customers,
        ]);
    }
}

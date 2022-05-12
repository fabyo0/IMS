<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractsController extends Controller
{
    //shows the all contracts
    public function index()
    {
      return view('contracts.index');
    }

    public function newContract()
    {
        return view('contracts.new-contract');
    }
}

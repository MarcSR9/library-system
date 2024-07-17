<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;

class LoanController extends Controller
{
    public function index()
    {
        return response()->json(Loan::with(['user', 'book'])->get());
    }

    public function show($id)
    {
        return response()->json(Loan::with(['user', 'book'])->find($id));
    }
}

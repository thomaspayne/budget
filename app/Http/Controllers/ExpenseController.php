<?php

namespace App\Http\Controllers;

use App\Expense;

class ExpenseController extends Controller
{
    public function index() {
        $expenses = Expense::all();
        //dd($expenses);
        return view('expenses.index', compact('expenses'));
    }

    public function show(Expense $expense) {
        return view('expenses.show', compact('expense'));
    }

}

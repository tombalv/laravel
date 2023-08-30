<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function showForm(Request $request)
    {
        $sum = $request->session()->get('sum', '');
        // $sum = $request->session()->pull('sum', '');
        return view('sum.form', ['sum' => $sum]);
    }
    public function submitForm(Request $request)
    {
        $x = $request->input('x');
        $y = $request->input('y');
        $sum = $x + $y;
        // $request->session()->put('sum', $sum);
        // $request->session()->flash('message', 'Sum calculated successfully!');
        return redirect()
        ->route('sum-form')
        ->with('sum', $sum);
    }
}
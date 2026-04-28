<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payroll;

class PayrollController extends Controller
{
    public function index()
    {
        $payrolls = Payroll::all();
        return view('payroll.index', compact('payrolls'));
    }

    public function create()
    {
        return view('payroll.create');
    }

    public function store(Request $request)
    {
        Payroll::create($request->all());
        return redirect()->route('payroll.index');
    }

    public function edit($id)
    {
        $payroll = Payroll::findOrFail($id);
        return view('payroll.edit', compact('payroll'));
    }

    public function update(Request $request, $id)
    {
        $payroll = Payroll::findOrFail($id);
        $payroll->update($request->all());
        return redirect()->route('payroll.index');
    }

    public function destroy($id)
    {
        $payroll = Payroll::findOrFail($id);
        $payroll->delete();
        return redirect()->route('payroll.index');
    }
}

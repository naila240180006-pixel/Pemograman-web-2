<?php

namespace App\Http\Controllers;

use App\Models\Sandal;
use Illuminate\Http\Request;

class SandalController extends Controller
{
    public function index()
    {
        $sandals = Sandal::all();
        return view('sandals.index', compact('sandals'));
    }

    public function create()
    {
        return view('sandals.create');
    }

    public function store(Request $request)
    {
        Sandal::create($request->all());
        return redirect()->route('sandals.index');
    }

    public function show($id)
    {
        $sandal = Sandal::findOrFail($id);
        return view('sandals.show', compact('sandal'));
    }

    public function edit($id)
    {
        $sandal = Sandal::findOrFail($id);
        return view('sandals.edit', compact('sandal'));
    }

    public function update(Request $request, $id)
    {
        $sandal = Sandal::findOrFail($id);
        $sandal->update($request->all());
        return redirect()->route('sandals.index');
    }

    public function destroy($id)
    {
        Sandal::destroy($id);
        return redirect()->route('sandals.index');
    }
}
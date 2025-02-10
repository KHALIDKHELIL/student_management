<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\batch;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\View\View;

class batchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():view
    {
        $batches = batch::all();
        return view ('batches.index')->with('batches', $batches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():view
    {
        return view('batches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Batch::create($input);
        return redirect('batches')->with('flash_message', 'Batch Added!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):view
    {
        $batches = Batch::find($id);
        return view('batches.show')->with('batches', $batches);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):view
    {
        $batche = Batch::find($id);
        return view('batches.edit')->with('batches', $batche);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $batche = Batch::find($id);
        $input = $request->all();
        $batche->update($input);
        return redirect('batches')->with('flash_message', 'batch Updated!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Batch::destroy($id);
        return redirect('batches')->with('flash_message', 'Batch deleted!');

    }
}

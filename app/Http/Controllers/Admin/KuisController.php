<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\pertanyaan;
use App\Models\tambahKuis;
use Illuminate\Http\Request;

class KuisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kuis = tambahKuis::get();
        return view('admin.dashboard.listKuis', compact('kuis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dashboard.tambahKuis');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputan = $request->all();

        tambahKuis::create($inputan);
        return redirect()->route('kuis.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pertanyaanKuis = tambahKuis::findOrFail($id);
        return view('admin.dashboard.pertanyaan', compact('pertanyaanKuis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editKuis = tambahKuis::find($id);
        return view('admin.dashboard.editKuis', compact('editKuis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $editInputan = $request->all();
        tambahKuis::find($id)->update($editInputan);

        return redirect()->route('kuis.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteKuis = tambahKuis::find($id);
        $deleteKuis->delete();
        return back();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exp = Experience::all();
        return view('back-end.experience.index')->with([
            'exper' => $exp,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $exp = Experience::all();
        return view('back-end.experience.create')->with([
            'exper' => $exp,
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'paragraf_exp' => ['required', 'max:500'],
            'first_years_exp' => ['required'],
            'last_years_exp' => ['required'],
            'desc_exp' => ['required'],
            
        ]);

        $exp = new Experience();
        $exp->paragraf_exp = $request->paragraf_exp;
        $exp->first_years_exp = $request->first_years_exp;
        $exp->last_years_exp = $request->last_years_exp;
        $exp->desc_exp = $request->desc_exp;
        $exp->save();
        return redirect()->route('admin.experience.store')->with('success', 'Data Tambah Sukses ...');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $exp = Experience::findOrFail($id);
        return view('back-end.experience.detail')->with([
            'exper' => $exp,
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $exp = Experience::findOrFail($id);
        return view('back-end.experience.edit')->with([
            'exper' => $exp,
           
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $exper = Experience::findOrFail($id);

        Experience::where('id', $exper->id)
        ->update([
          'paragraf_exp' => $data['paragraf_exp'],
          'first_years_exp' => $data['first_years_exp'],
          'last_years_exp' => $data['last_years_exp'],
          'desc_exp' => $data['desc_exp'],
        
          
        ]);

        return redirect()->route('admin.experience.index')->with('success', 'Data Update Sukses ...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $exper = Experience::findOrFail($id);
        $exper->delete();

        return redirect()->route('admin.experience.index')->with('danger', 'Data Telah Dihapus ...');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $edu = Education::all();
        return view('back-end.education.index')->with([
            'educs' => $edu,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        $edu = Education::all();

        return view('back-end.education.create')->with([
            'educs' => $edu,
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'paragraf_edu' => ['required', 'max:500'],
            'desc_edu' => ['required'],
            'image_edu' => ['required', 'image', 'max:5000'],
        ]);

        $imagePath = hadleUpload('image_edu');

        $edu = new Education();
        $edu->image_edu = $imagePath;
        $edu->paragraf_edu = $request->paragraf_edu;
        $edu->desc_edu = $request->desc_edu;
        $edu->save();
        return redirect()->route('admin.education.store')->with('success', 'Data Tambah Sukses ...');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $edu = Education::findOrFail($id);

        return view('back-end.education.detail')->with([
            'educs' => $edu,
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edu = Education::findOrFail($id);

        return view('back-end.education.edit')->with([
            'educs' => $edu,
           
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $educs = Education::findOrFail($id);

        Education::where('id', $educs->id)
        ->update([
          'paragraf_edu' => $data['paragraf_edu'],
          'desc_edu' => $data['desc_edu'],
        
          
        ]);

        return redirect()->route('admin.education.index')->with('success', 'Data Update Sukses ...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $educs = Education::findOrFail($id);
        deleteFileIfExist($educs->image_edu);
        $educs->delete();

        return redirect()->route('admin.education.index')->with('danger', 'Data Telah Dihapus ...');
    }
}

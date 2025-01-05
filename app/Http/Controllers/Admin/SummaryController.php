<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Summary;
use Illuminate\Http\Request;
use File;

class SummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $summary = Summary::first();
        return view('back-end.summary.index', compact('summary'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'span_title' => ['required', 'max:100'],
            'heading_title' => ['required', 'max:100'],
            'desc_title' => ['required', 'max:5000'],
            'java' => ['required', 'max:5000'],
            'japanese' => ['required', 'max:5000'],
            'korean' => ['required', 'max:5000'],
            'arabic' => ['required', 'max:5000'],
            'russian' => ['required', 'max:5000'],
            'resume' => ['mimes:pdf,csv,text', 'max:10000'],
            // 'image' => ['required', 'image']
               
        ]);

        $summary = Summary::first();
        $resumePath = hadleUpload('resume', $summary);
        // $imagePath = hadleUpload("image", $summary);
       
        Summary::updateOrCreate( 
            ['id' => $id],
            [
                'span_title' => $request->span_title,
                'heading_title' => $request->heading_title,
                'desc_title' => $request->desc_title,
                'java' => $request->java,
                'japanese' => $request->japanese,
                'korean' => $request->korean,
                'arabic' => $request->arabic,
                'russian' => $request->russian,
                'resume' => (!empty($resumePath) ? $resumePath : $summary->resume),
                // 'image' => (!empty($imagePath) ? $imagePath : $summary->image),
            ]
        );

        return redirect()->back()->with('success', 'Data Update Sukses ... ');
    }

    public function resumeUnduh()
    {   
        $summary = Summary::first();
        return response()->download(public_path($summary->resume));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

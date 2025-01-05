<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\PortfolioItemDataTable;
use App\Http\Controllers\Controller;
use App\Models\PortfolioItem;
use Illuminate\Http\Request;

class PortfolioItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $project = PortfolioItem::all();
        return view('back-end.project.index')->with([
            'projects' => $project,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return $dataTable->render('back-end.project.create');

        $project = PortfolioItem::all();

        return view('back-end.project.create')->with([
            'projects' => $project,
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'paragraf_portfolio' => ['required', 'max:500'],
            'desc_portfolio' => ['required'],
            'button_portfolio' => ['url'],
            'image_portfolio' => ['required', 'image', 'max:5000'],
        ]);

        $imagePath = hadleUpload('image_portfolio');

        $portfolioItem = new PortfolioItem();
        $portfolioItem->image_portfolio = $imagePath;
        $portfolioItem->paragraf_portfolio = $request->paragraf_portfolio;
        $portfolioItem->desc_portfolio = $request->desc_portfolio;
        $portfolioItem->button_portfolio = $request->button_portfolio;
        $portfolioItem->save();
        return redirect()->route('admin.project.store')->with('success', 'Data Tambah Sukses ...');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
        $project = PortfolioItem::findOrFail($id);

        return view('back-end.project.detail')->with([
            'project' => $project,
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $portfolioItem = PortfolioItem::findOrFail($id);

        return view('back-end.project.edit')->with([
            'portfolioItem' => $portfolioItem,
           
        ]);

        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();

        $portfolioItem = PortfolioItem::findOrFail($id);

        // if($request->image_portfolio == ""){
        //     $photoName = $portfolioItem->image_portfolio;
        // }else{
        //     $photoName = $data['image_portfolio']->getClientOriginalName() . '-' . time(). '.' . $data['image_portfolio']->extension();
        //     $data['image_portfolio']->move(public_path('/uploads'), $photoName);
        //     if($portfolioItem->image_portfolio == NULL){

        //     }else{
        //         $filePath = "/uploads/".$photoName;

        //         return $filePath;
        //     }
        // }

        PortfolioItem::where('id', $portfolioItem->id)
        ->update([
          'paragraf_portfolio' => $data['paragraf_portfolio'],
        //   'image_portfolio' => $photoName,
          'desc_portfolio' => $data['desc_portfolio'],
          'button_portfolio' => $data['button_portfolio'],
          
        ]);

        return redirect()->route('admin.project.index')->with('success', 'Data Update Sukses ...');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $portfolioItem = PortfolioItem::findOrFail($id);
        deleteFileIfExist($portfolioItem->image_portfolio);
        $portfolioItem->delete();

        return redirect()->route('admin.project.index')->with('danger', 'Data Telah Dihapus ...');
    }
}

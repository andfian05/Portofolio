<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Experience;
use App\Models\PortfolioItem;
use App\Models\Summary;
use Illuminate\Http\Request;

class TampilanController extends Controller
{
    public function index(){

        $summary = Summary::first();
        return view('pageone',
            compact(
                'summary'
            ));
    }

    public function showEducation(){
        $edu = Education::all();
        return view('front-end.detail-page.pendidikan', compact(
            'edu'
        ));
    }

    public function showExperience(){
        $exp = Experience::all();
        return view('front-end.detail-page.pengalaman', compact(
            'exp'
        ));
    }

    public function showPortfolio(){
        $project = PortfolioItem::all();
        return view('front-end.detail-page.proyek', compact(
            'project'
        ));
    }

    
}

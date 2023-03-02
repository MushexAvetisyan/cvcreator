<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\View\View;

class ResumeController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return View
     */
    public function index(): View
    {
        return view('resume-ref', ['user' => auth()->user()]);
    }


    public function download()
    {
        $pdf = PDF::loadView('resume-ref', ['user' => auth()->user()]);
        return $pdf->download('resume.pdf');
    }
}

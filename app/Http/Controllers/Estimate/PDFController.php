<?php

namespace App\Http\Controllers\Estimate;

use App\Http\Controllers\Controller;
use App\Models\Estimate;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    // function to display preview
    public function preview($id)
    {
        $estimate = Estimate::find($id);
        return view('preview', compact('estimate'));
    }

    public function generatePDF($id)
    {
        $estimate = Estimate::find($id);
        $pdf = PDF::loadView('pdf', compact('estimate'));
        return $pdf->download('Webdiler. Смета №' . $id . ' от ' . $estimate->created_at->format('d.m.Y') . '.pdf');
    }
//    public function generateAllPDF(Request $request)
//    {
//        foreach ($request->CheckedIds as $checkedId)
//        {
//            $pdf = $this->generatePDF($checkedId);
//        }
//    }
}

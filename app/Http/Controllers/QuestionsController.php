<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\QuestionsImport;

class QuestionsController extends Controller
{
    public function upload()
    {
        return view('questions.upload');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx,csv'
        ]);

        Excel::import(new QuestionsImport, $request->file('file'));

        return redirect()->back()->with('success', 'Questions imported successfully.');
    }
}








<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function index() 
    {
        return view('front.feedback', [
            'title' => 'Curhatan Mahasiswa',
            'categories' => Category::take(12)->get()
        ]);
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'category' => 'required|string|max:20',
            'to' => 'required|string|max:20',
            'name' => 'nullable|string|max:255',
            'description' => 'required|string|min:10'
        ]);

        Feedback::create($validatedData);

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}

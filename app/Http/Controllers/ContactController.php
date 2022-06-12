<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }
    public function contact(Request $request)
    {
        $insert = DB::table('support_tickets')->insert([
            'email' => $request->email,
            'subject' => $request->subject,
            'content' => $request->content,
            'date' => date('Y-m-d'),
            'active' => 1
        ]);
        if ($insert) {
            return redirect()->back()->with('success', 'تم ارسال طلبك بنجاح');
        }
    }
}

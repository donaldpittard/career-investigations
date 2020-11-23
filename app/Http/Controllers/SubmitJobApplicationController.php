<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;

class SubmitJobApplicationController extends Controller
{
    public function __invoke(Request $request) {
        echo $request->name;
        
        return redirect('/review');
    }
}
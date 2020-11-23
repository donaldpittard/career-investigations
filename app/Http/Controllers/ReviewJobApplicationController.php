<?php

namespace App\Http\Controllers;

use App\Mail\JobApplicationSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PHPMailer\PHPMailer\PHPMailer;

class ReviewJobApplicationController extends Controller
{
    public function __invoke(Request $request)
    {
        return Mail::to(config('app.mail.to'))
            ->send(new JobApplicationSubmitted());
    }
}
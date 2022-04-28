<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PoliciesController extends Controller
{
    public function privacyPolicy()
    {
        return view('pages.legal.privacy');
    }

    public function termsAndConditions()
    {
        return view('pages.legal.terms');
    }

    public function refundPolicy()
    {
        return view('pages.legal.refund');
    }

    public function revisionPolicy()
    {
        return view('pages.legal.revision');
    }

}


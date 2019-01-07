<?php

namespace App\Http\Controllers;

use App\Division;
use App\Service;
use App\ServiceDetails;
use App\Theme;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getFormRequest(){
        $divisions = Division::all();
        $themes = Theme::all();
        $services = Service::all();
        $services_details = ServiceDetails::all();
        return view('form_request', compact('divisions', 'themes', 'services', 'services_details'));
    }
}

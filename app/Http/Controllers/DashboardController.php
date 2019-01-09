<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\User;
class DashboardController extends Controller
{
    public function index() {
		$data = User::orderBy('id')->get();
		return view('backend.pages.dashboard.index', ['user' => $data]);
	}
}
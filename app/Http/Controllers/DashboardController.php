<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

/**
 * Summary of DashboardController
 */
class DashboardController extends Controller
{
    /**
     * Summary of index
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(User $user)
    {
        return view('dashboard.index');
    }
}
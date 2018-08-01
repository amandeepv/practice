<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;
use App\User;


class FetchController extends Controller
{
    public function index()
    {
        $role = Role::find(1);
        $role = $role->load('user');
        return $role;
    }
}

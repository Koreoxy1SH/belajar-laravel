<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function index () {
        echo "Hello from controller";
    }

    function world_message() {
        echo "World from controller";
    }
}

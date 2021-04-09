<?php

namespace App\Http\Controllers;

class DeployController extends Controller
{
    public function index()
    {
        $output = shell_exec("git pull 2>&1");
        echo '<pre>';
        echo $output;
    }
}

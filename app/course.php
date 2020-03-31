<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    public function index()
    {
        return view('user.courseTable');
    }
}

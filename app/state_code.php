<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class state_code extends Model
{
    //
    protected $table = "state_code";

    public function index()
    {
        $books = state_code::all();
        return $books;
    }
}

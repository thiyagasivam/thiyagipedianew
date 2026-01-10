<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rto_details extends Model
{
    protected $table = "rto_details";

    public function index()
    {
        $books = rto_details::all();
        return $books;
    }

    public function getDataByCode($code)
    {
        $books = rto_details::where('rto_no', 'LIKE', '%' . $code . '%')->get();
        return $books;
    }
}

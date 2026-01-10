<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\rto_details;
use App\state_code;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    //
    public function index()
    {
        $stateCode = new state_code();
        $code = $stateCode->index();
        return view('dbconn', [
            'codeData' => $code
        ]);
    }

    public function fetchData($rtoNo) {
        $rtoDetails = new rto_details();
        $books = $rtoDetails->index();
        $stateCode = new state_code();
        $stateCode = $stateCode->index();
        $input = strtoupper(substr($rtoNo, 0, 2)) . '-' . substr($rtoNo, 2);
        Log::Info("aaaaaaaa ".$input);
        $data = rto_details::where('rto_no', 'like', '%' . $input . '%')->get();
        return view('dbconn', ['data' => $data, 'codeData' => $stateCode]);
    }

    public function fetchDataByNo(Request $request) {
        $rtoDetails = new rto_details();
        $books = $rtoDetails->index();
        $stateCode = new state_code();
        $stateCode = $stateCode->index();
        $input = $request->input('search_input');
        Log::Info("aaaaaaaa ".json_decode($input));
        $data = rto_details::where('rto_no', 'like', '%' . $input . '%')->get();
        return view('dbconn', ['data' => $data, 'codeData' => $stateCode]);
    }
    
    public function handleButtonClick($state, $code) {
        Log::info("handleButtonClick lll");
        Log::info("handleButtonClick ".$state);
        $rtoDetails = new rto_details();
        $stateCode = new state_code();
        $stateCode = $stateCode->index();
        $codeData = $rtoDetails->getDataByCode($code);
        Log::Info("codecode ::: ".json_encode($code));
        return view('stateCode', [
            'data' => $codeData,
            'code' => $state,
            'codeData' => $stateCode
        ]);
    }
}
    
<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class ComController extends BaseController
{
    function objectToArray($object)
    {
        return json_decode(json_encode($object), true);
    }
    function jsonReturn($object){
        return json_encode($object,JSON_UNESCAPED_UNICODE);
    }
}

<?php

namespace DevOpsTest\Http\Controllers;

class HealthController extends Controller
{
    public function check()
    {
        return response()->json([
            'data' => 'OK'
        ], 200);
    }
}

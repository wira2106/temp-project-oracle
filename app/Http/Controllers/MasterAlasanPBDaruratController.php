<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MasterAlasanPBDaruratController extends Controller
{
    public $var;
    public function __construct() {
        $this->var = 'testing';
    }

    public function add(Request $request){
        DB::beginTransaction();
        try {
            $arr = [];
            $insert = DB::table("tbmaster_user")->insert($arr);

            DB::commit();
            return response()->json([
                'status' => 'success',
                'message' => 'Data has been successfully saved.'
            ], 200);
        } catch (Exception $e) {
            DB::rollback();
            return response()->json([
                'status' => 'failed',
                'message' => 'Failed to saved data, please try again',
                'errorMessage' => $e->getMessage()
            ], 400);
        }

    }

    public function update(Request $request){
        DB::beginTransaction();
        try {
            

            DB::commit();
            return response()->json([
                'status' => 'success',
                'message' => 'Data has been successfully saved.'
            ], 200);
        } catch (Exception $e) {
            DB::rollback();
            return response()->json([
                'status' => 'failed',
                'message' => 'Failed to saved data, please try again',
                'errorMessage' => $e->getMessage()
            ], 400);
        }

    }
    
    public function delete(Request $request){
        DB::beginTransaction();
        try {
            

            DB::commit();
            return response()->json([
                'status' => 'success',
                'message' => 'Data has been successfully saved.'
            ], 200);
        } catch (Exception $e) {
            DB::rollback();
            return response()->json([
                'status' => 'failed',
                'message' => 'Failed to saved data, please try again',
                'errorMessage' => $e->getMessage()
            ], 400);
        }

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TreatmentData;
use Illuminate\Http\Response;

class ApiController extends Controller
{
    //import data into database
    public function upload_data(){
               // DB::beginTransaction();
                DB::table('treatment_datas')->insert([
                ]);
                //DB::commit();
            return response()->json([
            'message' => "$j records successfully uploaded"
        ]);
    }
    //process upload status
    public function process_upload_status(){
        //do something
    }

    //Get data by id
    public function getdatabyid(Request $request){
        $dataid = $request->dataid;
        $employees = DB::table('treatment_datas')->select('*')
                        ->where('id', $dataid)->get();
        $response['data'] = $employees;
        return response()->json($response);
    }
    //Get data by date
    public function getdatabydate(Request $request){
        $dataid = $request->dataid;
        $employees = DB::table('treatment_datas')->select('*')
                        ->where('date', $dataid)->get();
        $response['data'] = $employees;
        return response()->json($response);
    }
    //get data by wining company
    public function getdatabycompany(Request $request){
        $dataid = $request->dataid;
        $employees = DB::table('treatment_datas')->select('*')
                        ->where('winning_company', $dataid)->get();
        $response['data'] = $employees;
        return response()->json($response);
    }
    //get data by wining company
    public function getdatabyamount(Request $request){
        $amount1 = $request->amount1;
        $amount2 = $request->amount2;
        $employees = DB::table('treatment_datas')->select('*')
                        ->whereBetween('amount',[$amount1,$amount2])->get();
        $response['data'] = $employees;
        return response()->json($response);
    }
    //get contract read status
    public function get_read_status(Request $request){
        $dataid = $request->dataid;
        $employees = DB::table('treatment_datas')->select('read_status','id')
                        ->where('id', $dataid)->get();
        $response['data'] = $employees;
        return response()->json($response);
    }
   
 
}

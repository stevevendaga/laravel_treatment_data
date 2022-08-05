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
    //============CODE FOR EXTERNAL USE=======================
    //get data by date
    public function getData_date($date){
        $data = DB::table('treatment_datas')
                ->where('date', $date)->get();
        return response()->json($data);
    }
    //get data by amount in range
    public function getData_amount($amount1,$amount2){
        $data = DB::table('treatment_datas')
                    ->whereBetween('Amount',[$amount1,$amount2])->get();
        return response()->json($data);
    }
     //get data by wining company
    public function getData_company($company){
        $data = DB::table('treatment_datas')
                ->where('Winning_company', $company)->get();
        return response()->json($data);
    }
    //get data by id for
    public function getData_Id($id){
        $data = DB::table('treatment_datas')->find($id);
        return response()->json($data);
    }
    //get contract read status (by id)
    public function get_read_status($id){
        $data=DB::table('treatment_datas')
                ->where('id', $id)->value('read_status');
        return response()->json($data);
    }
 //============END CODE FOR EXTERNAL USE=======================

    //==========CODE FOR INTERNAL USE ==================//
    //get data by id for internal use
    public function getDataId_internal(){
        $id=$_GET['id'];
        $data = DB::table('treatment_datas')
            ->where('id',$id)->get();
        return view('index',)->with('data', $data);
    }
    //get data by date
    public function getDataDate_internal(){
        $date=$_GET['date'];
        $data = DB::table('treatment_datas')
            ->where('date', $date)->get();
        return view('index',)->with('data', $data);
    }
    //get data by company
    public function getDataCompany_internal(){
        $company=$_GET['company'];
        $data = DB::table('treatment_datas')
                    ->where('Winning_company',$company)->get();
        return view('index',)->with('data', $data);
    }
     //get data by company
     public function getDataAmount_internal(){
        $amount1=$_GET['amount1'];
        $amount2=$_GET['amount2'];
        $data = DB::table('treatment_datas')
                    ->whereBetween('Amount',[$amount1,$amount2])->get();
        return view('index',)->with('data', $data);
    }
     //get data by company
     public function getDataReadStatus_internal(){
        $id=$_GET['readstatusid'];
        $data=DB::table('treatment_datas')
                ->where('id', $id)->value('read_status');
        return view('index',)->with('data', $data);
    }
//==========END CODE FOR INTERNAL USE ==================//
}

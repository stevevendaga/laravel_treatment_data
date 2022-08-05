<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Http;
use App\Imports\TreatmentsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\user_treatment;


class TreatmentsController extends Controller
{
    public $mainURL='http://127.0.0.1:800/';
    public function uploadView(){
        return view('uploadView');
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function processExcel_internal() 
    {
        Excel::import(new TreatmentsImport,request()->file('uploaded_file'));
        return redirect('/index');
    }
    public function index()
    {
        $data=DB::table('treatment_datas')->get();
        return view('index');
    }
    public function processdata(){
        //get excel data and convert to json to be used by the api
        $url='/api/treatments';
        $response =request('GET', $url, [
            'verify'  => false,
        ]);
        $data = json_decode($response);
        return redirect('index')->with('responseBody',$data);
    }
    public function getDataDate(Request $request){
        //get data by date
        $id = $_GET['date'];
        $url=$mainURL.'/api/treatments/date/'.$date;
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);
        $statusCode = $response->getStatusCode();
        $responseBody = json_decode($response->getBody(), true);
        return view('index')->with('data',$responseBody);
    }
    //get data by id
    public function getDataId(Request $request){
        $id = $_GET['id'];
        $url=$mainURL.'/api/treatments/'.$id;
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);
        $statusCode = $response->getStatusCode();
        $responseBody = json_decode($response->getBody(), true);
        return view('index')->with('data',$responseBody);
    }
    //get data by company
    public function getDataCompany(Request $request){
        $company = $_GET['company'];
        $url=$mainURL.'/api/treatments/winingcompay/'.$company;
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);
        $statusCode = $response->getStatusCode();
        $responseBody = json_decode($response->getBody(), true);
        return view('index')->with('data',$responseBody);
    }
    //get data by amount(range)
    public function getDataAmount(Request $request){
        $amount1 = $_GET['amount1'];
        $amount2 = $_GET['amount2'];
        $url=$mainURL.'/api/treatments/amount/'.$amount1.'/'.$amount2;
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);
        $statusCode = $response->getStatusCode();
        $responseBody = json_decode($response->getBody(), true);
        return view('index')->with('data',$responseBody);
    }
    //get data by amount(range)
    public function getDataReadStatus(Request $request){
        $id = $_GET['id'];
        $url=$mainURL.'/api/treatments/readstatus/'.$id;
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $url);
        $statusCode = $response->getStatusCode();
        $responseBody = json_decode($response->getBody(), true);
        return view('index')->with('data',$responseBody);
    }
    public function api_documentation(){
        return view('api_documentation');
    }
}

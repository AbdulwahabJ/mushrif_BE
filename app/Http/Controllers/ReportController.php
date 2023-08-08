<?php

namespace App\Http\Controllers;

use App\Models\ReportAnswer;
use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\PersonalAccessToken;



class ReportController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        try {
            //Validated
            // $validateReportAnswer = Validator::make($request->all(),
            // [
            //     'report_id' => 'required|integer',
            //     'question'=> 'required|string',
            //     'answers'=> 'required|string',
            //     'type'=> 'required|string',
            // ]);

            if($validateReportAnswer->fails()){
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateReportAnswer->errors()
                ], 401);
            }

            $ReportAnswer = ReportAnswer::create([
                'report_id' => $request->report_id,
                'question' => $request->question,
                'answers'=> $request->answers,
                'type'=> $request->type
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Report Created Successfully',
                'token' => $ReportAnswer->createToken("API TOKEN")->plainTextToken
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }


    public function show(Request $request){

        // Techsupervisor_id_users
        // Fieldsupervisor_id_users

        $user = auth()->user();



switch ($request->header('type')) {

    case 'record':

        if($user->isTechsupervisor()){
            $reportdata = Record::where('techsupervisor_id', $user->id )->select('id','office_number','camp_label','created_at')
            ->where('order_status','Record')->get();
        }else{
            $reportdata = Record::where('fieldsupervisor_id', $user->id )->select('id','office_number','camp_label','created_at')
            ->where('order_status','Record')->whereHas('recordAnswers')->get();
        }

        break;

    case 'ignored':
        if($user->isTechsupervisor()){
            $reportdata = Record::where('techsupervisor_id', $user->id )->select('id','office_number','camp_label','created_at')
            ->where('order_status','Ignored')->get();
        }

        break;
    default:

    if($user->isTechsupervisor()){
        $reportdata = Record::where('techsupervisor_id', $user->id )->select('id','office_number','camp_label','created_at')
        ->where('order_status','Not viewed')->get();
    }else{
        $reportdata = Record::where('fieldsupervisor_id', $user->id )->select('id','office_number','camp_label','created_at')
        ->where('order_status','Sent ')->get();
    }

        break;
}


        return response()->json([
        'data' =>$reportdata
         ]);
    }

}


// return $reportdata;
        // foreach( $reportdata as $data){
            // $id = $data->report_id;
            // $recordarray->push($report=DB::table('records')->where('techsupervisor_id', $user )->where('id', $id )->first());
        // }


         // return $request->header();
// return auth()->user();
        // $token = PersonalAccessToken::findToken($request->header("token"));
//->find($token->tokenable);

        // $report=new Reportanswer();
        // $recordarray=collect([]);

                // $reportdata = DB::table('reports_answers')->select("report_id")->get();

                   // if($user->isTechsupervisor()){
        //     $user_column= 'techsupervisor_id';

        //  }
        // else if($user->isFieldsupervisor()){
        //     $user_column= 'fieldsupervisor_id';
        // }
        // else{ return response()->json([
        //     'error' =>'user not found'
        //      ]);}

         // $reportdata = Record::where($user_column, $user->id )->select('id','office_number','camp_label')
                            // ->where('order_status',$request->header('order_status'))
                            // ->whereHas('reportAnswers')->with('reportAnswers')->get();

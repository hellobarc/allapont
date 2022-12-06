<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Avance;
use Illuminate\Support\Facades\Auth;

class TrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->input();

        $req_coment = $input['req_coment'];
        $req_dia = $input['req_dia'];
        $req_hora = $input['req_hora'];
        $req_mes = $input['req_mes'];
        $req_agno = $input['req_agno'];

        if (Auth::check())
        {

            $user_id = Auth::id();
            $current_session = $request->session()->get('current_session');

            Avance::updateOrCreate(
                ['user_id'=>$user_id,'post_session'=> $current_session],
                ['req_coment'=>$req_coment,'req_dia'=>$req_dia,'req_hora'=>$req_hora,'req_mes'=>$req_mes,'req_agno'=>$req_agno]
            );


            return Redirect::to('asesoria/trabajo')->with([
                'info' => "Created Successfully"
            ]);

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function show_form(Request $request){
        $time = time();
        $current_session = $request->session()->put('current_session',$time);
        return view('asesoria/solicitud');
    }


    public function file_upload(Request $request){

        if (Auth::check())
        {

            $user_id = Auth::id();
            $current_session = $request->session()->get('current_session');
            $file_set = [];

            $image = $request->file('file');
            $fileInfo = $image->getClientOriginalName();
            $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
            $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
            $file_name= $user_id.'-'. $current_session.'-'.time().'.'.$extension;
            $image->move(public_path('uploads/trabajo'),$file_name);

            array_push($file_set,$file_name);

            $existing_files = Avance::where('post_session', $current_session)->pluck('req_files')->first();

            $existing_files =  json_decode($existing_files);

            if(!empty( $existing_files )){
                foreach($existing_files as $existing_file){
                    array_push($file_set, $existing_file);
                }
            }

            $json_file_set =  json_encode($file_set);


            Avance::updateOrCreate(
                                    ['user_id'=>$user_id,'post_session'=> $current_session],
                                    ['req_files'=>$json_file_set]
                                );

           // $imageUpload = new Gallery;
          //  $imageUpload->original_filename = $fileInfo;
         //   $imageUpload->filename = $file_name;
          //  $imageUpload->save();
            return response()->json(['success'=>$file_name]);
        }


    }

}

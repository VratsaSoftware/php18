<?php

namespace App\Http\Controllers;

use App\Homework;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use File;

class HomeworksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeworks = Homework::where('user_id', Auth::user()->id)->get();

        return view('homeworks.index', compact('homeworks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lecture_id = request('lecture_id');
        return view('homeworks.create', compact('lecture_id'));        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file = $request->file('homework');
        $filename = $file->getClientOriginalName();
        // dd($request->file('homework'));
        $file->move('hw_files', $filename);

        $lecture_id = $request->lecture_id;

        Homework::create([
                    'filename' => $filename,
                    'user_id'   => Auth::user()->id,
                    'lecture_id' => $lecture_id,
                ]);

        //ADD SUCCESS MESSAGES HERE
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
        $homework = Homework::find($id);
        
        return view('homeworks.edit', compact('homework')); 
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
        $homework = Homework::find($id);
        $file_to_replace = $homework->filename;
        //find old file
        // $file_to_delete = public_path().'/files_folder_name/'.$filename;
        $file_to_delete = public_path().'/hw_files/'.$file_to_replace;

        //delete old file
        // File::delete($file_to_delete);
        File::delete($file_to_delete);
        
        //save new file
        $file_new = $request->file('homework');
        $filename = $file_new->getClientOriginalName();
        // dd($request->file('homework'));
        $file_new->move('hw_files', $filename);      

        $homework->update(['filename' => $filename]);
        //update db table
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete file assosiated with current homework!!!
        $homework = Homework::find($id);
        $filename = $homework->filename;
        //find file
        // $file_to_delete = public_path().'/files_folder_name/'.$filename;
        $file_to_delete = public_path().'/hw_files/'.$filename;

        //delete file
        // File::delete($file_to_delete);
        File::delete($file_to_delete);
        
        //delete hw
        $homework->delete();

        //ADD SUCCESS MESSAGES
        
    }
}

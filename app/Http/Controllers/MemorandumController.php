<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\Models\Memorandum;
use App\Models\Category;
use App\Http\Controllers\DB;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
class MemorandumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memorandum = memorandum::all();
        $category = category::all();
        if($memorandum->isNotEmpty())
        {
            
            return view('memorandum.index', ['memorandum'=>$memorandum, 'category'=>$category]);
        }
        else
        {
           return view('memorandum.creatememo');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('memorandum.creatememo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'memo_name'=>['required', 'string', 'max:255'],
        //     'memo_origin'=>['required', 'string', 'max:255'],
        //     'date_created'=>['required'],
        //     'date_recieved'=>['required'],
        //     'memo_digital_file'=>['required', 'string', 'max:255'],
        //     // 'cat_name'=>['required']
        // ]);
        $memorandum = new memorandum;
        $memorandum->memo_name=$request->memo_name;
        $memorandum->memo_origin=$request->memo_origin;
        $memorandum->date_created=$request->date_created;
        $memorandum->date_recieved=$request->date_recieved;
        $memorandum->date_recieved=$request->date_recieved;
        $memorandum->cat_id=$request->cat_id;
        if ($request->hasfile('memo_digital_file')){
            //get file name with extension
            $filenameExt=$request->file('memo_digital_file')->getClientOriginalName();
            //get just filename
            $filename=pathinfo($filenameExt, PATHINFO_FILENAME);
            //get extension
            $extension=$request->file('memo_digital_file')->getClientOriginalExtension();
            //file name
            $fileNameToStore=$filename . '_' . time() . '.' . $extension;
            $path = $request->file('memo_digital_file')->storeAs('public/memoimage/', $fileNameToStore);
        }
        else{
            $fileNameToStore="noimage.jpg";
        }
        $memorandum->memo_digital_file=$fileNameToStore;

        $memorandum->save();
        return redirect('managememorandum')->with('message', 'Created');
    }
    /**
     * Display the manage dashboard
     * 
     **/
    public function manage()
    {
        $memorandum = memorandum::all();
        $category = category::all();
        if($memorandum->isNotEmpty())
        {
            return view('memorandum.managememo', ['memorandum'=>$memorandum, 'category'=>$category]);
        }
        else
        {
            return view('memorandum.creatememo');
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
        $memorandum = memorandum::find($id);
        return view('memorandum.showmemo', ['memorandum'=>$memorandum]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $memorandum = memorandum::find($id);
        return view('memorandum.editmemo', ['memorandum'=>$memorandum]);
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
        $memorandum=memorandum::find($request->id);
        $memorandum->memo_name=$request->memo_name;
        $memorandum->memo_origin=$request->memo_origin;
        $memorandum->date_created=$request->date_created;
        $memorandum->date_recieved=$request->date_recieved;
        $memorandum->cat_id=$request->cat_id;
        if ($request->hasfile('memo_digital_file')){
            Storage::delete('/public/memoimage/'.$memorandum->memo_digital_file);
            //get file name with extension
            $filenameExt=$request->file('memo_digital_file')->getClientOriginalName();
            //get just filename
            $filename=pathinfo($filenameExt, PATHINFO_FILENAME);
            //get extension
            $extension=$request->file('memo_digital_file')->getClientOriginalExtension();
            //file name
            $fileNameToStore=$filename . '_' . time() . '.' . $extension;
            $path = $request->file('memo_digital_file')->storeAs('/public/memoimage/', $fileNameToStore);
            $memorandum->memo_digital_file=$fileNameToStore;
        }
        else{
        }
        
        $memorandum->save();

        return redirect('managememorandum')->with('message', 'Memo Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $memorandum=memorandum::find($id);
        Storage::delete('/public/memoimage/'.$memorandum->memo_digital_file);
        $memorandum->delete();
        return redirect("managememorandum");
    }
}

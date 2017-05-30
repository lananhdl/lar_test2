<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
     public function listVideo (){
    	 $data = Video::select()->get()->toArray();
        return view('manage',['data' => $data]);
    	

    }
    public function destroy($id)
    {
        $hocsinh = Video::find($id);

        $hocsinh->delete();
        return redirect()->route('manage');
    }
    public function editVideo($id)
    {   
        $data = Video::find($id) ->toArray() ;
        return view('manage',['data' => $data]);
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
        $video =  Video::find($id);
        $video->namevideo = $request->nametxt;
        $video->linkvideo = $request->linktxt;
        $video->author = $request->tacgiatxt;
        $video->created_at = new DateTime();
        $video->save();
        return redirect()->route('manage');
    }
    
  
}

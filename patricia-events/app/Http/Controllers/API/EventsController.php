<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Events;
Use Log;

class EventsController extends Controller
{
    //
    public function getAll(){
      $data = Events::get();
      return response()->json($data, 200);
    }

    public function create(Request $request){
        Events::create($request->all());
        return response()->json([
            'message' => "Successfully created",
            'success' => true
        ], 200);
    }

    public function delete($id){
      $res = Events::find($id)->delete();
      return response()->json([
          'message' => "Successfully deleted",
          'success' => true
      ], 200);
    }

    public function get($id){
      $data = Events::find($id);
      return response()->json($data, 200);
    }

    public function update(Request $request,$id){
      Events::find($id)->update($request->all());
      return response()->json([
          'message' => "Successfully updated",
          'success' => true
      ], 200);
    }
}

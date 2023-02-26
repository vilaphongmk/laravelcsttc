<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tbl_histories;
use Illuminate\Support\Facades\Validator;

class HistoryController extends Controller
{
    public function get()
    {
        try {
            $history = tbl_histories::all();

            return response()->json([
                'status' => 'success',
                'data' => $history
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' =>  $th->getMessage(),
            ], 500);
        }
    }

    public function create(Request $request)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'content' => 'required',
            ]
        );

        if ($validate->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validate->errors()
            ], 200);
        }


        try {
            tbl_histories::create([
                'content' => $request->content,
                'created_by' => $request->user()->id,
            ]);

            return response()->json([
                'status' => 'success',
                'message' =>  "ບັນທຶກຂໍ້ມູນສຳເລັດ ",
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' =>  $th->getMessage(),
            ], 500);
        }
    }

    public function update(Request $request)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'id' => 'required',
                'content' => 'required',
            ]
        );

        if ($validate->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validate->errors()
            ], 200);
        }


        try {
            tbl_histories::find($request->id)->update([
                'content' => $request->content,
                'updated_by' => $request->user()->id,
            ]);

            return response()->json([
                'status' => 'success',
                'message' =>  "ແກ້ໄຂ ຂໍ້ມູນສຳເລັດ ",
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' =>  $th->getMessage(),
            ], 500);
        }
    }

    public function delete($id)
    {
        try {
            tbl_histories::find($id)->delete();

            return response()->json([
                'status' => 'success',
                'message' =>  "ລົບຂໍ້ມູນສຳເລັດ ",
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' =>  $th->getMessage(),
            ], 500);
        }
    }
}

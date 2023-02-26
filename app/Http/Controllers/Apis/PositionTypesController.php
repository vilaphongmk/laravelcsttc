<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\tbl_position_types;
use Illuminate\Support\Facades\Validator;

class PositionTypesController extends Controller
{
    public function get()
    {
        try {
            $history = tbl_position_types::all();

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
                'position_type_name' => 'required|string|max:50',

            ]
        );

        if ($validate->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validate->errors()
            ], 200);
        }


        try {
            tbl_position_types::create([
                'position_type_name' => $request->position_type_name,
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
                'position_type_name' => 'required|string|max:50',
            ]
        );

        if ($validate->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validate->errors()
            ], 200);
        }


        try {
            tbl_position_types::find($request->id)->update([
                'position_type_name' => $request->position_type_name,
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
            tbl_position_types::find($id)->delete();

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

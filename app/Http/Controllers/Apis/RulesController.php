<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\tbl_rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RulesController extends Controller
{
    public function get()
    {
        try {
            $rules = tbl_rules::all();

            return response()->json([
                'status' => 'success',
                'data' => $rules
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
                'title' => 'required|string|max:255',
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
            tbl_rules::create([
                'title'    => $request->title,
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
                'title' => 'required|string|max:255',
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
            tbl_rules::find($request->id)->update([
                'title'    => $request->title,
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
            tbl_rules::find($id)->delete();

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

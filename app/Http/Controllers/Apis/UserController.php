<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Models\tbl_cities;
use App\Models\tbl_provinces;
use App\Models\tbl_roles;
use App\Models\tbl_users;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public $path = 'uploads/images/users/';

    private function _uploadFile($file, $first_name)
    {

        if (!$file) return;

        $type = strtolower($file->getClientOriginalExtension());
        $name = $first_name . "_" . Carbon::now() . "." . $type;
        $path = $this->path;
        $full_part = $this->path . $name;

        try {
            $file->move($path, $name);
            return $full_part;
        } catch (\Throwable $th) {
            return null;
        }
    }

    private function _insertUser($user)
    {
        try {
            $result =  tbl_users::create([
                'prefix' => $user->prefix,
                'user_type' => $user->user_type,
                'login_status' => $user->login_status,
                'students_id' => $user->students_id,
                'image_path' => $user->image_path,
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'date_of_birth' => $user->date_of_birth,
                'slogan' => $user->slogan,
                'village_present' => $user->village_present,
                'village_birth' => $user->village_birth,
                'city_present_id' => $user->city_present_id,
                'province_present_id' => $user->province_present_id,
                'city_birth_id' => $user->city_birth_id,
                'province_birth_id' => $user->province_birth_id,
                'email' => $user->email,
                'password' => bcrypt($user->password),
                'whatsapp' =>  $user->whatsapp,
                'telephone1' => $user->telephone1,
                'telephone2' => $user->telephone2,
                'facebook' => $user->facebook,
                'line' => $user->line,
                'youtube' => $user->youtube,
            ]);

            return  $result;
        } catch (\Throwable $th) {
            return $th;
        }
    }

    private function _insertRole($user, $user_id)
    {
        try {
            $result =   tbl_roles::create([
                'user_id' => $user_id,
                'news' => $user->news,
                'course' => $user->course,
                'address' => $user->address,
                'slide' => $user->slide,
                'computer_room' => $user->computer_room,
                'document' => $user->document,
                'about' => $user->about,
                'faculty' => $user->faculty,
                'position' => $user->position,
                'teacher' => $user->teacher,
                'student' => $user->student,
                'admin' => $user->admin,
            ]);

            return  $result;
        } catch (\Throwable $th) {
            return $th;
        }
    }

    public function createUser(Request $request)
    {
        // validate values
        $validate = Validator::make(
            $request->all(),
            [
                'prefix' => "required|string",
                'first_name' => "required|string",
                'last_name' => "required|string",
                'date_of_birth' => "required|string",
                'village_present' => "required|string",
                'village_birth' => "required",
                'city_present_id' => "required",
                'province_present_id' => "required",
                'city_birth_id' => "required",
                'province_birth_id' => "required",
                'email' => "required|email|unique:tbl_users,email",
                'password' => "required|min:8",
            ]
        );

        if ($validate->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validate->errors()
            ], 200);
        }

        $file = $request->file('image');
        $path = null;
        if ($file) {
            $path =  $this->_uploadFile($file, $request->first_name);

            if (!$path) {
                return response()->json([
                    'status' => 'error',
                    'error' => 'ບໍ່ສາມາດອັບໂຫຼດຮູບພາບ ໃຫຍ່ກວ່າ 2mb'
                ], 200);
            }
        }

        try {

            $user = $this->_insertUser($request);
            if ($user->id) {
                $role = $this->_insertRole($request, $user->id);
            }
            return response()->json([
                'status' => 'success',
                'password' => $request->password,
                'message' =>  "ບັນທຶກຂໍ້ມູນສຳເລັດ",
                'resultRole' => $role,
                'user' => $user,
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' =>  $th->getMessage(),
            ], 500);
        }
    }


    public function city()
    {
        try {
            // $pro = tbl_provinces::find(1);
            // $city = $pro->cities();
            // // $city =   tbl_cities::where('province_id', 1)->get();

            // // $city = tbl_cities::find(1);
            // // $pro = $city->tbl_provinces();

            $city = tbl_cities::find(1);
            $province = $city->tbl_provinces;

            return response()->json([
                'city' => $city,
                'province' =>  $province
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                "mmmm" => $th->getMessage()
            ], 500);
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class tbl_users extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'prefix',
        'user_type',
        'login_status',
        'image_path',
        'first_name',
        'last_name',
        'date_of_birth',
        'slogan',
        'village_present',
        'village_birth',
        'city_present_id',
        'province_present_id',
        'city_birth_id',
        'province_birth_id',
        'email',
        'whatsapp',
        'telephone1',
        'telephone2',
        'facebook',
        'line',
        'youtube',
        'password',
        'role_id',
    ];




    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tbl_news()
    {
        return $this->hasMany(tbl_news::class);
    }
    public function tbl_computer_room()
    {
        return $this->hasMany(tbl_computer_room::class);
    }
    public function tbl_courses()
    {
        return $this->hasMany(tbl_courses::class);
    }
    public function tbl_department_types()
    {
        return $this->hasMany(tbl_department_type::class);
    }
    public function tbl_departments()
    {
        return $this->hasMany(tbl_departments::class);
    }
    public function tbl_document_types()
    {
        return $this->hasMany(tbl_document_types::class);
    }
    public function tbl_documents()
    {
        return $this->hasMany(tbl_documents::class);
    }
    public function tbl_faculties()
    {
        return $this->hasMany(tbl_faculties::class);
    }
    public function tbl_history()
    {
        return $this->hasMany(tbl_history::class);
    }
    public function tbl_position_types()
    {
        return $this->hasMany(tbl_position_types::class);
    }
    public function tbl_rules()
    {
        return $this->hasMany(tbl_rules::class);
    }
    public function tbl_slides()
    {
        return $this->hasMany(tbl_slides::class);
    }
    public function tbl_teacher_courses()
    {
        return $this->hasMany(tbl_teacher_courses::class);
    }
    public function tbl_user_educations()
    {
        return $this->hasMany(tbl_educations::class);
    }
    public function tbl_visions()
    {
        return $this->hasMany(tbl_visions::class);
    }

    public function tbl_students()
    {
        return $this->hasMany(tbl_students::class);
    }

    public function tbl_roles()
    {
        return $this->hasOne(tbl_roles::class, 'user_id', 'id');
    }
}

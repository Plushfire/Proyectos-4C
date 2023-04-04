<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $fillable = [
        'id',
        'serial_number',
        'mail',
        'group_id',
        'general_data_id'
    ];
    protected $rules = [
        'serial_number' => 'required|string|10',
        'mail' => 'required|string|max:255'
    ];
    public function general_data(){
        return $this->belongsTo(GeneralData::class,'general_data_id','id');
    }
    public function group(){
        return $this->belongsTo(Group::class);
    }
}

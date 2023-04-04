<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralData extends Model
{
    protected $table = 'generaldata';
    protected $fillable = [
        'id',
        'name',
        'surname',
        'birthdate',
        'gender',
    ];
    protected $rules = [
        'name'=>'required|string|max:100',
        'surname'=>'required|string|max:15',
        'birthdate' => 'required',
        'gender'=>'required|char|max:1'
    ];
    public function students(){
        return $this->hasMany(Student::class);
    }
}

?>

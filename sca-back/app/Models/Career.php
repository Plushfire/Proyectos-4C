<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $table = 'career';
    protected $fillable = [
        'id',
        'name',
        'description',
        'level'
    ];
    protected $rules = [
        'name'=>'required|string|max:100',
        'description' => 'required|string|max:300',
        'level'=>'required|string|max:3'
    ];
    public function group(){
        return $this->hasMany(Group::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'group';
    protected $fillable = [
        'id',
        'grade',
        'name',
        'career_id'
    ];
    protected $rules = [
        'grade' => 'required|integer|',
        'name' =>'required|string|max:1'
    ];
    public function career(){
        return $this->belongsTo(Career::class);
    }
    public function students(){
        return $this->hasMany(Student::class);
    }
}

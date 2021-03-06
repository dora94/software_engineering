<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'teachers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['teacher_id','dept_id','degree','dept_chief'];





}

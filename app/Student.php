<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'students';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['stud_id','spec1_id','spec2_id','spec1_year','spec2_year','group1','group2','curriculum1_id','curriculum2_id'];



}

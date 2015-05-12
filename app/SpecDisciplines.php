<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SpecDisciplines extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'specializedDisciplines';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['spec_id','disc_id','semester','teacher_id','credits'];



}

<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CurriculumDisciplines extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'curriculumDisciplines';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['curriculum_id','disc_id'];



}

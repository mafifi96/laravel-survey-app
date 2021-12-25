<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Survey;
use App\Models\Question;
use App\Models\Answer;


class Responses extends Model
{
    use HasFactory;


    protected $guarded = [];


    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answers()
    {
        return $this->belongsTo(Answer::class);
    }

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}

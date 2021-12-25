<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Question;
use App\Models\User;
use App\Models\FinishedSurveys;
use App\Models\Responses;

class Survey extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function FinishedSurveys()
    {
        return $this->hasMany(FinishedSurveys::class);
    }

    public function responses()
    {
        return $this->hasMany(Responses::class);
    }
}

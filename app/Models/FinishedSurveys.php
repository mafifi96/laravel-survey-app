<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Survey;

class FinishedSurveys extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = "finished_surveys";


    public function finished()
    {
        return $this->belongsTo(survey::class);
    }

}

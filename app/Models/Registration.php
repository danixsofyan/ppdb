<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Batch()
    {
        return $this->belongsTo(Batch::class);
    }

    public function Student()
    {
        return $this->belongsTo(Student::class);
    }

    public function StudyProgram()
    {
        return $this->belongsTo(StudyProgram::class);
    }
}

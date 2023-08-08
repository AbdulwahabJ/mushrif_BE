<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionRecordType extends Model
{
    use HasFactory;
    public function recordQuestion(){
        return $this->belongsTo(RecordQuestion::class);
    }
}

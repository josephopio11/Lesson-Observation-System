<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = ['name','class','objcommnclearly','inclusion','reviewed','thrknow','subjmat','knowrel','ideaexp','actandqn','praise','poorbehave','fairness','recmiscon','studengaged','timeutil','goodprac','descriptor','comment','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

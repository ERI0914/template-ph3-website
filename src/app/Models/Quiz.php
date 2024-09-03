<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // これを追加

class Quiz extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    use SoftDeletes;
    }




// // app/Models/Quiz.php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Quiz extends Model
// {
//     use HasFactory;

//     public function questions()
//     {
//         return $this->hasMany(Question::class);
//     }
// }


// // app/Models/Quiz.php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Quiz extends Model
// {
//     public function questions()
//     {
//         return $this->hasMany(Question::class);
//     }
// }

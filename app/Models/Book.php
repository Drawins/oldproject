<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Book extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'pages',
        'IBN',
        'category',
        'publisher',
        'yearOfPublication'
    ];
}

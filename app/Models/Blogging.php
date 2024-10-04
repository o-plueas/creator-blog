<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blogging extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'author', 'qualification', 'categories', 'description'];

    public Function ScopeFilter($query, array $filters){
        if($filters['category'] ?? false){
            $query->where('categories', 'like', '%' .request('category'). '%');
        }

        if($filters['search'] ?? false){
            $query->where('title', 'like', '%' .request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orWhere('categories', 'like', '%' . request('search') . '%');
        }
    }

    //relationship to user

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
        
    }


}

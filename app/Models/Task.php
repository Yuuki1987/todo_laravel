<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'name'];

    /**
     * 
     * タスク保持するユーザー情報の取得
     * 
     */

       public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}

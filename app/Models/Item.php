<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    public $guarded = ['id', 'created_at'];
    public function admin_user()
    {
        return $this->belongsTo(Admin_user::class);
    }
}

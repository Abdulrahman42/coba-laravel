<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['first_name', 'last_name', 'gender', 'religion', 'address', 'avatar', 'user_id'];

    public function getAvatar()
    {
        if (!$this->avatar) {
            return asset('images/default.jpg');
        }
        return asset('images/' . $this->avatar);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function profileImage()
    {
        $iamgePath = ($this->image) ?  $this->image : '/uploads/LUP9DRoqVBKHEUx9xfkMcsA7GzGFas2PNi2H8FS5.jpg';

        return '/storage/' . $iamgePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}

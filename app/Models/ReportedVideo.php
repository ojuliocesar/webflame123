<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class ReportedVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'checked'
    ];

    public function video()
    {
        return $this->belongsTo(Video::class);
    }

    public function reportedUser()
    {
        return $this->belongsTo(User::class, 'reported_user_id');
    }

    public function reportingUser()
    {
        return $this->belongsTo(User::class, 'reporting_user_id');
    }

}

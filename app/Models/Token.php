<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Token extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'code',
        'expired_at'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeVerifyCode($query , $code,  $user): bool
    {
        return !! $user->token()->whereCode($code)->where('expired_at' , '>' ,Carbon::now())->first();
    }

    public function scopeGenerateCode($query , $user): int
    {
        if($code = $this->getAliveCodeForUser($user)) {
            $code = $code->code;
        } else {
            $user->token()->delete();

            do {
                $code = mt_rand(1000, 9999);
            } while($this->checkCodeIsUnique($user , $code));

            $user->token()->create([
                'code' => $code,
                'expired_at' => Carbon::now()->addMinutes(10)
            ]);
        }
        return $code;
    }

    private function checkCodeIsUnique($user, int $code): bool
    {
        return !! $user->token()->whereCode($code)->first();
    }

    private function getAliveCodeForUser($user)
    {
        return $user->token()->where('expired_at' , '>' , Carbon::now())->first();
    }
}

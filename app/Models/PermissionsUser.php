<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionsUser extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'user_id',
        'cashchacks',
        'changestatus',
        'envios',
        'cancelenvios',
        'paybouncedcheck',
        'intertransaction',
        'follow-up',
        'end-of-day',
        'tsCustomers-changestatus',
        'tsCustomers-newcustomer',
        'tsPayers-activatepayer',
        'tsPayers-changestatus',
        'tsPayers-newpayer',
        'permissions',
        'newUser',
        'fees',
        'agents',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

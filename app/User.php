<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable,HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $primaryKey = 'user_id';

    protected $fillable = [
        'user_id', 'user_name', 'user_password', 'user_email', 'user_email_permanent', 'user_authlevel', 'user_home_planet_id', 'user_galaxy', 'user_system', 'user_planet', 'user_current_planet', 'user_lastip', 'user_ip_at_reg', 'user_agent', 'user_current_page', 'user_register_time', 'user_onlinetime', 'user_fleet_shortcuts', 'user_ally_id', 'user_ally_request', 'user_ally_request_text', 'user_ally_register_time', 'user_ally_rank_id', 'user_banned', 'user_remember_token', 'user_created_at', 'user_updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'user_password', 'user_remember_token'
    ];

    /*
    * Get Todo of User
    *
    */
    public function planets()
    {
        return $this->hasMany('App\Planets');
    }
}

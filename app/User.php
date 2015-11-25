<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    
    public function setGroupAttribute($val)
    {
        $groups = [1, 2, 4, 8, 16, 32];
        $this->attributes['group'] = $groups[rand(0, count($groups) - 1)];
    }
    
    public function setNameAttribute($val)
    {
        $list = ['Loko', 'Laka', 'Cola', 'Coco', 'Omma', 'Silk', 'Abal', 'Zols', 'Ghof', 'Roan'];
        $this->attributes['name'] = $list[rand(0, count($list) - 1)];
    }
    
    public function setPasswordAttribute($val)
    {
        $this->attributes['password'] = bcrypt('123456');
    }
}

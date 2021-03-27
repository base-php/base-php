<?php

namespace App\Models;

class User extends Model
{
    /**
     * The table associated with model.
     *
     * $var string
     */
    protected $table = 'users';

    /**
     * The primary key of the model.
     *
     * $var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * $var array
     */
    protected $fillable = ['photo', 'name', 'email', 'password', 'role', 'permissions', 'oauth', 'hash'];

    /**
     * Set the user photo.
     *
     * @param  string $value
     * @return void
     */
    public function setPhotoAttribute($value)
    {
        if ($value != '') {
            $this->attributes['photo'] = '/resources/assets/img/users/' . $value;
        }
    }

    /**
     * Get the user photo.
     *
     * @param  string $value
     * @return void
     */
    public function getPhotoAttribute($value)
    {
        if ($value == '') {
            return 'https://ui-avatars.com/api/?background=000&color=fff&name=' . $this->name;
        }

        return $value;
    }
}

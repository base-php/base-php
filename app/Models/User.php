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
    protected $fillable = [
        'photo',
        'name',
        'email',
        'password',
        'oauth',
        'hash',
        '2fa',
        'sessions',
        'date_verified_email',
        'date_create',
        'date_update'
    ];

    /**
     * Set the user photo.
     *
     * @param  string  $value
     * @return void
     */
    public function setPhotoAttribute(?string $value)
    {
        if ($value != '') {
            $this->attributes['photo'] = '/resources/assets/img/'.$value;
        }
    }

    /**
     * Get the user photo.
     *
     * @param  string  $value
     * @return string
     */
    public function getPhotoAttribute(?string $value): string
    {
        if ($value == '') {
            return 'https://ui-avatars.com/api?size=200&background=000&color=fff&name='.$this->name;
        }

        return $value;
    }
}

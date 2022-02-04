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
    protected $fillable = ['photo', 'name', 'email', 'password', 'role', 'permissions', 'oauth', 'hash', 'date_create', 'date_update'];

    /**
     * Interact with the user's photo.
     *
     * @param  string  $value
     * @return Attribute
     */
    public function photo(): Attribute
    {
        return new Attribute(
            get: function (?string $value) {
                if ($value == '') {
                    return 'https://ui-avatars.com/api?size=200&background=000&color=fff&name=' . $this->name;
                }

                return $value;
            },

            set: function (?string $value) {
                if ($value != '') {
                    return '/resources/assets/img/' . $value;
                }
            },
        );
    }
}

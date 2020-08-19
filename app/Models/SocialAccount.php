<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model {

    protected $table = 'ngdb_social_accounts';
    protected $fillable = ['user_id', 'provider', 'provider_id'];

    public function user() {

        return $this->belongsTo(User::class, 'user_id');

    }

}

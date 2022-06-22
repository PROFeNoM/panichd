<?php

namespace PanicHD\PanicHD\Models;

use App\Models\User;
use PanicHD\PanicHD\Traits\MemberTrait;

class Member_AppUser extends User
{
    use MemberTrait;

    protected $table = 'users';

    public function getNameAttribute(): string
    {
        return $this->sap_username;
    }
}

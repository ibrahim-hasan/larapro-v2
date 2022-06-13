<?php

namespace App\Models\Permissions;

use Silber\Bouncer\Database\Models;

use Illuminate\Database\Eloquent\Model;

class AbilityGroupTranslation extends Model
{
    protected $table = 'perms_group_translations';

    protected $guarded = [];

    public $timestamps = false;
}

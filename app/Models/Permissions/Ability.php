<?php

namespace App\Models\Permissions;

use Illuminate\Database\Eloquent\Model;
use Silber\Bouncer\Database\Ability as BaseAbility;
use Astrotomic\Translatable\Translatable;
use App\Classes\Traits\TranslatableHelper;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Permissions\AbilityGroup;

class Ability extends BaseAbility
{
    use Translatable, TranslatableHelper, SoftDeletes;

    protected $fillable = [
        'name'
    ];

    public $translationModel = 'App\Models\Permissions\AbilityTranslation';

    public $translatedAttributes = [
        'title',
        'description'
    ];

    public function group()
    {
        return $this->belongsTo(AbilityGroup::class, 'group_id', 'id');
    }

    /**
     * Returns the ability's group title with a optional suffex.
     * i.e. {User Management - }
     */
    public function getGroupTitleAttribute($suffex = '')
    {
        return !is_null($group = $this->group) ? $group->translateOrFirst()->title . $suffex : '';
    }
}

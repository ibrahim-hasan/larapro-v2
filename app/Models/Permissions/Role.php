<?php

namespace App\Models\Permissions;

use Illuminate\Database\Eloquent\Model;
use Silber\Bouncer\Database\Role as BaseRole;
use Astrotomic\Translatable\Translatable;
use App\Classes\Traits\TranslatableHelper;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends BaseRole
{
    use Translatable, TranslatableHelper, SoftDeletes;

    protected $guarded = [];

    public $translationModel = 'App\Models\Permissions\RoleTranslation';

    public $translatedAttributes = [
        'title',
        'description',
    ];

    public function roles()
    {
        return $this->morphToMany(self::class, 'manageable', 'perms_manageables');
    }

    public function manageableRoles()
    {
        return $this->morphedByMany(self::class, 'manageable', 'perms_manageables');
    }

    /**
     * Scope a query to only include roles of given names.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @param  array  $roles
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNot($query, ...$roles)
    {
        return $query->whereNotIn('name', $roles);
    }
}

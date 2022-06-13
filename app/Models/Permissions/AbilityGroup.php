<?php

namespace App\Models\Permissions;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use App\Classes\Traits\TranslatableHelper;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Permissions\Ability;

class AbilityGroup extends Model
{
    use Translatable, TranslatableHelper, SoftDeletes;

    protected $table = 'perms_groups';

    protected $fillable = [
        'name'
    ];

    public $translationModel = 'App\Models\Permissions\AbilityGroupTranslation';

    public $translationForeignKey = 'group_id';

    public $translatedAttributes = [
        'title',
        'description'
    ];

    public function abilities()
    {
        return $this->hasMany(Ability::class, 'group_id', 'id');
    }
}

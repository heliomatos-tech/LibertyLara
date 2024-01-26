<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class SysMenu extends Model
{
    use HasFactory;

    protected $table = 'sys_menu';

    /**
     * @return HasMany|null
     */
    public function childs(): ?HasMany
    {
        return $this->hasMany(SysMenu::class, 'pai', 'id');
    }

}

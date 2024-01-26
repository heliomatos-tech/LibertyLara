<?php

namespace App\Architecture\Menu\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface IListMenuService
{
    /**
     * @return Collection
     */
    public function listAllOptions() : Collection;
}

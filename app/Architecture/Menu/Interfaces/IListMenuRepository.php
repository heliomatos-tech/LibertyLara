<?php

namespace App\Architecture\Menu\Interfaces;

use Illuminate\Database\Eloquent\Collection;

interface IListMenuRepository
{
    /**
     * @return Collection
     */
    public function listAllOptions(): Collection;
}

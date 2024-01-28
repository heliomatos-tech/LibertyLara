<?php

namespace App\Architecture\Menu\Repositories;

use Illuminate\Database\Eloquent\Collection;
use App\Architecture\Menu\Interfaces\IListMenuRepository;
use App\Models\SysMenu;

class ListMenuRepository implements IListMenuRepository
{

    /**
     * @return Collection
     */
    public function listAllOptions(): Collection
    {
        $options = SysMenu::where('pai', '<=', 0)
            ->where('modulo', 'app')
            ->where('exibir', 'S')
            ->where('ativo', 'S')
            ->orderBy('menu', 'asc')
            ->get();
        return $options;
    }

}

<?php

namespace App\Architecture\Menu\Actions;

use Illuminate\Database\Eloquent\Collection;
use App\Architecture\Menu\Interfaces\IListMenuService;

class ListMenuAction
{

    /**
     * @var IListMenuService
     */
    protected IListMenuService $IListMenuService;

    /**
     * @param IListMenuService $IListMenuService
     */
    public function __construct(IListMenuService $IListMenuService)
    {
        $this->IListMenuService = $IListMenuService;
    }

    /**
     * @return Collection
     */
    public function execute(): ?Collection
    {
        return $this->IListMenuService->listAllOptions();
    }

}

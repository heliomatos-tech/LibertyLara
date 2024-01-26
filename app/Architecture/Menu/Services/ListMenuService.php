<?php

namespace App\Architecture\Menu\Services;

use Illuminate\Database\Eloquent\Collection;
use App\Architecture\Menu\Interfaces\IListMenuRepository;
use App\Architecture\Menu\Interfaces\IListMenuService;

class ListMenuService implements IListMenuService
{
    /**
     * @var IListMenuRepository
     */
    protected IListMenuRepository $IListMenuRepository;

    /**
     * @param IListMenuRepository $IlistMenuRepository
     */
    public function __construct(IListMenuRepository $IlistMenuRepository)
    {
        $this->IListMenuRepository = $IlistMenuRepository;
    }

    /**
     * @return Collection
     */
    public function listAllOptions(): Collection
    {
        return $this->IListMenuRepository->listAllOptions();
    }
}
<?php

namespace App\Livewire\App;

use App\Architecture\Menu\Interfaces\IListMenuRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class MainMenuNav extends Component
{
    /**
     * @var null|array|Collection
     */
    public null|array|Collection $options = null;

    /**
     * Nome do módulo para montar o menu
     *
     * @var string
     */
    public string $module = 'app';


    /**
     * Diretiva de navegação do livewire
     *
     * @var string
     */
    public string $navigate = 'wire:navigate';
    /**
     * @var IListMenuRepository
     */
    protected IListMenuRepository $IListMenuRepository;

    /**
     * @return View
     */
    public function render(): View
    {
        return view('menu.app-main-menu');
    }

    /**
     * @param IListMenuRepository $IListMenuRepository
     * @return array
     */
    public function mount(IListMenuRepository $IListMenuRepository): array|Collection
    {
        $this->IListMenuRepository = $IListMenuRepository;
        $this->options = \Cache::remember('menu_options', 60, function () {
            $options = $this->IListMenuRepository->listAllOptions();
            return $options ?? [];
        });
        return $this->options;
    }

    /**
     * @return string
     */
    public function placeholder(): string
    {
        return <<<'HTML'
        <div>
           <span>Carregando menus...</span>
        </div>
        HTML;
    }
}

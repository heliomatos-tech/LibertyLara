<?php

namespace App\View\Components\Base;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CustomSelect extends Component
{


    /**
     * Create a new component instance.
     */
    public function __construct(
        public null|array $listOptions,
        public null|int $selectedValue = null,
        public null|string $selectedText = '',
        public null|string $mounted = ''
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->mount();
        return view('components.base.custom-select');
    }

    /**
     * Monta o Select, selecionando a opção default
     *
     * @return void
     */
    private function mount(): void
    {
        foreach ($this->listOptions as $i => $value) {
            $this->selectedText = ($i == $this->selectedValue) ? $value : $this->selectedText;
            $this->mounted .= "<li x-on:click=\"selected='{$value}'; open=false\"class=\"px-4 py-2 text-base cursor-pointer hover:bg-[#528b8c38] dark:hover:bg-[#6a80976e] hover:dark:text-slate-50\" :key=\"'{$i}'\">{$value}</li>";
        }
    }
}

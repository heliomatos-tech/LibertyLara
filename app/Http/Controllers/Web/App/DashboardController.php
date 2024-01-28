<?php

namespace App\Http\Controllers\Web\App;

use App\Http\Controllers\Controller;
use App\Architecture\Menu\Actions\ListMenuAction;
use Illuminate\View\View;


class DashboardController extends Controller
{
    /**
     * @var ListMenuAction
     */
    protected ListMenuAction $ListMenuAction;
    /**
     * @param ListMenuAction $ListMenuAction
     */
    public function __construct(ListMenuAction $ListMenuAction)
    {
        $this->ListMenuAction = $ListMenuAction;
    }


    /**
     * @return void
     */
    public function __invoke(): View
    {
        $options = $this->ListMenuAction->execute();
        return view('app.dashboard', compact('options'));

    }
}

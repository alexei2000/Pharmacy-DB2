<?php

namespace App\View\Components;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;


class Table extends Component
{
    public array $columns;

    public Collection $items;

    public $onclickrow;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($columns, $items, $onclickrow)
    {
        $this->columns = $columns;
        $this->items = $items;
        $this->onclickrow = $onclickrow;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.table.index');
    }
}

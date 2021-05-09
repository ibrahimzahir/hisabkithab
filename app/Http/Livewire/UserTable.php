<?php

namespace App\Http\Livewire;

use App\User;
use Kdion4891\LaravelLivewireTables\Column;
use Kdion4891\LaravelLivewireTables\TableComponent;

class UserTable extends TableComponent
{
    public function query()
    {
        return User::query();
    }

    public function columns()
    {
        return [
            Column::make('ID')->searchable()->sortable(),
            Column::make('Created At')->searchable()->sortable(),
            Column::make('Updated At')->searchable()->sortable(),
        ];
    }
}

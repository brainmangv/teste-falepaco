<?php

namespace App\Livewire;

use Livewire\WithPagination;
use App\Models\Conversion;
use Livewire\Component;

class CurrencyExchangeTable extends Component
{
    use WithPagination;

    protected $listeners = ['currency-exchange-table:refresh' => 'refresh'];
    public function render()
    {
        // return all conversion order by date_created_at desc

        return view('livewire.currency-exchange-table', ['conversions' => 
        Conversion::orderBy('created_at', 'desc')->paginate(10)]);
    }
}

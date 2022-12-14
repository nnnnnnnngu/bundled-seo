<?php

namespace App\Http\Livewire;

use App\Models\Plan;
use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    public $plans, $selectedPlan;

    public function mount() {
        $this->selectedPlan = 1;
        $this->plans = Plan::all();
    }

    public function render()
    {
        return view('livewire.product-list',[
            'products' => Product::where('plan_id', $this->selectedPlan)->get()
        ]);
    }
}

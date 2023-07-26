<?php

declare(strict_types=1);

namespace App\Http\Livewire\Supplier;

use App\Models\Supplier;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Create extends Component
{
    use LivewireAlert;

    public Supplier $supplier;

    protected $rules = [
        'supplier.name_supplier' => 'required',
        'supplier.phone_supplier' => 'required',
        'supplier.address_supplier' => 'required',
    ];

    public function mount(Supplier $supplier): void
    {
        $this->supplier = $supplier;
    }

    public function render()
    {
        return view('livewire.supplier.create');
    }

    public function submit(): void
    {
        $this->validate();

        $this->supplier->save();
    }
}

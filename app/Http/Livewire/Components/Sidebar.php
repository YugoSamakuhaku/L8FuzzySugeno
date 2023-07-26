<?php

declare(strict_types=1);

namespace App\Http\Livewire\Components;

use App\Traits\AuthorizesRoleOrPermission;
use Livewire\Component;

class Sidebar extends Component
{
    use AuthorizesRoleOrPermission;

    public function render()
    {
        return view('livewire.components.sidebar');
    }

    public function redirectDashboard()
    {
        return redirect()->route('adminlte.dashboard');
    }

    public function redirectSuppliers()
    {
        $this->authorizeRoleOrPermission('suppliers_access');

        return redirect()->route('suppliers.index');
    }
}

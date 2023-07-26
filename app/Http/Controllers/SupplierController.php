<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Supplier;
use Gate;
use Illuminate\Http\Response;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class SupplierController extends Controller
{
    use LivewireAlert;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort_if(Gate::denies('suppliers_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pages.supplier.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort_if(Gate::denies('suppliers_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pages.supplier.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        abort_if(Gate::denies('suppliers_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pages.supplier.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        abort_if(Gate::denies('suppliers_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pages.supplier.edit', compact('supplier'));
    }
}

@extends('layouts.app')

@section('title', 'Tinker')

@push('styles')
@endpush
@push('scripts')
@endpush

@section('card-title', 'Tinker Data')

@section('card-body')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">qty_sale</th>
                <th scope="col">total_price</th>
                <th scope="col">date_sale</th>
                <th scope="col">status</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($query as $request_sale)
                <tr>
                    <td>{{ $request_sale->id_sale }}</td>
                    <td>{{ $request_sale->qty_sale }}</td>
                    <td>{{ $request_sale->total_price }}</td>
                    <td>{{ $request_sale->date_sale }}</td>
                    <td>{{ $request_sale->status }}</td>
                    @foreach ($request_sale->master_products as $product)
                <tr>
                    <td>{{ $product->name_product }}</td>
                    <td>{{ $product->pivot->qty }} qty</td>
                </tr>
            @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>

@stop

@section('card-footer')

@stop

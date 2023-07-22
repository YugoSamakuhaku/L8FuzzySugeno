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
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>

@stop

@section('card-footer')

@stop

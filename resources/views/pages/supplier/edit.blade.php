@extends('layouts.app')

@section('title', 'Edit Supplier')

@section('card-header')
    <h3 class="card-title">Form Edit Supplier</h3>
@endsection

@section('card-body')
    @livewire('supplier.edit', [$supplier])
@endsection

@section('card-footer')

@endsection

@push('styles')
    @powerGridStyles
@endpush
@push('scripts')
    @powerGridScripts
@endpush

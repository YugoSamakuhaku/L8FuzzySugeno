@extends('layouts.app')

@section('title', 'Create Supplier')

@section('card-header')
    <h3 class="card-title">Form Create Supplier</h3>
@endsection

@section('card-body')
    @livewire('supplier.create')
@endsection

@section('card-footer')

@endsection

@push('styles')
    @powerGridStyles
@endpush
@push('scripts')
    @powerGridScripts
@endpush

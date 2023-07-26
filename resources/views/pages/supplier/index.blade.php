@extends('layouts.app')

@section('title', 'Master Suppliers')

@section('card-header')
    @can('suppliers_create')
        <a href="{{ route('suppliers.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah Data</a>
    @endcan
@endsection

@section('card-body')
    @livewire('data-table.supplier-table')
@endsection

@section('card-footer')

@endsection

@push('styles')
    @powerGridStyles
@endpush
@push('scripts')
    @powerGridScripts
@endpush

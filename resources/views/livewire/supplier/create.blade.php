<form wire:submit.prevent="submit">
    <div class="form-group">
        <label for="name_supplier">Name Supplier</label>
        <input type="text" class="form-control @error('supplier.name_supplier') is-invalid @enderror" id="name_supplier" placeholder="Enter Name Supplier" wire:model.defer="supplier.name_supplier">
        @error('supplier.name_supplier')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="phone_supplier">Phone Supplier</label>
        <input type="text" class="form-control @error('supplier.phone_supplier') is-invalid @enderror" id="phone_supplier" placeholder="Enter Phone Supplier" wire:model.defer="supplier.phone_supplier">
        @error('supplier.phone_supplier')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <label for="address_supplier">Address Supplier</label>
        <input type="text" class="form-control @error('supplier.address_supplier') is-invalid @enderror" id="address_supplier" placeholder="Enter Address Supplier" wire:model.defer="supplier.address_supplier">
        @error('supplier.address_supplier')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-large btn-success submit">Save</button>
        <a href="{{ route('suppliers.index') }}" class="btn btn-large btn-secondary">
            Cancel
        </a>
    </div>
</form>

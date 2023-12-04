<form action="{{ $route }}" method="POST" enctype="multipart/form-data">
    @if($editForm) @method('PUT') @endif
    @csrf
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{ $title }}</h4>
        </div>
        <div class="card-body">
            {{ $slot }}
        </div>
        <div class="card-footer">
            <div class="float-end">
                <x-buttons.link-button color="secondary" icon="arrow-back" text="Kembali" :route="url()->previous()"/>
                <x-buttons.basic-button color="primary" icon="save" text="Simpan" type="submit"/>
            </div>
        </div>
    </div>
</form>

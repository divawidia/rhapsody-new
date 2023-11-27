<div class="card">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <div>
                <h6 class="font-size-16">{{ $title }}</h6>
                <h4 class="mt-3 pt-1 mb-0 font-size-24">{{ $value }}</h4>
            </div>
            <div class="">
                <div class="avatar">
                    <div class="avatar-title rounded bg-soft-primary">
                        <i class="{{ $icon }} font-size-24 mb-0 text-primary"></i>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ $route }}" class="btn btn-sm btn-primary waves-effect waves-light w-100 mt-4">
            Selengkapnya <i class="mdi mdi-chevron-right-circle"></i>
        </a>
    </div>
</div>

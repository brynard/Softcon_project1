<!-- card.blade.php -->
<div class="card">
    <div class="card-body p-3">
        <div class="row">
            <div class="col-8">
                <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">{{ $label }}</p>
                    <h5 class="font-weight-bolder">{{ $value }}</h5>
                </div>
            </div>
            <div class="col-4 text-end">
                <div class="icon icon-shape {{ $bgColor }} text-center rounded-circle">
                    <i class="{{ $iconClass }} text-lg opacity-10" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
</div>

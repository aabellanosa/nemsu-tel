<div class="section-header container text-center mb-5">
    <h2 class="fw-bold">{{ $title }}</h2>
    @if ($title) 
        <p class="{{ $subtitleClass ?? 'text-muted'}}" />
            {{ $subtitle }}
        </p>
    @endif
</div>
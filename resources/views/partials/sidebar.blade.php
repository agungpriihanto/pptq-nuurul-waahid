<h5 class="fw-normal ms-3">LATEST POST</h5>
<ul class="list-group list-group-flush">
    @foreach ($sbdata as $sbd)
        <li class="list-group-item">
            <a href="/{{ $sbd->slug }}" target="_blank" class="text-decoration-none text-reset">
                <div class="card border-light">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img src="{{ asset('storage/' . $sbd->post_img) }}" width="75px" class="border rounded">
                        </div>
                        <div class="col-md-10">
                            <div class="card-body px-5 py-0">
                                <small class="card-title mb-0 fs-6 fw-semibold">
                                    {{ $sbd->title }}
                                </small><br>
                                <small class="card-text mt-0">
                                    <small class="text-muted mt-0">
                                        updated: {{ $sbd->updated_at->diffForHumans() }}
                                    </small>
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </li>
    @endforeach
</ul>

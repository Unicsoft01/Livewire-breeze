<div class="row">
    @foreach ($taskByStatus as $status)
        <div class="col-md-6 col-xl-4">
            <div class="card shd">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div @class([
                                'avatar-md rounded mx-auto',
                                'bg-soft-' . $status->status->color() => $status->status,
                            ])>
                                <b @class([
                                    'avatar-title fs-24',
                                    'text-'.$status->status->color() => $status->status,
                                ])>
                                    {{ $status->count }}
                                </b>
                            </div>
                        </div> <!-- end col -->
                        <div class="col-12 text-end0">
                            <p class="text-muted mb-0 text-truncate text-center"> Status</p>
                            <h3 class="text-dark mt-1 mb-0 text-center">
                                {{ Str::of($status->status->value)->headline() }}
                            </h3>
                        </div> <!-- end col -->
                    </div> <!-- end row-->
                </div> <!-- end card body -->
            </div> <!-- end card -->
        </div>
    @endforeach
</div>

{{-- 

        <div class="col-md-6 col-xl-4">
            <div class="card shd">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="avatar-md bg-soft-primary rounded mx-auto">
                                <b class="avatar-title fs-24 text-primary">
                                    0
                                </b>
                            </div>
                        </div> <!-- end col -->
                        <div class="col-12 text-end0">
                            <p class="text-muted mb-0 text-truncate text-center">Campaign Sent</p>
                            <h3 class="text-dark mt-1 mb-0 text-center">13, 647</h3>
                        </div> <!-- end col -->
                    </div> <!-- end row-->
                </div> <!-- end card body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
        <div class="col-md-6 col-xl-4">
            <div class="card shd">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="avatar-md bg-soft-info rounded mx-auto">
                                <b class="avatar-title fs-24 text-info">
                                    0
                                </b>
                            </div>
                        </div> <!-- end col -->
                        <div class="col-12 text-end0">
                            <p class="text-muted mb-0 text-truncate text-center">Campaign Sent</p>
                            <h3 class="text-dark mt-1 mb-0 text-center">13, 647</h3>
                        </div> <!-- end col -->
                    </div> <!-- end row-->
                </div> <!-- end card body -->
            </div> <!-- end card -->
        </div> 
        --}}

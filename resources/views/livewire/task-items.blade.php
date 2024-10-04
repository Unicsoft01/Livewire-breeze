<div>
    <div x-init="setInterval(() => {
        $wire.$refresh()
    }, 5000)">
        {{-- This will get refreshed every 5 seconds --}}
    </div>
    
    @if (count($tasks) > 0)
        @foreach ($tasks as $task)
            <div class="card cart-detail shd">
                <div class="card-body">
                    <div class="row gy-3">
                        <div class="col-sm">
                            <div class="ms-lg-3">
                                <a href="#!" class="fw-medium text-dark fs-18">{{ $task->title }}</a>
                                <div class="d-flex align-items-center gap-3 mt-2">
                                    <p class="text-dark fw-medium"> {{ $task->description }}
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <div class="text-lg-end">
                                <p class="fw-medium mb-0">{{ $task->created_at->diffForHumans() }}</p>
                                <p class="mt-2 mb-0 fw-semibold fs-17">
                                    $80.00
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer bg-light-subtle">
                        <div class="row g-3">
                            <div class="col-sm">
                                <div class="d-flex gap-2">
                                    <a href="#!" class="d-flex align-items-center gap-1 btn btn-success">
                                        <iconify-icon icon="solar:trash-bin-minimalistic-bold-duotone" class="fs-18">
                                        </iconify-icon>
                                        Remove
                                    </a>
                                    <a href="#!" class="d-flex align-items-center gap-1 btn btn-primary">
                                        <iconify-icon icon="solar:trash-bin-minimalistic-bold-duotone" class="fs-18">
                                        </iconify-icon>
                                        Remove
                                    </a>
                                    <a href="#!" class="d-flex align-items-center gap-1 btn btn-info">
                                        <iconify-icon icon="solar:trash-bin-minimalistic-bold-duotone" class="fs-18">
                                        </iconify-icon>
                                        Remove
                                    </a>
                                </div>
                            </div>
                            {{-- <div class="col-sm-auto">
                                    <p class="text-dark fw-medium mb-0">Total : <span class="text-muted">$83.00</span></p>
                                </div> --}}
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="card-body shd">
            <h3 class="text-center">
                No tasks found. Please create some to display!
            </h3>
        </div>
    @endif

</div>

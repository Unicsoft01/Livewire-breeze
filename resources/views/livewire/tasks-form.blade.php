<div>
    <div class="card shd">
        <div class="card-header">
            <h4 class="card-title">Create New Task</h4>
        </div>
        <div class="card-body">
            <form class="row g-2" wire:submit="store" novalidate>
                <x-forms.text-input type="text" required name="form.title" wire:model.blur="form.title" />
                @error('form.title')
                    <div id="title" class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror

                <x-forms.text-input type="text" required name="form.slug" wire:model.blur="form.slug" />
                @error('form.slug')
                    <div id="slug" class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror

                <div class="col-md-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control  @error('form.description') is-invalid @enderror" id="description"
                        placeholder="Describe task description [Optional]" wire:model.blur="form.description"></textarea>
                    <div>
                        @error('form.description')
                            <div id="description" class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                {{--  --}}
                <div class="col-6">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-select @error('form.status') is-invalid @enderror" required=""
                        aria-label="status" wire:model.live="form.status">
                        <option value="">Task status</option>
                        @foreach (\App\Enums\StatusType::cases() as $status)
                            <option value="{{ $status->value }}">
                                {{ $status->name }}
                            </option>
                        @endforeach
                    </select>
                    <div>
                        @error('form.status')
                            <div id="status" class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-6">
                    <label for="priority" class="form-label">Priority</label>
                    <select class="form-select  @error('form.priority') is-invalid @enderror" required=""
                        aria-label="priority" wire:model.live="form.priority">
                        <option value="">Open this select menu</option>
                        @foreach (\App\Enums\PriorityType::cases() as $priority)
                            <option value="{{ $priority->value }}">
                                {{ $priority->name }}
                            </option>
                        @endforeach
                    </select>
                    <div>
                        @error('form.priority')
                            <div id="priority" class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12 mb-1">
                    <label for="deadline" class="form-label">Deadline</label>
                    <input type="date" class="form-control @error('form.deadline') is-invalid @enderror"
                        id="deadline" required wire:model.live="form.deadline">

                    <div>
                        @error('form.deadline')
                            <div id="deadline" class="text-danger mt-1">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary btn-md me-2" type="submit">
                        <span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"
                            wire:loading></span>
                        Create Task
                    </button>
                </div>
            </form>
        </div>
        <div class="card-footer bg-light-subtle border-top">
            <div class="d-flex align-items-center justify-content-between">

                <div>
                    <p class="fw-medium text-dark mb-0">Total Amount</p>
                </div>
                <div>
                    <p class="fw-medium text-dark mb-0">$737.00</p>
                </div>
            </div>
            <div class="alert alert-warning alert-icon mt-3 mb-0" role="alert">
                <div class="d-flex align-items-center">
                    <div
                        class="avatar-sm rounded bg-warning d-flex justify-content-center align-items-center fs-22 me-2 flex-shrink-0">
                        <iconify-icon icon="solar:kick-scooter-broken" class="align-middle text-white"></iconify-icon>
                    </div>
                    <div class="flex-grow-1">
                        Estimated Delivery by 25 April, 2024
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

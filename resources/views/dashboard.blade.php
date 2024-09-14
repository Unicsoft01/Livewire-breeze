<x-app-layout>

    {{-- <x-slot-pageheader :page /> --}}
    <x-slot:phead>Dashboard</x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3>
                            Dashboard for {{ Auth::user()->name }}
                        </h3>
                    </div>
                </div>
            </div>
        </div>


    </div>
</x-app-layout>

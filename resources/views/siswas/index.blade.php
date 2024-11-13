@extends('layouts.app_sneat')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>

        <!-- Basic Bootstrap Table -->
        @if (session('success'))
            <div class="alert alert-primary alert-dismissible" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            <h5 class="card-header">Table Basic</h5>

            <div class="table-responsive text-nowrap">
                <div class="d-flex align-items-center gap-2 m-3">
                    <a type="button" class="btn btn-primary" href="{{ route('operator.siswa.create') }}">
                        Add Siswa
                    </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search Wali" aria-label="Search Wali"
                            aria-describedby="button-addon2" />
                        <button class="btn btn-outline-primary" type="button" id="button-addon2"><i
                                class="bx bx-search"></i></button>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Nama</th>
                            <th>No HP</th>
                            <th>Email</th>
                            <th>Akses</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($siswas as $item)
                            <tr>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> {{ $loop->iteration }}</td>
                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                    <strong>{{ $item->name }}</strong>
                                </td>
                                <td>{{ $item->nohp }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->akses }}</td>
                                {{-- <td><span class="badge bg-label-primary me-1">Active</span></td> --}}
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#largeModalEdit{{ $item->id }}"><i
                                                    class="bx bx-edit-alt me-1"></i>
                                                Edit</a>
                                            <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#largeModalDelete{{ $item->id }}"><i
                                                    class="bx bx-trash me-1"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                    @include('wali.edit')
                                    @include('wali.delete')
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $siswas->links() !!}
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->

        <hr class="my-5" />

        <!-- Large Modal -->
        @include('wali.create')
        {{-- End Large Modal --}}

    </div>
@endsection
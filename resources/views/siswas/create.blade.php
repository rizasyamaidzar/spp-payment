@extends('layouts.app_sneat')

@section('content')
    <div class="card mb-4">
        <h5 class="card-header">Form Create Siswa</h5>
        <div class="card-body">
            <form action="{{ route('operator.siswa.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" />
                </div>
                <div class="mb-3">
                    <label for="nisn" class="form-label">Nisn</label>
                    <input type="text" name="nisn" class="form-control" id="nisn" placeholder="Nisn" />
                </div>
                <div class="mb-3">
                    <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="Jurusan" />
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input type="text" name="kelas" class="form-control" id="kelas" placeholder="kelas" />
                </div>
                <div class="mb-3">
                    <label for="angkatan" class="form-label">Angkatan</label>
                    <input type="text" name="angkatan" class="form-control" id="angkatan" placeholder="Angkatan" />
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlSelect1" class="form-label">Nama Wali</label>
                    <select class="form-select js-example-basic-single" id="exampleFormControlSelect1"
                        aria-label="Default select example" name="wali_id">
                        {{-- <option selected>Open this select menu</option> --}}
                        @foreach ($wali as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <label class="input-group-text" for="inputGroupFile01">Upload</label>
                        <input type="file" name="foto" class="form-control" id="inputGroupFile01" />
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection

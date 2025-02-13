@extends('layoutes.main')
@section('content')
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalLabel">Form Data Pasien</h5>
                    <button type="button" class="btn-close closed" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <form id="formPasien">
                        <!-- Nama -->
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <input type="text" class="form-control" id="nama" placeholder="Masukkan nama"
                                    required>
                            </div>
                        </div>
                        <!-- NIK -->
                        <div class="mb-3">
                            <label for="nik" class="form-label">Kelas</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                                <input type="text" class="form-control angka" id="Kelas" placeholder="Masukkan NIK">
                            </div>
                        </div>
                        <!-- Jenis Kelamin -->
                        <div class="mb-3">
                            <label for="jenisKelamin" class="form-label">Jenis Kelamin</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                                <select class="form-select" id="jenisKelamin" required>
                                    <option value="">Pilih jenis kelamin</option>
                                </select>
                            </div>
                        </div>
                        <!-- Golongan Darah -->
                        <div class="mb-3">
                            <label for="golongandarah" class="form-label">Golongan Darah</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-tint"></i></span>
                                <select class="form-select" id="golongandarah" required>
                                    <option value="">Pilih golongan darah</option>
                                </select>
                            </div>
                        </div>
                        <!-- Usia -->
                        <div class="mb-3">
                            <label for="usia" class="form-label">Usia</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
                                <input type="number" class="form-control angka" id="usia" placeholder="Masukkan usia"
                                    required>
                            </div>
                        </div>
                        <!-- Alamat -->
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-home"></i></span>
                                <textarea class="form-control" id="alamat" rows="3" placeholder="Masukkan alamat" required></textarea>
                            </div>
                        </div>
                        <!-- Tanggal Lahir -->
                        <div class="mb-3">
                            <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                                <input type="date" class="form-control" id="tanggalLahir" required>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary closed" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary btn-submit" onclick="simpan_data()">Simpan</button>
                    <button type="button" class="btn btn-warning btn-editen" onclick="update_data()">Update</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                    data-bs-target="#formModal">
                    Tambah Data
                </button>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Foto</th>
                            <th>NIK</th>
                            <th>NISN</th>
                            <th>Alamat</th>
                            <th>Jenis selamin</th>
                            <th>Ibu</th>
                            <th>Ayah</th>
                            <th>Menu</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Foto</th>
                            <th>NIK</th>
                            <th>NISN</th>
                            <th>Alamat</th>
                            <th>Jenis selamin</th>
                            <th>Ibu</th>
                            <th>Ayah</th>
                            <th>Menu</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($siswa as $s)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $s->nama }}</td>
                                <td>{{ $s->kelas }}</td>
                                <td>
                                    @empty($s->foto)
                                        <img src="{{ url('image/nophoto.jpg') }}" alt="project-image" class="rounded"
                                            style="width: 100%; max-width: 100px; height: auto;">
                                    @else
                                        <img src="{{ url('image') }}/{{ $s->foto }}" alt="project-image"
                                            class="rounded" style="width: 100%; max-width: 100px; height: auto;">
                                    @endempty
                                </td>
                                <td>{{ $s->nik }}</td>
                                <td>{{ $s->nisn }}</td>
                                <td>{{ $s->alamat }}</td>
                                <td>{{ $s->jenis_kelamin }}</td>
                                <td>{{ $s->nama_ibu }}</td>
                                <td>{{ $s->nama_ayah }}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-secondary">show</a>
                                    <a href="{{ route('siswa.edit', $s->id) }}" class="btn btn-sm btn-warning">edit</a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal{{ $s->id }}">
                                        hapus
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

<x-app-layouts>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h6 class="mt-2">{{ $jadwal->matkul->nm_matkul .' - '. $jadwal->kelas->kd_kelas }}</h6>
                {{-- <h6 class="mt-2">{{ $jadwal->kelas->kd_kelas }}</h6> --}}
            </div>
            <hr>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="tugas-tab" data-toggle="tab" href="#tugas" role="tab"
                        aria-controls="tugas" aria-selected="true">Tugas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="ntugas-tab" data-toggle="tab" href="#nilaiTugas" role="tab"
                        aria-controls="ntugas" aria-selected="false">Nilai Tugas</a>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">

                {{-- tugas --}}
                <div class="tab-pane fade show active" id="tugas" role="tabpanel" aria-labelledby="tugas-tab">
                    <div class="table-responsive">
                        {{-- <h4 class="mt-2">{{ $jadwal->matkul->nm_matkul .' - '. $jadwal->matkul->kd_matkul}}</h4>
                        <hr> --}}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Kd Matkul</th>
                                    <th>Judul</th>
                                    <th>Pertemuan</th>
                                    <th>Deskripsi</th>
                                    <th>Pengumpulan</th>
                                    <th>Dibuat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tugas as $i => $tgs)
                                <tr>
                                    <td>{{ $tugas->firstItem() + $i }}</td>
                                    <td>{{ $jadwal->matkul->kd_matkul }}</td>
                                    <td>{{ $tgs->judul }}</td>
                                    <td><span class="badge badge-dark">{{ $tgs->pertemuan }}</span></td>
                                    <td>{{ $tgs->deskripsi }}</td>
                                    <td>{{ date('d F Y ~ H:s', strtotime($tgs->pengumpulan)) }}</td>
                                    <td>{{ date('d F Y', strtotime($tgs->created_at)) }}</td>
                                    <td>
                                        <div class="dropdown d-inline">
                                            <button class="btn btn-info dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item has-icon" href=""><i
                                                        class=" fas fa-file-export"></i> Kirim Tugas</a>
                                                <a class="dropdown-item has-icon font-sm"><i
                                                        class=" fas fa-download"></i> Download</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- Nilai Tugas --}}
                <div class="tab-pane fade" id="nilaiTugas" role="tabpanel" aria-labelledby="ntugas-tab">
                    <div class="row mt-4">
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-app-layouts>
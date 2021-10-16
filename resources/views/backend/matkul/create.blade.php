<x-app-layouts title="Buat Matakuliah">
    @push('styles')
    @endpush
        <div class="card">
            <div class="card-header">
                <h4>Form Create Matakuliah</h4>
            </div>
            <div class="card-body col-md-8 col-sm">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>
                            {!! session('success') !!}
                        </div>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('matkuls.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="matkul">Matakuliah</label>
                        <input type="text" name="nm_matkul" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="sks">SKS</label>
                        <input type="text" name="sks" class="form-control">
                    </div>

                    <div class="form-group">
                        <x-button>Simpan</x-button>
                    </div>
                </form>
            </div>
        </div>
    @push('scrips')
    @endpush
</x-app-layouts>
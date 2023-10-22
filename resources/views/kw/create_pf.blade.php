@include('layout.header')
@include('layout.sitebar')
<div class="container-xl px-4 mt-5">
    @include('sweetalert::alert')
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="card card-header-actions shadow justify-content-between">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-header">
                    Form Input Traininggg Karyawann
                </div>
                <div class="card-body">
                    @php
                    use Illuminate\Support\Facades\DB;
                    $j_training = DB::table('jtrains')                    
                        ->get();
                    $nip = DB::table('pegawais')
                        ->get();
                @endphp
                    <form method="POST" action="/post-mm">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">NIP</label>
                            <select name="nip" id="nip" class="form-control selectx">
                                <option value="">Pilih NIP</option>
                                @foreach ($nip as $n)
                                    <option value="{{ $n->nip }}">{{ $n->nip }} | {{$n->nama_karyawan}}</option>
                            @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Jenis Sertifikat</label>
                            <select name="jenis" id="jenis" class="form-control selectx">
                                <option value="">Pilih Jenis Sertif</option>
                                @foreach ($j_training as $j)
                                    <option value="{{ $j->jenis }}">{{ $j->jenis }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="startDate">Tanggal Sertifikat</label>
                            <input id="startDate" class="form-control" type="date" name="tgl_sertif"/>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Keterangan</label>
                            <textarea  class="form-control" id="exampleInputPassword1" name="keterangan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.1.1/dist/select2-bootstrap-5-theme.min.css" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(".selectx").select2({
        theme: "bootstrap-5"
    });
</script>

</body>

</html>

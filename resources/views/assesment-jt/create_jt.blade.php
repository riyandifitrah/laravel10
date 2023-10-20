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
                    <div class="alert alert-danger alert-dismissible fade show print-error-msg" style="display:none">
                        <ul></ul>
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div class="card-header p-3 mb-2 bg-info text-white" style="font-weight: 700">
                        <i class="bx bx-bar-chart-alt-2 nav_icon"></i> Input Jenis Training
                    </div>
                    <div class="card-body">
                        <form method="POST" enctype="multipart/form-data" action="/post-assesment-jt">
                            @csrf
                            @method('POST')
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jenis Training</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="jenis">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Keterangan</label>
                                <input type="text" class="form-control" id="exampleInputPassword1" name="keterangan">
                            </div>
                            <button type="submit" class="btn btn-primary" id="btn-simpan" name="simpan">Simpan</button>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
<link    rel="stylesheet"href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.1.1/dist/select2-bootstrap-5-theme.min.css" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script data-search-pseudo-elements defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js" crossorigin="anonymous"></script>

<script>
    $(".selectx").select2({
        theme: "bootstrap-5"
    });
    // $(document).on('click', '#btn-simpan', function() {
    //     Swal.fire({
    //         title: 'Konfirmasi',
    //         text: 'Apakah Anda yakin ingin menyimpan data?',
    //         icon: 'question',
    //         showCancelButton: true,
    //         confirmButtonText: 'Ya',
    //         cancelButtonText: 'Tidak',
    //     }).then((result) => {
    //         if (result.isConfirmed) {
    //             let data = gatherFormData();
    //             console.log(data);
    //             sendAjaxRequest(data);
    //         }
    //     });
    // });

    // function gatherFormData() {
    //     let formData = {
    //         jenis: $("#jenis"),
    //         keterangan: $("#keterangan"),
    //     }
        
    //     return formData;
    // }

    // function sendAjaxRequest(data) {
    //     $.ajax({
    //         type: 'POST',
    //         url: "{{ route('store-jt') }}",
    //         data: data,
    //         dataType: 'json',
    //         success: function(data) {
    //             if ($.isEmptyObject(data.error)) {
    //                 Swal.fire({
    //                     icon: 'success',
    //                     title: 'Data berhasil disimpan',
    //                     showConfirmButton: true,
    //                     confirmButtonText: "Next",
    //                 }).then((value) => {
    //                     if (value) {
    //                         window.location.href = '/assesment-jt';

    //                     }
    //                 });
    //             } else {
    //                 Swal.fire({
    //                     icon: 'error',
    //                     title: 'Data gagal disimpan',
    //                     text: "Cek pesan error diatas!",
    //                     showConfirmButton: false,
    //                     timer: 1500,
    //                 });
    //                 printErrorMsg(data.error);
    //             }
    //         }
    //     });
    // }

    // function printErrorMsg(msg) {
    //     $(".print-error-msg").find("ul").html('');
    //     $(".print-error-msg").css('display', 'block');
    //     $.each(msg, function(key, value) {
    //         $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
    //     });
    // }
</script>
</body>

</html>

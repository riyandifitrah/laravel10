@include('layout.header')
@include('layout.sitebar')
    <!--Container Main start-->
    <div class="container">
        <div class="row my-5">
            <div class="col-lg-12 mt-5">
                <h2>Data Karyawan</h2>
            </div>
        </div>
        <div class="container-xl px-4 mt-n10">
            <div class="card">
                <div class="card-header">Karyawan</div>
                <div class="card-body">
                    <table class="table table-striped table-hover table-sm" id="myTable" style="width:100%">
                        <thead>
                            <tr>
                                <th width="10">No.</th>
                                <th>NIP</th>
                                <th>Nama Karyawan</th>
                                <th>Jenis</th>
                                <th>Tanggal Sertifikat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
            
    </div>
    <!--Container Main end-->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>
<script>
    let datatable = $('#myTable').DataTable({
        processing: true,
        serverSide: true,
        // responsive: {
        //     breakpoints: [
        //     {name: 'bigdesktop', width: Infinity},
        //     {name: 'meddesktop', width: 1480},
        //     {name: 'smalldesktop', width: 1280},
        //     {name: 'medium', width: 1188},
        //     {name: 'tabletl', width: 1024},
        //     {name: 'btwtabllandp', width: 848},
        //     {name: 'tabletp', width: 768},
        //     {name: 'mobilel', width: 480},
        //     {name: 'mobilep', width: 320}
        //     ]
        // },
        ordering: true,
        ajax: {
          url: '{!! url()->current() !!}',
        },
        columns: [
            {
            data: null,
            render: function (data, type, row, meta) {
                
                return meta.row + 1;
            },
            name: 'id',
        },
                {data: 'nip', name:'nip'},
                {data: 'nama_karyawan', name:'nama_karyawan'},
                {data: 'jenis', name:'jenis'},
                {data: 'tgl_sertif', name:'tgl_sertif'},
                // {data: 'jabatan', name:'jabatan'},
                {data: 'action', name:'action', 
                orderable:false,
                searcable:false},
        ]
    });

    // window.setTimeout(() => {
    //     $(".hide-alert").fadeTo(500, 0).slideUp(300, () => {
    //         $(this).remove(); 
    //     });
    // }, 4000);
</script>

</body>
</html>

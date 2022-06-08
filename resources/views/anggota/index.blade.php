@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            {{-- <h2 class="mb-4 h5">{{ __('Users') }}</h2> --}}
            <div class="card-header border-bottom d-flex align-items-center justify-content-between"><h2 class="fs-5 fw-bold mb-0">Anggota</h2>


            </div>
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="file" class="custom-file-input" id="inputGroupFile04">
                  <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                </div>
                <div class="input-group-append">
                  <button class="btn btn-success" type="submit">Unggah</button><a class="btn btn-warning" href="{{ route('export') }}">Unduh</a>
                </div>
              </div>
                {{-- <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a> --}}
            </form><br>
            {{-- <p class="text-info mb-0">Sample table page</p> --}}
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
            @endif
            @can('anggota-create')
                <a href="{{ route('anggotas.create') }}" class="btn btn-success" style="width: 11%;">Tambah Anggota</a>
                @endcan

            <table class="table table-hover display nowrap anggota_datatable style="width:100%"">
                <thead>
                    <tr>
                        <th class="border-gray-200">id</th>
                        <th class="border-gray-200">nik</th>
                        <th class="border-gray-200">nama</th>
                        <th class="border-gray-200">golongan</th>
                        <th class="border-gray-200">golongan - </th>
                        <th class="border-gray-200">ranting</th>
                        <th class="border-gray-200">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
            {{-- {!! $users->render() !!} --}}

        </div>
    </div>


<div class="modal hide fade" id="view-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Lihat Anggota</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table border="0" width="100%">
                    <tr>
                        <td>NIK</td><td>: <font id="nik"></font></td>
                    </tr>
                    <tr>
                        <td>Nama</td><td>: <font id="nama"></font></td>
                    </tr>
                    <tr>
                        <td>tingkat</td><td>: <font id="tingkat"></font></td>
                        
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link text-gray ms-auto" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal hide fade" id="view-modal-ubah">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Ubah Anggota</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" id="AnggotaForm" name="AnggotaForm" class="form-horizontal" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" id="eid">
                    <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">NIK</label>
                    <div class="col-sm-12">
                    <input type="text" class="form-control" id="enik" name="nik" placeholder="NIK" maxlength="50" required="">
                    </div>
                    </div>  
                    <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-12">
                    <input type="text" class="form-control" id="enama" name="nama" placeholder="Nama" maxlength="50" required="">
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-sm-2 control-label">Tingkat</label>
                    <div class="col-sm-12">
                    <input type="text" class="form-control" id="etingkat" name="tingkat" placeholder="Tingkat" required="">
                    </div>
                    </div>
                    <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary" id="btn-save">Simpan
                    </button>
                    </div>
                    </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link text-gray ms-auto" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>




    <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
        $(function () {
          var table = $('.anggota_datatable').DataTable({
              processing: true,
              serverSide: true,
              rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true,
              ajax: "{{ route('anggotas.index') }}",
              columns: [
                  {data: 'id', name: 'id'},
                  {data: 'nik', name: 'nik'},
                  {data: 'nama', name: 'nama'},
                  {data: 'golongan_anggota', name: 'golongan_anggota'},
                  {data: 'golongan_anggotab', name: 'golongan_anggotab'},
                  {data: 'ranting', name: 'ranting'},
                  {data: 'action', name: 'action', orderable: false, searchable: false},
              ]
          });
        });
      </script>
<script>
function hapus(e) {
    var url = '{{ route("anggotas.destroy", ":id") }}';
    url = url.replace(':id', e);
    
    Swal.fire({
        title: "Apakah Anda Yakin ?",
        text: "Data Yang Sudah Dihapus Tidak Bisa Dikembalikan!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, Tetap Hapus!"
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: url,
                type: "delete",
                dataType: 'json',
                success: function (data) {
                    if (data.type === 'success') {
                        $('.anggota_datatable').DataTable().ajax.reload();
                        Swal.fire({

                          icon: 'success',
                          title: 'Data telah dihapus',
                          showConfirmButton: false,
                          timer: 1500
                        })

                    } else if (data.type === 'danger') {
                        swal("Error deleting!", "Try again", "error");
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    swal("Error deleting!", "Try again", "error");
                }
            });
        }
    });
}

function showProject(id)
    {
        $("#name-info").html("");
        $("#description-info").html("");
        let url =   "/pramuka/public/anggotas/" + id +"";
        $.ajax({
            url: url,
            type: "GET",
            success: function(response) {
                let anggota = response.anggota;

                $("#nik").html(anggota.nik);
                $("#nama").html(anggota.nama);
                $("#nama").val(anggota.nama);
                $("#tingkat").html(anggota.golongan_anggota);
                $("#view-modal").modal('show');

            },
            error: function(response) {
                console.log(response.responseJSON)
            }
        });
    }

    function ubah(id)
    {
        
        let url =   "/pramuka/public/anggotas/" + id +"/edit";
        $.ajax({
            url: url,
            type: "GET",
            success: function(response) {
                let anggota = response.anggota;

                $("#eid").val(anggota.id);
                $("#enik").val(anggota.nik);
                $("#eama").val(anggota.nama);
                $("#enama").val(anggota.nama);
                $("#etingkat").val(anggota.golongan_anggota);
                $("#view-modal-ubah").modal('show');

            },
            error: function(response) {
                console.log(response.responseJSON)
            }
        });
    }

$('#AnggotaForm').submit(function(e) {
e.preventDefault();
var formData = new FormData(this);
$.ajax({
type:'POST',
url: "{{ url('anggotas')}}",
data: formData,
cache:false,
contentType: false,
processData: false,
success: (data) => {
$("#view-modal-ubah").modal('hide');
var oTable = $('.anggota_datatable').dataTable();
oTable.fnDraw(false);
$("#btn-save").html('Submit');
$("#btn-save"). attr("disabled", false);
},
error: function(data){
console.log(data);
}
});
});
    
</script>
@endsection

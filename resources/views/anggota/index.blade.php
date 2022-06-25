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
                  <button class="btn btn-success unggah" type="submit">Unggah</button><a class="btn btn-warning" href="{{ route('export') }}">Unduh</a></form>
                  
                    <?php 
                    $a=Auth::user()->name;
                    $b="/destroyall";
                    ?>
                    
                    <a href="javascript:void(0)" class="btn btn-danger btn-sm" title="Hapus User" onclick="hapusall('{{ Auth::user()->name; }}')" >Hapus Semua Data Ranting {{ Auth::user()->name; }} </a>
                      
                </div>
              </div>
            
            <br>
            
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
            @endif
            @can('anggota-create')
             <a href="https://kwarcab.bandungkab.go.id/format_import.xlsx" class="btn btn-info"> Download Format Excel Untuk Import Data</a>
            <a class="btn btn-success" onClick="add()" href="javascript:void(0)">Tambah Anggota</a>
                @endcan
<hr>
            <table class="table table-hover display nowrap anggota_datatable style="width:100%"">
                <thead>
                    <tr>
                        <th class="border-gray-200">no</th>
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
         

        </div>
    </div>

 

<div class="modal hide fade" id="view-modal">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
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
                        <td>Jenis Kelamin</td><td>: <font id="jenis_kelamin"></font></td>
                    </tr>
                    <tr>
                        <td>Tempat Lahir</td><td>: <font id="tempat_lahir"></font></td>
                    </tr>
                    <tr>
                        <td>Tanggal Lahir</td><td>: <font id="tgl_lahir"></font></td>
                    </tr>
                    <tr>
                        <td>Golongan</td><td>: <font id="golongan_anggota"></font></td>
                    </tr>
                    <tr>
                        <td>Golongan-</td><td>: <font id="golongan_anggotab"></font></td>
                    </tr>
                    <tr>
                        <td>Basis</td><td>: <font id="basis"></font></td>
                    </tr>
                    <tr>
                        <td>No Gugus Depan</td><td>: <font id="no_gudep"></font></td>
                    </tr>
                    <tr>
                        <td>Agama</td><td>: <font id="agama"></font></td>
                    </tr>
                    <tr>
                        <td>Golongan Darah</td><td>: <font id="goldar"></font></td>
                    </tr>
                    <tr>
                        <td>Alamat</td><td>: <font id="alamat"></font></td>
                    </tr>
                    <tr>
                        <td>Ranting</td><td>: <font id="ranting"></font></td>
                    </tr>
                    <tr>
                        <td>NTA</td><td>: <font id="nta"></font></td>
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
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title">Form Anggota</h2>
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
                    <label for="name" class="col-sm-6 control-label">Jenis Kelamin</label>
                    <div class="col-sm-12">
                    <select class="form-control" id="ejenis_kelamin" name="jenis_kelamin">
                        <option value="LAKI-LAKI">LAKI-LAKI</option>
                        <option value="PEREMPUAN">PEREMPUAN</option>
                    </select>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="name" class="col-sm-6 control-label">Tempat Lahir</label>
                    <div class="col-sm-12">
                    <input type="text" class="form-control" id="etempat_lahir" name="tempat_lahir" placeholder="Bandung" maxlength="50" required="">
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="name" class="col-sm-6 control-label">Tanggal Lahir</label>
                    <div class="col-sm-12">
                    <input type="text" class="form-control" id="etgl_lahir" name="tgl_lahir" placeholder="2000-01-31" maxlength="50" required="">
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-6 control-label">Golongan</label>
                        <div class="col-sm-12">
                        <select class="form-control" id="egolongan_anggota" name="golongan_anggota">
                            <option value="SIAGA">SIAGA</option>
                            <option value="PENGGALANG">PENGGALANG</option>
                            <option value="PENEGAK">PENEGAK</option>
                            <option value="PANDEGA">PANDEGA</option>
                            <option value="PEMBINA">PEMBINA</option>
                    </select>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-6 control-label">Golongan-</label>
                        <div class="col-sm-12">
                        <select class="form-control" id="egolongan_anggotab" name="golongan_anggotab">
                            <option  value="MULA">Mula</option>
                        <option  value="BANTU">Bantu</option>
                        <option  value="TATA">Tata</option>
                        <option  value="RAMU">Ramu</option>
                        <option  value="RAKIT">Rakit</option>
                        <option  value="TERAP">Terap</option>
                        <option value="BANTARA">Bantara</option>
                        <option value="LAKSANA">Laksana</option>
                        <option  value="GARUDA">Garuda</option>
                    </select>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-6 control-label">Basis</label>
                        <div class="col-sm-12">
                        <input type="text" class="form-control" id="ebasis" name="basis" placeholder="SMPN 1 xxxx" maxlength="50" required="">
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-6 control-label">No Gugus Depan</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="eno_gudep" name="no_gudep" placeholder="" maxlength="50" required="">
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-6 control-label">Agama</label>
                                <div class="col-sm-12">
                                <select class="form-control" id="eagama" name="agama">
                                    <option value="ISLAM">ISLAM</option>
                                    <option value="KRISTEN">KRISTEN</option>
                                    <option value="KATOLIK">KATOLIK</option>
                                    <option value="HINDU">HINDU</option>
                                    <option value="BUDHA">BUDHA</option>
                                    <option value="KONGHUCHU">KONGHUCHU</option>
                            </select>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-6 control-label">Gologan Darah</label>
                                <div class="col-sm-12">
                                <select class="form-control" id="egoldar" name="goldar">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                    <option value="TIDAK TAHU">TIDAK TAHU</option>
                            </select>
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-6 control-label">Alamat</label>
                                <div class="col-sm-12">
                                <textarea class="form-control" id="ealamat" name="alamat"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-6 control-label">Ranting</label>
                            <div class="col-sm-12">
                            <select class="form-control" id="eranting" name="ranting">
                               
                                
                        <option  value="KABUPATEN">KABUPATEN - 09.04</option>
                        <option  value="RANCABALI">RANCABALI - 09.04.001</option>
                        <option  value="CIWIDEY">CIWIDEY - 09.04.002</option>
                        <option  value="PASIR JAMBU">PASIR JAMBU - 09.04.003</option>
                        <option  value="SOREANG">SOREANG - 09.04.004</option>
                        <option  value="CANGKUANG">CANGKUANG - 09.04.005</option>
                        <option  value="PANGALENGAN">PANGALENGAN - 09.04.006</option>
                        <option  value="CIMAUNG">CIMAUNG - 09.04.007</option>
                        <option  value="BANJARAN">BANJARAN - 09.04.008</option>
                        <option  value="ARJASARI">ARJASARI - 09.04.009</option>
                        <option  value="PAMEUNGPEUK">PAMEUNGPEUK - 09.04.010</option>
                        <option value="BALEENDAH">BALEENDAH - 09.04.011</option>
                        <option  value="CIPARAY">CIPARAY - 09.04.012</option>
                        <option  value="PACET">PACET - 09.04.013</option>
                        <option  value="KERTASARI">KERTASARI - 09.04.014</option>
                        <option  value="IBUN">IBUN - 09.04.015</option>
                        <option value="MAJALAYA">MAJALAYA - 09.04.016</option>
                        <option  value="PASEH">PASEH - 09.04.017</option>
                        <option  value="SOLOKANJERUK">SOLOKANJERUK - 09.04.018</option>
                        <option  value="CIKANCUNG">CIKANCUNG - 09.04.019</option>
                        <option  value="NAGREG">NAGREG - 09.04.020</option>
                        <option  value="CICALENGKA">CICALENGKA - 09.04.021</option>
                        <option value="RANCAEKEK">RANCAEKEK - 09.04.022</option>
                        <option  value="CILEUNYI">CILEUNYI - 09.04.023</option>
                        <option  value="CILENGKRANG">CILENGKRANG - 09.04.024</option>
                        <option  value="CIMENYAN">CIMENYAN - 09.04.025</option>
                        <option  value="BOJONGSOANG">BOJONGSOANG - 09.04.026</option>
                        <option  value="DAYEUHKOLOT">DAYEUHKOLOT - 09.04.027</option>
                        <option  value="KATAPANG">KATAPANG - 09.04.028</option>
                        <option  value="MARGAHAYU">MARGAHAYU - 09.04.029</option>
                        <option value="MARGAASIH">MARGAASIH - 09.04.030</option>
                        <option  value="KUTAWARINGIN">KUTAWARINGIN - 09.04.031</option>
                        </select>
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-sm-6 control-label">NTA</label>
                            <div class="col-sm-12">
                            <input type="text" class="form-control" id="enta" name="nta" placeholder="" maxlength="50" >
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
                  { "data": null,"sortable": false,searchable: false ,
                        render: function (data, type, row, meta) {
                         return meta.row + meta.settings._iDisplayStart + 1;
                        }  
                    },
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

function add(){
$('#CompanyForm').trigger("reset");
$('#CompanyModal').html("Add Company");
$('#view-modal-ubah').modal('show');
$('#id').val('');
}

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

function hapusall(e) {
    var url = '{{ route("anggotas.destroyall", ":id") }}';
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
                type: "GET",
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
        let url =   "/anggotas/" + id +"";
        $.ajax({
            url: url,
            type: "GET",
            success: function(response) {
                let anggota = response.anggota;
                var id = $('#recordID').val(anggota.id)
                $("#ide").html(anggota.id);
                $("#idem").val(anggota.id);
                $("#nik").html(anggota.nik);
                $("#nama").html(anggota.nama);
                $("#nama").html(anggota.nama);
                $("#jenis_kelamin").html(anggota.jenis_kelamin);
                $("#tempat_lahir").html(anggota.tempat_lahir);
                $("#tgl_lahir").html(anggota.tgl_lahir);
                $("#golongan_anggota").html(anggota.golongan_anggota);
                $("#golongan_anggotab").html(anggota.golongan_anggotab);
                $("#basis").html(anggota.basis);
                $("#no_gudep").html(anggota.no_gudep);
                $("#agama").html(anggota.agama);
                $("#goldar").html(anggota.goldar);
                $("#alamat").html(anggota.alamat);
                $("#ranting").html(anggota.ranting);
                $("#nta").html(anggota.nta);
                $("#view-modal").modal('show');

            },
            error: function(response) {
                console.log(response.responseJSON)
            }
        });
    }

    function ubah(id)
    {

        let url =   "/anggotas/" + id +"/edit";
        $.ajax({
            url: url,
            type: "GET",
            success: function(response) {
                let anggota = response.anggota;

                $("#eid").val(anggota.id);
                $("#enik").val(anggota.nik);
                $("#enama").val(anggota.nama);
                $("#ejenis_kelamin").val(anggota.jenis_kelamin);
                $("#etempat_lahir").val(anggota.tempat_lahir);
                $("#etgl_lahir").val(anggota.tgl_lahir);
                $("#egolongan_anggota").val(anggota.golongan_anggota);
                $("#egolongan_anggotab").val(anggota.golongan_anggotab);
                $("#ebasis").val(anggota.basis);
                $("#eno_gudep").val(anggota.no_gudep);
                $("#eagama").val(anggota.agama);
                $("#egoldar").val(anggota.goldar);
                $("#ealamat").val(anggota.alamat);
                $("#eranting").val(anggota.ranting);
                $("#enta").val(anggota.nta);
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

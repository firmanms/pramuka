<!DOCTYPE html>
<html>
<head>
<title>Resume</title>
<style>
body {
  background-image: url('');
   visibility: visible;
}
</style>

</head>
<body onload="window.print()">
<table width="100%"  style="border-style: none none solid none;">
    <tr>
        <td width="7%" align="center"><img src="{{ asset('image/pramukakiri.png') }}" width="60" height="60"></td>
        <td width="86%"align="center">
            <font style="font-family: Arial;font-size:25pt;"><b>GERAKAN PRAMUKA</b></font><br>
            <font style="font-family: Arial;font-size:18pt;"><b>KWARTIR CABANG KABUPATEN BANDUNG</b></font><br>
            <font style="font-family: Arial;font-size:11pt;"><b>Jl.RAA. Wiratakusumah No.19 Baleendah Bandung 40375</b></font><br>
        </td>
        <td width="7%"align="center"><img src="{{ asset('image/pramukakanan.png') }}" width="60" height="60"></td>
    </tr>
</table>
<center><h1>Biodata Anggota Pramuka</h1></center>
<table>
    <tr>
        <td width="25%">NIK</td>
        <td width="75%">: {{ $profil->nik }}</td>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td>: {{ $profil->nama }}</td>
    </tr>
    <tr>
        <td>Tempat, Tanggal Lahir</td>
        <td>: {{ $profil->tempat_lahir ?? '' }}, {{ Carbon\Carbon::parse($profil->tgl_lahir)->format('d-m-Y') ?? '' }} </td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>: {{ $profil->jenis_kelamin ?? '' }}</td>
    </tr>
    <tr>
        <td>Alamat Rumah</td>
        <td>: {{ $profil->alamat ?? '' }}</td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>: {{ $profil->agama ?? '' }}</td>
    </tr>
    <tr>
        <td>Golongan Darah</td>
        <td>: {{ $profil->goldar ?? '' }}</td>
    </tr>
    <!--<tr>-->
    <!--    <td>No Telepon</td>-->
    <!--    <td>: {{ $profil->notel ?? '' }}</td>-->
    <!--</tr>-->
    <!--<tr>-->
    <!--    <td>Email</td>-->
    <!--    <td>: {{ Auth::user()->email ?? '' }}</td>-->
    <!--</tr>-->
    <tr>
        <td>Golongan</td>
        <td>: {{ $profil->golongan_anggota ?? '' }}</td>
    </tr>
    <tr>
        <td>Tingkat</td>
        <td>: {{ $profil->golongan_anggotab ?? '' }}</td>
    </tr>
    <!--<tr>-->
    <!--    <td>Jabatan</td>-->
    <!--    <td>: {{ $profil->jab ?? '' }}</td>-->
    <!--</tr>-->
    <tr>
        <td>No Gugus Depan</td>
        <td>: {{ $profil->no_gudep ?? '' }}</td>
    </tr>
    <!--<tr>-->
    <!--    <td>Nama Gugus Depan</td>-->
    <!--    <td>: {{ $profil->gusdep ?? '' }}</td>-->
    <!--</tr>-->
    <tr>
        <td>Basis</td>
        <td>: {{ $profil->basis ?? '' }}</td>
    </tr>
    <tr>
        <td>Kwartir</td>
        <td>: {{ $profil->ranting ?? '' }}</td>
    </tr>
</table>
<?php
                    if($profil->foto==''){
                        $a="";
                    }else{
                        $a="$profil->foto";
                    }
                    ?>
                    <br><br><br>
<table>
    <tr>
        <td width="50%" ><img src="{{ url($a) ?? '' }}" height="140" width="100" alt="" /></td>
        <td width="50%" align="center">Bandung, .........................<br><br><br><br><br><br>
        <b>(<u>{{ $profil->nama }}</b></u>)</td>
    </tr>
</table>

</body>
</html>
    
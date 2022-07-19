<table>
    <thead>
    <tr>
        <th>nik</th>
        <th>nama</th>
        <th>jenis_kelamin</th>
        <th>tempat_lahir</th>
        <th>tgl_lahir</th>
        <th>golongan_anggota</th>
        <th>golongan_anggotab</th>
        <th>basis</th>
        <th>no_gudep</th>
        <th>agama</th>
        <th>goldar</th>
        <th>alamat</th>
        <th>ranting</th>

        <!--<th>Nama</th>-->
        <!--<th>Nip</th>-->
    </tr>
    </thead>
    <tbody>
    @foreach($data as $item)
        <tr>
            <td>'{{ $item->nik }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->jenis_kelamin }}</td>
            <td>{{ $item->tempat_lahir }}</td>
            <td>{{ $item->tgl_lahir }}</td>
            <td>{{ $item->golongan_anggota }}</td>
            <td>{{ $item->golongan_anggotab }}</td>
            <td>{{ $item->basis }}</td>
            <td>{{ $item->no_gudep }}</td>
            <td>{{ $item->agama }}</td>
            <td>{{ $item->goldar }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->ranting }}</td>
            
            
        </tr>
    @endforeach
    </tbody>
</table>
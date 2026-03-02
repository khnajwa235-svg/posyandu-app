<!DOCTYPE html>
<html>
<head>
    <title>Data Laporan Posyandu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-success text-white d-flex justify-content-between">
            <span>Data Laporan Posyandu</span>
            <a href="/laporan/create" class="btn btn-light btn-sm">Tambah Data</a>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Nama Posyandu</th>
                        <th>Tanggal</th>
                        <th>Balita</th>
                        <th>Ibu Hamil</th>
                        <th>Gizi Kurang</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td>{{ $row->nama_posyandu }}</td>
                        <td>{{ $row->tanggal }}</td>
                        <td>{{ $row->jumlah_balita }}</td>
                        <td>{{ $row->jumlah_ibu_hamil }}</td>
                        <td>{{ $row->gizi_kurang }}</td>
                            <td>
        <a href="/laporan/edit/{{ $row->id }}" class="btn btn-warning btn-sm">
            Edit
        </a>
    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
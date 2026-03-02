<!DOCTYPE html>
<html>
<head>
    <title>Edit Laporan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-warning">
            Edit Laporan Posyandu
        </div>
        <div class="card-body">

            <form action="/laporan/update/{{ $data->id }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label>Nama Posyandu</label>
                    <input type="text" name="nama_posyandu" class="form-control" value="{{ $data->nama_posyandu }}">
                </div>

                <div class="mb-3">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" value="{{ $data->tanggal }}">
                </div>

                <div class="mb-3">
                    <label>Jumlah Balita</label>
                    <input type="number" name="jumlah_balita" class="form-control" value="{{ $data->jumlah_balita }}">
                </div>

                <div class="mb-3">
                    <label>Jumlah Ibu Hamil</label>
                    <input type="number" name="jumlah_ibu_hamil" class="form-control" value="{{ $data->jumlah_ibu_hamil }}">
                </div>

                <div class="mb-3">
                    <label>Gizi Kurang</label>
                    <input type="number" name="gizi_kurang" class="form-control" value="{{ $data->gizi_kurang }}">
                </div>

                <button class="btn btn-primary">Update</button>
                <a href="/laporan" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>
</div>

</body>
</html>
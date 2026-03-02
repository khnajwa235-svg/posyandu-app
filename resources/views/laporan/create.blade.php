<!DOCTYPE html>
<html>
<head>
    <title>Tambah Laporan Posyandu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            Form Input Laporan Posyandu
        </div>
        <div class="card-body">

            <form action="/laporan/store" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Posyandu</label>
                    <input type="text" name="nama_posyandu" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jumlah Balita</label>
                    <input type="number" name="jumlah_balita" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Jumlah Ibu Hamil</label>
                    <input type="number" name="jumlah_ibu_hamil" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">Gizi Kurang</label>
                    <input type="number" name="gizi_kurang" class="form-control">
                </div>

                <button class="btn btn-success">Simpan</button>
                <a href="/laporan" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>
</div>

</body>
</html>
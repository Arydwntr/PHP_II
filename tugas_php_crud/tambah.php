<!DOCTYPE html>
<html>
<head>
	<head>
    <title>Data Pelanggan</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
</head>

<body>
    <!-- Menampilkan data order dan customer dalam tabel menggunakan bootstrap -->
	<div class="container">
        <div class="m-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
            <h1 class="text-center">Tambah Data</h1>
            <form id="form_tambah" action="proses_tambah.php" method="post">
				<div class="form-group mb-3">
                    <div class="form-label">Nama</div>
                    <input type="text" name="nama" data-name="Nama" class="required form-control">
                </div>
				<div class="form-group mb-3">
					<label>Jenis Kelamin</label>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jenis_kelamin" value="pria" id="pria">
						<label class="form-check-label" for="pria">
								Pria
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jenis_kelamin" value="wanita" id="wanita">
						<label class="form-check-label" for="wanita" >
								Wanita
						</label>
					</div>
				</div>
				<div class="form-group mb-3">
                    <div class="form-label">Telpon</div>
                    <input type="number" name="telpon" data-name="Telpon" class="required form-control">
                </div>
                <div class="form-group mb-3">
                    <div class="form-label">Alamat</div>
                    <textarea name="alamat" data-name="Alamat" class="required form-control"></textarea>
                </div>
                <div class="d-flex justify-content-between mb-3">
                	<a href="index.php" class="btn btn-danger btn-sm"><i class="bi bi-chevron-left"></i> Kembali</a>
                    <input type="submit" name="Submit" value="+ Tambah Data" class="btn btn-primary btn-sm">
                </div>
                </tbody>
                </table>
            </form>
        </div>
    </div>
</body>

</html>

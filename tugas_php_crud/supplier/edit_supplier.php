<?php
include "connection.php";
$id = $_GET['id'];

$query = mysqli_query($connection,"SELECT * FROM supplier where id='$id'");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Supplier</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <!-- Menampilkan data order dan customer dalam tabel menggunakan bootstrap -->
    <div class="container">
    <?php
        while($data = mysqli_fetch_array($query)){
            ?>
        <div class="m-5 shadow-lg p-3 mb-5 bg-body-tertiary rounded">
            <h1 class="text-center">Edit Data Supplier</h1>
            <form id="form_tambah" action="proses_edit_supplier.php?id=<?= $data['id']?>" method="post">
                <div class="form-group mb-3">
                    <div class="form-label">Nama </div>
                    <input type="text" name="nama" data-name="Nama" class="required form-control" value="<?= $data['nama']?>">
                </div>
                <div class="form-group mb-3">
                    <div class="form-label">telpon</div>
                    <input type="number" name="telpon" data-name="Telpon" class="required form-control" value="<?= $data['telpon']?>">
                </div>
                <div class="form-group mb-3">
                    <div class="form-label">Alamat</div>
                    <textarea name="alamat" data-name="Alamat" class="required form-control"><?= $data['alamat']?></textarea>
                </div>
                <div class="d-flex justify-content-between mb-3">
                    <a href="supplier.php" class="btn btn-danger btn-sm"><i class="bi bi-chevron-left"></i> Kembali</a>
                    <input type="submit" name="Submit" value="Edit Data" class="btn btn-warning btn-sm">
                </div>
                </tbody>
                </table>
            </form>
        </div>
        <?php } ?>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendaftaran ISE!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            background: white;
        }

        .card {
            border: none;
            border-radius: 1rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .form-control {
            border-radius: 0.5rem;
        }

        .btn-custom {
            background-color: #28a745;
            color: white;
            border-radius: 2rem;
            transition: background-color 0.3s ease;
        }

        .btn-custom:hover {
            background-color: #218838;
        }

        h3 {
            font-weight: bold;
            color: #343a40;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="card p-5" style="width: 100%; max-width: 500px;">
            <h3 class="text-center mb-4">Form Pendaftaran ISE</h3>
            <form action="https://google.co.id" method="get" onsubmit="return validasi()">
                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="text" name="nrp" id="nrp" class="form-control" placeholder="Masukkan 10 Digit NRP">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Anda">
                </div>
                <button type="submit" class="btn btn-custom btn-block">Daftar Sekarang</button>
            </form>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function validasi() {
            var nrp = document.getElementById("nrp").value.trim();
            var nama = document.getElementById("nama").value.trim();

            if (nrp.length === 0) {
                Swal.fire("Kesalahan Input", "NRP tidak boleh kosong", "error");
                return false;
            }

            if (nama.length === 0) {
                Swal.fire("Kesalahan Input", "Nama tidak boleh kosong", "error");
                return false;
            }

            if (nama.length < 2) {
                Swal.fire("Kesalahan Input", "Nama minimal harus 2 huruf", "error");
                return false;
            }

            if (/\d/.test(nama)) {
                Swal.fire("Kesalahan Input", "Nama tidak boleh mengandung angka", "error");
                return false;
            }

            return true;
        }
    </script>
</body>
</html>

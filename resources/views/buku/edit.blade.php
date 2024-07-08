<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota</title>
    <style>
        body {
            background-color: #f0f0f0; /* Warna latar belakang netral */
            color: #333; /* Warna teks netral */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
            margin-top: 20px;
        }
        form {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #fff; /* Warna latar belakang form */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555; /* Warna label */
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ddd; /* Warna border input */
            border-radius: 4px;
            background-color: #f9f9f9; /* Warna latar belakang input */
            color: #333; /* Warna teks input */
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007acc; /* Warna tombol update */
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #005f99; /* Warna tombol update saat dihover */
        }
    </style>
</head>
<body>
    <h1>Edit Anggota</h1>
    <form action="{{ route('buku.update', $buku->no_buku) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $buku->judul }}" required>
        </div>

        <div class="mb-3">
            <label for="edisi" class="form-label">Edisi</label>
            <input type="text" class="form-control" id="edisi" name="edisi" value="{{ $buku->edisi }}" required>
        </div>

        <div class="mb-3">
            <label for="no_rak" class="form-label">No Rak</label>
            <input type="number" class="form-control" id="no_rak" name="no_rak" value="{{ $buku->no_rak }}" required>
        </div>

        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="date" class="form-control" id="tahun" name="tahun" value="{{ $buku->tahun }}" required>
        </div>

        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{ $buku->penerbit }}" required>
        </div>

        <div class="mb-3">
            <label for="kd_penulis" class="form-label">Kode Penulis</label>
            <input type="number" class="form-control" id="kd_penulis" name="kd_penulis" value="{{ $buku->kd_penulis }}" required>
        </div>

        <input type="submit" value="Update">
    </form>
</body>
</html>

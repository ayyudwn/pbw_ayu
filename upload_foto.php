<?php
include "koneksi.php"; // Sambungkan ke database

if (isset($_POST['simpan'])) {
    // Ambil data dari form
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $isi = mysqli_real_escape_string($conn, $_POST['isi']);
    $tanggal = date('Y-m-d H:i:s');
    $username = "admin"; // Ganti dengan username aktif, misal dari sesi login

    // Proses upload gambar
    $gambar = "";
    if (!empty($_FILES['gambar']['name'])) {
        $nama_gambar = basename($_FILES['gambar']['name']);
        $target_dir = "produk/";
        $target_file = $target_dir . $nama_gambar;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
        // Validasi file
        $valid_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array($imageFileType, $valid_extensions)) {
            if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
                $gambar = $nama_gambar;
            } else {
                echo "Gagal mengunggah gambar.";
                exit;
            }
        } else {
            echo "Format file tidak didukung. Hanya JPG, JPEG, PNG, dan GIF diperbolehkan.";
            exit;
        }
    }

    // Simpan data ke database
    $sql = "INSERT INTO article (judul, isi, gambar, tanggal, username) 
            VALUES ('$judul', '$isi', '$gambar', '$tanggal', '$username')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Artikel berhasil ditambahkan!'); window.location='article.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Jika proses edit data
if (isset($_POST['edit'])) {
    $id = (int)$_POST['id'];
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $isi = mysqli_real_escape_string($conn, $_POST['isi']);
    $gambar_lama = $_POST['gambar_lama'];

    // Proses gambar baru
    $gambar_baru = $gambar_lama;
    if (!empty($_FILES['gambar']['name'])) {
        $nama_gambar = basename($_FILES['gambar']['name']);
        $target_dir = "produk/";
        $target_file = $target_dir . $nama_gambar;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        
        // Validasi file
        $valid_extensions = ['jpg', 'jpeg', 'png', 'gif'];
        if (in_array($imageFileType, $valid_extensions)) {
            if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
                // Hapus gambar lama jika ada
                if ($gambar_lama && file_exists("produk/$gambar_lama")) {
                    unlink("produk/$gambar_lama");
                }
                $gambar_baru = $nama_gambar;
            } else {
                echo "Gagal mengunggah gambar.";
                exit;
            }
        } else {
            echo "Format file tidak didukung. Hanya JPG, JPEG, PNG, dan GIF diperbolehkan.";
            exit;
        }
    }

    // Update data
    $sql = "UPDATE article SET 
            judul = '$judul', 
            isi = '$isi', 
            gambar = '$gambar_baru' 
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Artikel berhasil diperbarui!'); window.location='article.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Jika proses hapus data
if (isset($_POST['hapus'])) {
    $id = (int)$_POST['id'];
    $gambar = $_POST['gambar'];

    // Hapus gambar jika ada
    if ($gambar && file_exists("produk/$gambar")) {
        unlink("produk/$gambar");
    }

    // Hapus data
    $sql = "DELETE FROM article WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Artikel berhasil dihapus!'); window.location='article.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<?php
// Memulai session untuk menyimpan preferensi mode
session_start();

// Menangani perubahan mode
if (isset($_GET['mode'])) {
    $_SESSION['mode'] = $_GET['mode'];
}

// Set mode default ke light jika belum diatur
$mode = isset($_SESSION['mode']) ? $_SESSION['mode'] : 'light';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Mode dan Light Mode</title>
    <style>
        /* Style umum */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            text-align: center;
            padding: 20px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        /* Light Mode */
        body.light {
            background-color: #ffffff;
            color: #000000;
        }

        .light .btn {
            background-color: #f0f0f0;
            color: #000000;
        }

        /* Dark Mode */
        body.dark {
            background-color: #121212;
            color: #ffffff;
        }

        .dark .btn {
            background-color: #333333;
            color: #ffffff;
        }
    </style>
</head>
<body class="<?php echo $mode; ?>">
    <div class="container">
        <h1>Mode <?php echo ucfirst($mode); ?></h1>
        <p>Klik tombol di bawah untuk mengubah mode.</p>
        <button class="btn" onclick="changeMode('<?php echo $mode === 'light' ? 'dark' : 'light'; ?>')">
            Ubah ke <?php echo $mode === 'light' ? 'Dark' : 'Light'; ?> Mode
        </button>
    </div>

    <script>
        // Fungsi untuk mengubah mode
        function changeMode(mode) {
            window.location.href = "?mode=" + mode;
        }
    </script>
</body>
</html>

<?php
if (isset($_POST['buy_now'])) {
    // Mengambil data dari form
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $quantity = isset($_POST['quantity_' . $product_id]) ? $_POST['quantity_' . $product_id] : 1;

    // Koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_store";

    $conn = new mysqli($servername, $username, $password, $database);

    // Memeriksa koneksi ke database
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Menyimpan data pembelian ke database
    $sql = "INSERT INTO tokooren (product_id, product_name, quantity) VALUES ('$product_id', '$product_name', '$quantity')";
    if ($conn->query($sql) === TRUE) {
        echo "Pembelian berhasil!";
        echo "<a href='index.php'> , kembali </a>";
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }

    // Menutup koneksi ke database
    $conn->close();
}
?>

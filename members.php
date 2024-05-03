<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "dbproject.php"; // Ganti dengan nama database Anda

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data anggota dari database
$sql = "SELECT nama, email, tempat_tinggal, nomor_hp FROM members";
$result = $conn->query($sql);
?>

<section id="members">
    <div class="container">
        <h2>Data Anggota</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tempat Tinggal</th>
                    <th>Nomor HP</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    // Output data dari setiap baris
                    while($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["nama"]. "</td><td>" . $row["email"]. "</td><td>" . $row["tempat_tinggal"]. "</td><td>" . $row["nomor_hp"]. "</td></tr>";
                    }
                } else {
                    echo "0 hasil";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</section>

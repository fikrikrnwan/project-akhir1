
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor Club Shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>Register Our Motor Club</h1>
            <nav>
                <ul>
                <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="vision-mission.php">Visi Misi</a></li>
                    <li><a href="produk.php">Produk Club</a></li>
                    <li><a href="add_member.php">Tambahkan Member</a></li>
                    <li><a href="klien.php">Klien Club</a></li>
                    <li><a href="members.php">Data Anggota</a></li>
                    <li><a href="articles.php">Artikel<a/a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
<head>
    <link rel="stylesheet" href="style.css">    
<section id="add-member">
    <div class="container">
        <h2>Tambah Anggota Baru</h2>
        <form action="add_member.php" method="post">
            <label for="nama">Nama:</label><br>
            <input type="text" id="nama" name="nama" required><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="tempat_tinggal">Tempat Tinggal:</label><br>
            <input type="text" id="tempat_tinggal" name="tempat_tinggal" required><br>

            <label for="nomor_hp">Nomor HP:</label><br>
            <input type="text" id="nomor_hp" name="nomor_hp" required><br><br>

            <input type="submit" value="Tambah Anggota">
        </form>
    </div>
</section>

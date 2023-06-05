<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <title>Wownats.Donut</title>
</head>
<body>
<nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #c0aff0;">
	<h1>Tambah menu Wownats.Donut</h1>
</nav>

	<form action="tambah_data.php" method="POST">

		<label for="nama">Nama:</label>
		<input type="text" name="nama" id="nama"><br>

		<label for="nama">Jumlah:</label>
		<input type="text" name="jumlah" id="jumlah"><br>

		<label for="harga">Harga:</label>
		<input type="text" name="harga" id="harga"><br>
		
        <label for="deskripsi">Deskripsi:</label>
		<input type="text" name="deskripsi" id="deskripsi "><br><br>
		
        <input type="submit" value="Simpan">
	</form>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>
</html>

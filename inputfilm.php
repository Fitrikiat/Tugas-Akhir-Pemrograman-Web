<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> //link berupa gambar atau foto yang dibuat dalam bentuk css dan link dari gambar tersebut disalin dan dimasukkan pada input film
</head>
<body>
  <div class="container"> //layout atau tampilan pada input film
	<form class= "col-xs-4" role="form" enctype="multipart/form-data" method="POST" action="config.php?aksi=input_film"> //menampilkan form untuk menginputkan film apa yang akan ditonton
	<div class="form-group"> //layout atau tampilan pada form
		<label for='id_film'>ID Film :</label>
		<input class='form-control' type="text" name="id_film"/> //menginputkan id dari film yang ingin ditonton
	</div>
	<div class="form-group">
		<label for='judul'>Judul FIlm :</label>
		<input class='form-control' type="text" name="judul"/> //menginputkan judul film
	</div>
	<div class="form-group">
		<label for='harga'>Harga Tiket :</label>
		<input class='form-control' type="text" name="harga"/> //menginputkan harga tiket
	</div>
	<div class="form-group">
		<label for='tanggal'>Tanggal Tayang :</label>
		<input class='form-control' type="date" name="tanggal"/> //menginputkan tanggal tayang
	</div>
	<div class="form-group">
		<label for='jam'>Jam Tayang</label> //menginputkan jam tayang
		<input class='form-control' type="time" name="jam"/>
	</div>
	<div class="form-group">
		<label for='kursi'>Jumlah Kursi</label> menginputkan jumlah kursi
		<input class='form-control' type="text" name="kursi"/>
	</div>
	<div class="form-group">
		<label>Pilih Cover</label>
			<input name="image" type="file"> //menginputkan foto atau cover dari film yang ingin ditonton
   	</div>
	<div class="form-group">
		<input class='form-control' type="submit" name="simpan" value="SIMPAN"/> //untuk menyimpan jika telah menginput data film yang akan ditonton
	</div>	
	</form>
  <div class="container">
</body>
</html>

//memasukkan data film ke satu yang nanti akan di tampilkan di daftar film
<!DOCTYPE html>
<html>
<head>
	<title>detail</title>
	<link href="style.css" rel="stylesheet" type="text/css" /> //mendefenisikan style untuk suatu teks dengan jenis huruf,
ukuran , warna tertentu.
</head>
<body>
<div id="left_column">
			<div class="text_area" align="justify">	 //menggunakan div untuk layout atau tampilan halaman web
			<div class='post_title'><b>Film Twilight Breaking Dawn Part 2</b></div><br/>
					<video style='margin-left:10px;' width='582' controls>
						<source src='trailer/MonstersUniversity.MP4' type='video/mp4'> //memasukkan source video atau trailer sesuai film yang nanti ingin ditonton
						Your browser does not support the video tag.
					</video><br/>
<table width='100%'><br/> //ukuran dari suatu tabel pada tampilan web
          <tr><td width='20%'><b>Judul Film</b></td> <td>:</td><td style='color:red'> Twilight Breaking Dawn Part 2</td></tr>
		  <tr><td><b>Kategori Film</b></td>  <td>:</td>  			 <td> <a style='color:blue' href='detail-kategori-15.html'>Romance</a></td></tr>
		  <tr><td><b>Tanggal Tayang</b></td> <td>:</td>  	 <td style='color:blue'> 19 Mei 2013</td></tr>  
		  <tr><td><b>Harga Tiket</b></td> <td>:</td>  	 <td style='color:blue'> Rp 20.000</td></tr>  
		  		  <tr><td valign=top><b>Produser</b></td> <td>:</td>  	 <td style='color:red'> Stephenie Meyer, Wyck Godfrey</td></tr>  
				  <tr><td valign=top><b>Produksi</b></td> <td>:</td>  	 <td style='color:red'> Submit Entertainment</td></tr>  
				  <tr><td valign=top><b>Home Page</b></td> <td>:</td>  	 <td style='color:red'> http://www.breakingdawn-themovie.com/</td></tr>  
				  <tr><td><b>Durasi</b></td> <td>:</td>  	 <td style='color:red'> 112 Menit</td></tr>  
		  <tr><td valign=top><b>Sinopsis</b></td>  <td>:</td>  			 <td> Betrayed by his own kind and left for dead on a desolate planet, Riddick fights for survival against alien predators and becomes more powerful and dangerous than ever before. Soon bounty hunters from throughout the galaxy descend on Riddick only to find themselves pawns in his greater scheme for revenge. With his enemies right where he wants them, Riddick unleashes a vicious attack of vengeance before returning to his home planet of Furya to save it from destruction.<br/><br/></td></tr>
	  </table>
	  <input style='width:100px;' type=button value='Pesan Tiket' onclick="window.location.href='kursi.php';">

	  </div>
	  </div>
</body>
</html>

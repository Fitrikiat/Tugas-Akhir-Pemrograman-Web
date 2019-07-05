<?php
$localhost = "localhost";
$username  = "root";
$password  = "";
$dbname    = "";
$connect   = new mysqli($localhost, $username, $password, $dbname); //menghubungkan koneksi untuk tersambung ke sistem

if($connect -> connect_error){
echo "Koneksi gagal ";	
}
if(!$connect -> connect_error){
	echo "Koneksi berhasil ";	//koneksi untuk tersambung ke aplikasi bioskop
}

 $sql	   = "create database fitri"; //membuat database

if($connect -> query($sql)){
echo "berhasil membuat database "; telah terhubung ke database
 } 

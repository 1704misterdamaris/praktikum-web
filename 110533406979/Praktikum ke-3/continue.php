<?php
  if((eregi("[^a-zA-Z ]", $_POST['user'])) || (eregi("[^a-zA-Z ]", $_POST['password']))){
  echo "Data anda bukan String!!";
}
else{
	echo "Selamat datang " . $_POST['user'];
}
?>
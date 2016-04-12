<?php
session_start();
if( isset($_POST['username']) && isset($_POST['password']) && $_POST['username']<>"" && $_POST['password']<>"" ){

	include '../../blob/blob.php';

	if (cek_login($_POST['username'], $_POST['password'])) {
		header('location: ../../../');
		echo "<script> window.location = '../../../'; </script>";
	} else {
		header('location: ./?err=Please check again your user ID and Password..!');
	}

} else {
	header('location: ./?err=Please check again your user ID and Password..!');
}

?>
<?php

//eval(base64_decode("Y2xhc3Mga29uZWtzaSB7DQoJcHVibGljICRrb25lazsNCglmdW5jdGlvbiBfX2NvbnN0cnVjdCgpeyANCgkJJHRoaXMtPmtvbmVrPW5ldyBteXNxbGkoImxvY2FsaG9zdCIsICJyb290IiwgIiIsICJlbnNnaiIpOw0KCQlpZigkdGhpcy0+a29uZWstPmNvbm5lY3RfZXJybm8pew0KCQkJZWNobyAnVW5hYmxlIHRvIGNvbm5lY3QgdG8gZGF0YWJhc2UgWycgLiAkdGhpcy0+a29uZWstPmNvbm5lY3RfZXJyb3IgLiAnXSc7DQoJCQlleGl0KCk7DQoJCX0JCQ0KCX0gICAgICANCgkNCglwdWJsaWMgZnVuY3Rpb24gY29tbWl0KCl7ICAgICAgICAgDQoJCSR0aGlzLT5rb25lay0+Y29tbWl0KCk7DQoJfQ0KDQoJcHVibGljIGZ1bmN0aW9uIGF1dG9jb21taXQoJGFwYSl7DQoJCSR0aGlzLT5rb25lay0+YXV0b2NvbW1pdCgkYXBhKTsNCgl9DQoJDQoJcHVibGljIGZ1bmN0aW9uIHJvbGxiYWNrKCl7DQoJCSR0aGlzLT5rb25lay0+cm9sbGJhY2soKTsgICAgIA0KCX0gICAgICANCgkNCglmdW5jdGlvbiBfX2Rlc3RydWN0KCl7DQoNCgl9ICAgICAgICAgIA0KCQ0KCWZ1bmN0aW9uIGNsb3NlREIoKXsNCgkJJHRoaXMtPmtvbmVrLT5jbG9zZSgpOw0KCX0gICAgICAgICAgDQoJDQoJcHVibGljIGZ1bmN0aW9uIGNsZWFyVGV4dCgkdGV4dCkgew0KCQkkdGV4dCA9IHRyaW0oJHRleHQpOw0KCQlyZXR1cm4gJHRoaXMtPmtvbmVrLT5yZWFsX2VzY2FwZV9zdHJpbmcoJHRleHQpOw0KCX0gICAgICAgIA0KCQ0KCXB1YmxpYyBmdW5jdGlvbiBsYXN0SW5zZXJ0SUQoKSB7DQoJCXJldHVybiAkdGhpcy0+a29uZWstPmluc2VydF9pZDsNCgl9DQoJDQoJcHVibGljIGZ1bmN0aW9uIHJ1blF1ZXJ5KCRxcnkpIHsNCgkJJHJlc3VsdCA9ICR0aGlzLT5rb25lay0+cXVlcnkoJHFyeSk7DQoJCXJldHVybiAkcmVzdWx0Ow0KCX0NCgkNCglwdWJsaWMgZnVuY3Rpb24gcnVuTXVsdGlwbGVRdWVyaWVzKCRxcnkpIHsNCgkJJHJlc3VsdCA9ICR0aGlzLT5rb25lay0+bXVsdGlfcXVlcnkoJHFyeSk7DQoJCXJldHVybiAkcmVzdWx0OyAgICAgDQoJfSAgICAgICAgIA0KCSAgICAgDQp9ICAgICAgICAgICAgICANCg0KZnVuY3Rpb24gZW5jcnlwdF9kZWNyeXB0KCRhY3Rpb24sICRzdHJpbmcgKSB7ICAgICAgICAgICAgICAgICANCglpZiggJGFjdGlvbiA9PSAnZW5jcnlwdCcgKSB7ICAgICAgICAgICAgICAgICAgDQoJCSRvdXRwdXQgPSBiYXNlNjRfZW5jb2RlKGJhc2U2NF9lbmNvZGUoJHN0cmluZykpOyAgICAgDQoJfSBlbHNlIGlmKCAkYWN0aW9uID09ICdkZWNyeXB0JyApeyAgICAgICAgIA0KCQkkb3V0cHV0ID0gYmFzZTY0X2RlY29kZShiYXNlNjRfZGVjb2RlKCRzdHJpbmcpKTsgICAgIA0KCX0gICAgICANCglyZXR1cm4gJG91dHB1dDsgDQp9ICANCg0KZnVuY3Rpb24gZV91cmwoICR1cmwgKXsgICAgICANCgkkb3V0cHV0PWh0bWxzcGVjaWFsY2hhcnMoIGVuY3J5cHRfZGVjcnlwdCgnZW5jcnlwdCcsICR1cmwgKSApOyAgICAgDQoJcmV0dXJuICRvdXRwdXQ7IA0KfSAgDQoNCmZ1bmN0aW9uIGRfdXJsKCAkdXJsICl7ICAgICANCgkkb3V0cHV0PWh0bWxzcGVjaWFsY2hhcnMoIGVuY3J5cHRfZGVjcnlwdCgnZGVjcnlwdCcsICR1cmwgKSApOyAgICAgDQoJcmV0dXJuICRvdXRwdXQ7ICANCn0gIA0KDQpmdW5jdGlvbiBlX2NvZGUoICRzdHJpbmcgKXsgICAgICANCgkkb3V0cHV0PWh0bWxzcGVjaWFsY2hhcnMoIGVuY3J5cHRfZGVjcnlwdCgnZW5jcnlwdCcsICRzdHJpbmcgKSApOw0KCXJldHVybiAkb3V0cHV0OyANCn0gIA0KDQpmdW5jdGlvbiBkX2NvZGUoICRzdHJpbmcgKXsNCgkkb3V0cHV0PWh0bWxzcGVjaWFsY2hhcnMoIGVuY3J5cHRfZGVjcnlwdCgnZGVjcnlwdCcsICRzdHJpbmcgKSApOw0KCXJldHVybiAkb3V0cHV0Ow0KfSAgICAgIA0KDQpmdW5jdGlvbiBjZWtfbG9naW4oJHVzZXIsJHBhc3Mpew0KICAgICRrb25la3NpID0gbmV3IGtvbmVrc2koKTsNCgkkdXNlciA9IGVfY29kZSgkdXNlcik7DQogICAgJHBhc3MgPSBlX2NvZGUoJHBhc3MpOw0KCQ0KCSRxQ2VrID0gIlNFTEVDVCBgcGVtYWthaWAuYGlkYCwgYHBlbWFrYWlgLmBpZF9rYXJ5YXdhbmAsIGBrYXJ5YXdhbmAuYG5hbWFgLCBga2FyeWF3YW5gLmBpZF9sZXZlbGAsIGBrYXJ5YXdhbmAuYGprYCBGUk9NIGBwZW1ha2FpYCBJTk5FUiBKT0lOIGBrYXJ5YXdhbmAgDQoJCQlPTiAoYHBlbWFrYWlgLmBpZF9rYXJ5YXdhbmAgPSBga2FyeWF3YW5gLmBpZGApIFdIRVJFIGBwZW1ha2FpYC5gdXNlcmAgPSAnJHVzZXInIEFORCBgcGVtYWthaWAuYGt1bmNpYCA9ICckcGFzcycgQU5EIGBwZW1ha2FpYC5gaGFwdXNgID0gJzAnOyI7DQoJDQoJaWYgKCRyZXNDZWsgPSAka29uZWtzaS0+cnVuUXVlcnkoJHFDZWspKSB7DQoJCWlmICgkcmVzQ2VrLT5udW1fcm93cyA+IDApIHsNCgkJCSRyc0NlayA9ICRyZXNDZWstPmZldGNoX2FycmF5KCk7DQoJCQkNCgkJCSRfU0VTU0lPTlsnZW4tZGF0YSddID0gZV9jb2RlKCRyc0Nla1snaWRfa2FyeWF3YW4nXSk7DQoJCQkkX1NFU1NJT05bJ2VuLW5hbWEnXSA9ICRyc0Nla1snbmFtYSddOw0KCQkJJF9TRVNTSU9OWydlbi1sZXZlbCddID0gJHJzQ2VrWydpZF9sZXZlbCddOw0KCQkJJF9TRVNTSU9OWydlbi1qayddID0gJHJzQ2VrWydqayddOw0KCQkJDQoJCQkkbG9nPSRrb25la3NpLT5ydW5RdWVyeSgiSU5TRVJUIElOVE8gYGxvZ19sb2dpbmAoYGlkX3VzZXJgKSBWQUxVRVMgKCciLiRyc0Nla1snaWQnXS4iJykiKTsNCgkJCQ0KCQkJcmV0dXJuIFRSVUU7DQoJCX0gZWxzZSB7DQoJCQlyZXR1cm4gRkFMU0U7DQoJCX0NCgl9IGVsc2Ugew0KCQlyZXR1cm4gRkFMU0U7DQoJfSANCn0="));


class koneksi {
	public $konek;
	function __construct(){ 
		$this->konek=new mysqli("localhost", "root", "", "sirenja");
		if($this->konek->connect_errno){
			echo 'Unable to connect to database [' . $this->konek->connect_error . ']';
			exit();
		}		
	}      
	
	public function commit(){         
		$this->konek->commit();
	}

	public function autocommit($apa){
		$this->konek->autocommit($apa);
	}
	
	public function rollback(){
		$this->konek->rollback();     
	}      
	
	function __destruct(){

	}          
	
	function closeDB(){
		$this->konek->close();
	}          
	
	public function clearText($text) {
		$text = trim($text);
		return $this->konek->real_escape_string($text);
	}        
	
	public function lastInsertID() {
		return $this->konek->insert_id;
	}
	
	public function runQuery($qry) {
		$result = $this->konek->query($qry);
		return $result;
	}
	
	public function runMultipleQueries($qry) {
		$result = $this->konek->multi_query($qry);
		while ($this->konek->more_results() && $this->konek->next_result());
		return $result;     
	}         
	     
}              

function encrypt_decrypt($action, $string ) {                 
	if( $action == 'encrypt' ) {                  
		$output = base64_encode(base64_encode($string));     
	} else if( $action == 'decrypt' ){         
		$output = base64_decode(base64_decode($string));     
	}      
	return $output; 
}  

function e_url( $url ){      
	$output=htmlspecialchars( encrypt_decrypt('encrypt', $url ) );     
	return $output; 
}  

function d_url( $url ){     
	$output=htmlspecialchars( encrypt_decrypt('decrypt', $url ) );     
	return $output;  
}  

function e_code( $string ){      
	$output=htmlspecialchars( encrypt_decrypt('encrypt', $string ) );
	return $output; 
}  

function d_code( $string ){
	$output=htmlspecialchars( encrypt_decrypt('decrypt', $string ) );
	return $output;
}      

function cek_login($user,$pass){
    $koneksi = new koneksi();
	$user = e_code($user);
    $pass = e_code($pass);
	
	$qCek = "SELECT `pemakai`.`id`, `pemakai`.`nama`, `pemakai`.`jk` FROM `pemakai` 
			WHERE `pemakai`.`user` = '$user' AND `pemakai`.`kunci` = '$pass' AND `pemakai`.`hapus` = '0';";
	
	if ($resCek = $koneksi->runQuery($qCek)) {
		if ($resCek->num_rows > 0) {
			$rsCek = $resCek->fetch_array();
			
			$_SESSION['en-data'] = e_code($rsCek['id']);
			$_SESSION['en-nama'] = $rsCek['nama'];
			$_SESSION['en-jk'] = $rsCek['jk'];
			
			$qLog = "INSERT INTO `log_login`(`id_pemakai`) VALUES ('".$rsCek['id']."');";
			
			$log=$koneksi->runMultipleQueries($qLog);
			
			return TRUE;
		} else {
			return FALSE;
		}
	} else {
		return FALSE;
	} 
}


?>
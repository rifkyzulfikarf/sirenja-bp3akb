<?php
	if (isset($_POST['apa']) && $_POST['apa'] != "") {
		
		include 'modules/model/class.program.php';
		$data = new program();
		
		switch ($_POST['apa']) {
			case "get-program":
				$collect = array();
				
				if ($query = $data->get_program()) {
					while ($rs = $query->fetch_array()) {
						$detail = array();
						array_push($detail, $rs["program"]);
						array_push($detail, "<button type='button' class='btn btn-sm btn-primary' id='btn-ubah-data' data-id='".$rs["id"]."' data-program='".$rs["program"]."'>
									<i class='fa fa-pencil'></i></button> 
									<button type='button' class='btn btn-sm btn-danger' id='btn-hapus-program' data-id='".$rs["id"]."'><i class='fa fa-trash-o'></i></button>");
						array_push($collect, $detail);
						unset($detail);
					}
				}
				echo json_encode(array("aaData"=>$collect));
				break;
			case "tambah-program":
				$arr=array();
				
				if (isset($_POST['txt-program']) && $_POST['txt-program'] != "") {
					
					if ($result = $data->tambah($_POST['txt-program'])) {
						$arr['status']=TRUE;
						$arr['msg']="Data tersimpan..";
					} else {
						$arr['status']=FALSE;
						$arr['msg']="Gagal menyimpan..";
					}
				} else {
					$arr['status']=FALSE;
					$arr['msg']="Harap isi data dengan lengkap..";
				}
				
				echo json_encode($arr);
				break;
			case "ubah-program":
				$arr=array();
				
				if (isset($_POST['txt-program']) && $_POST['txt-program'] != "" && isset($_POST['txt-id']) && $_POST['txt-id'] != "") {
					
					if ($result = $data->ubah($_POST['txt-id'], $_POST['txt-program'])) {
						$arr['status']=TRUE;
						$arr['msg']="Data tersimpan..";
					} else {
						$arr['status']=FALSE;
						$arr['msg']="Gagal menyimpan..";
					}
				} else {
					$arr['status']=FALSE;
					$arr['msg']="Harap isi data dengan lengkap..";
				}
				
				echo json_encode($arr);
				break;
			case "hapus-program":
				$arr=array();
				
				if (isset($_POST['id']) && $_POST['id'] != "" ) {
					
					if ($result = $data->hapus($_POST['id'])) {
						$arr['status']=TRUE;
						$arr['msg']="Data terhapus..";
					} else {
						$arr['status']=FALSE;
						$arr['msg']="Gagal menghapus..";
					}
				} else {
					$arr['status']=FALSE;
					$arr['msg']="Harap isi data dengan lengkap..";
				}
				
				echo json_encode($arr);
				break;
		}
	}
?>
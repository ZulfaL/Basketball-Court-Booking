<?php 
	$errors = array(); 
	function validateName(&$errors, $field_list, $field_name)  {
		$pattern = "/^[a-zA-Z'-]+$/"; // format alfabet 
		if (!isset($field_list[$field_name]) || empty($field_list[$field_name])){ 
			$errors[$field_name] = '*nama harus diisi';
		}
		else if(strlen($field_list[$field_name]) < 3){
			$errors[$field_name] = '*panjang nama harus lebih dari 3 huruf';
			
		}
		else if (!preg_match($pattern, $field_list[$field_name])){
			$errors[$field_name] = '*hanya boleh diisi huruf';
		}
	}
	function validateAddress(&$errors, $field_list, $field_name){
		$pattern = "/^[a-zA-Z0-9 ]+$/";
		if (!isset($field_list[$field_name]) || empty($field_list[$field_name])){ 
			$errors[$field_name] = '*alamat harus diisi';   
		}
		else if (!preg_match($pattern, $field_list[$field_name])){
			$errors[$field_name] = '*hanya boleh diisi huruf dan angka';
		}
	}
	function validateMobileNum(&$errors, $field_list, $field_name)  {
		$pattern = "/^[0-9]*$/"; // format numerik
		if (!isset($field_list[$field_name]) || empty($field_list[$field_name])){ 
			$errors[$field_name] = '*nomor whatsapp harus diisi';   
		}
		else if (!preg_match($pattern, $field_list[$field_name])) {
  			$errors[$field_name] = "*hanya boleh diisi angka";
		}
		else if (strlen($field_list[$field_name]) != 10) {
  			$errors[$field_name] = "*nomor whatsapp tidak boleh lebih dari 10 angka";
		}
	}
	function validateDate(&$errors, $field_list, $field_name){
		if(!isset($field_list[$field_name]) || empty($field_list[$field_name])){
			$errors[$field_name] = "*harus diisi";
		}
	}

	if (isset($_POST['sewa'])){
			validateName($errors, $_POST, 'nama');
			validateAddress($errors, $_POST, 'alamat');
			validateMobileNum($errors, $_POST, 'noWa');
			validateDate($errors, $_POST, 'tglSewa');
			validateDate($errors, $_POST, 'jamSewa');
			
		}
	if($errors){
		include 'form.php';
	}
	else{
		echo "<script>
            alert('Registrasi Berhasil!');
            </script>";
		include 'form.php';
	}
?>
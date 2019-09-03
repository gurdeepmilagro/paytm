<?php
$hostname = "localhost";
$username = "root";
$password = "root";
$database = "joyville";
$conn = new mysqli($hostname, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$otpnumber = $_POST['otpnumber'];
$mobileno = $_POST['mobileno'];


	if(strlen($_POST['otpnumber']) == 4){
			if(isset($_POST['otpnumber'])){
				$sql = "SELECT * FROM `tbl_otp` WHERE `mobile` = '".$mobileno."' AND `otp` = ".$otpnumber." AND `status` = 'inProcess'";
				
				$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							$sql = "UPDATE `tbl_otp` SET `status` = 'Verified' WHERE `mobile` = '".$mobileno."' AND `otp` = '".$_POST['otpnumber']."'";
											if ($conn->query($sql) === TRUE) {
											echo "True";
											} else {
											echo "False";
											}
						} else {
							echo 'Incorrect OTP1';
						}
						$conn->close();
				
			}else{
				echo "False";
			}
}else{
	echo 'Incorrect OTP2';
}

?>
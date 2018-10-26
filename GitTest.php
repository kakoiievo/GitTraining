
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test Git</title>
</head>
<body>
	

	<!-- to 坑坑坑坑轟轟轟 基本寫法 跟著打的code~~ -->
	<!-- =================連線到資料庫。基本寫法===================== -->
		<?php
		$severname = "localhost";
		$username  = "root";
		$password  = "0000";
		$database  = "product";

		$conn = mysqli_connect($severname,$username,$password,$database);


		if(mysqli_connect_error())
			print "fail to connect to mysql".mysqli_connect_error();
		else
			print "success" . "<br>";

		mysqli_query($conn,"SET NAMES UTF8");  //編碼為UTF8

		$sql = "SELECT * FROM `price`";   //先將指令儲存到變數裡 方便使用

          //先將sql指令 用成一個變數 比較好寫
		 if ($result = mysqli_query($conn, $sql)){
		 	while ($row_result = mysqli_fetch_array($result,MYSQLI_BOTH)) {
		 		// foreach ($row_result as $item => $value) {
		 			
		 		// 	print $item . "= .$value" . "<br>";

		 		// =====更好的寫法========

		 		print_r($row_result);
		 		print "<hr>";


		 		
		 	}

		 	mysqli_free_result($result);   
		 }
		mysqli_close($conn);



		?>
	
</body>
</html>
=======
<?php

echo "this is php code\n";


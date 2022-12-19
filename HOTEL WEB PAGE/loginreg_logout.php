<?php
		session_start();
		//destroy session
		session_destroy();
		//redirect to main page
		echo "<script>window.location.href='WADtestvs.php'</script>";
?>
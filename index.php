<?php 
include 'db.php';
?>
<!DOCTYPE html> 
<html>
	<head>
		<title>Chat System in PHP</title>
	<link rel="stylesheet" href="style.css" media="all"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script>
		
		setInterval(function(){
			$("#chat").load("chat.php");
		},1000);
	</script>
	</head>
	
<body onload="ajax();">

<div id="container">
		<div id="chat_box">
		<div id="chat"></div>
		</div>
		<form method="post" action="index.php">
		<input type="text" name="name" placeholder="enter name"/> 
		<textarea name="msg" placeholder="enter message"></textarea>
		<input type="submit" name="submit" value="Send it"/>
		
		</form>
		<?php 
		if(isset($_POST['submit'])){ 
		
		$name = $_POST['name'];
		$msg = $_POST['msg'];
		
		$query = "INSERT INTO chatdata (name,msg) values ('$name','$msg')";
		
		$run = $con->query($query);
		
		if($run){
			echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'/>";
		}
		
		
		}
		?>

</div>

</body>
</html>
<?php
if(isset($_POST['images'])){
	$name = $_FILES["images"]["name"];
    move_uploaded_file( $_FILES["images"]["tmp_name"], "uploads/" . $_FILES['images']['name']);

echo "<h2>Successfully Uploaded Images</h2>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>HTML5 File API</title>
<style type="text/css">
	body {
	font: 14px/1.5 helvetica-neue, helvetica, arial, san-serif;
	padding:10px;
}

h1 {
	margin-top:0;
}

#main {
	width: 300px;
	margin:auto;
	background: #ececec;
	padding: 20px;
	border: 1px solid #ccc;
}

#image-list {
	list-style:none;
	margin:0;
	padding:0;
}
#image-list li {
	background: #fff;
	border: 1px solid #ccc;
	text-align:center;
	padding:20px;
	margin-bottom:19px;
}
#image-list li img {
	width: 258px;
	vertical-align: middle;
	border:1px solid #474747;
}
</style>
	
</head>
<body>
	<div id="main">
		<h1>Upload Your Images</h1>
		<form method="post" enctype="multipart/form-data"  action="upload.php">
    		<input type="file" name="images" id="images" />
    		<button type="submit" id="btn">Upload Files!</button>
    	</form>

  	<div id="response"></div>
		<ul id="image-list">

		</ul>
	</div>
	
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="js/upload.js"></script>
</body>
</html>

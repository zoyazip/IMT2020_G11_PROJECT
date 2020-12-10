
<html>
<head>
	<title>Nyum!</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="content">
		<div class="container">
			<div class="header"></div>
			<form action="index.php" method="POST">
				<div class="search"><input id="search" type="text" name="search[]" placeholder="Enter your product!"></div>
					<div class="btn">
						<input id="btn" type="submit" name="submitBtn" value="Find Recipe">
					</div>
			</form>			
			</div>
		</div>
	</div>
</body>
</html>
<?php
$keyWord = $_POST["search"];

function getRandom($keyWord){
	$curl = curl_init();
$id = "e5fdf6a7";
$key = "8cd9dc6db91a8ba7fd9e01c718495ced";
curl_setopt_array($curl, array(
  CURLOPT_URL => "curl 'https://api.edamam.com/search?q=chicken&app_id=${id}&app_key=${key}'",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n\"api_token\": \"[ADD YOUR TOKEN]\"\n}",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Content-Type: application/json",
  ),
));
	$reciepe = rand(min(array), max(array));
	echo $reciepe;
}
getRandom();
curl_close($curl);
?>

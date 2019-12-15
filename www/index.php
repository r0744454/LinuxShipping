<html>
 <head>
  <title>Hello and welcome</title>

  <meta charset="utf-8">
  <meta name="author" content="RVolders">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>

    <h1>Docenten</h1>

<?php
$db = new mysqli('localhost', 'root', 'demo', 'demodb');

if($db->connect_errno > 0) {
   die('Unable to connect to database [' . $db->connect_error . ']');
}

$sql = 'SELECT * FROM docenten';

if($result = $db->query($sql)){
   while($row = $result->fetch_assoc()){
      echo $row['name'] . ' ' . $row['surname'] . '<br />';
   }
}

$result->free();
$db->close();

?>
</body>
</html>

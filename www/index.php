<html>
 <head>
  <title>Jupiler League</title>

  <meta charset="utf-8">
  <meta name="author" content="Fozkan">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>

    <div class="container">
    <?php echo "<h1>Scoreboard Jupiler League</h1>"; ?>
    <?php
	    
    $conn = mysqli_connect('db', 'user', 'R1234-56', "myDb");
    $query = 'SELECT * From Person';
    $result = mysqli_query($conn, $query);
    echo '<table class="table table-striped">';
    echo '<thead><tr><th></th><th>Thuis</th><th>Uit</th></tr></thead>';
    while($value = $result->fetch_array(MYSQLI_ASSOC)){
        echo '<tr>';
        echo '<td><span class="glyphicon glyphicon-search"></span></td>';
        foreach($value as $element){
            echo '<td>' . $element . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
    $result->close();
    mysqli_close($conn);
    ?>
	</div>
 
</body>
</html>

<?php
function pdo_connect_pgsql() {
    $DATABASE_HOST = 'localhost';
    $DATABASE_PORT = '5432';
    $DATABASE_USER = 'nathan';
    $DATABASE_PASS = '190902';
    $DATABASE_NAME = 'bookstore';
    try {
    	return new PDO('pgsql:host=' . $DATABASE_HOST . ';port=' . $DATABASE_PORT . ';dbname=' . $DATABASE_NAME . , $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error. options=-c client_encoding=utf8
    	//exit('Failed to connect to database!');
        exit($exception);
    }
}

// function connect_pg() {
//     $DATABASE_HOST = 'localhost';
//     $DATABASE_PORT = '5432';
//     $DATABASE_USER = 'nathan';
//     $DATABASE_PASS = '190902';
//     $DATABASE_NAME = 'bookstore';
//     try {
//         return new pg_connect("host=" . $DATABASE_HOST " port=" .$DATABASE_PORT " dbname=" .$DATABASE_NAME " user=" .$DATABASE_USER " ")
//     }
// }
function template_header($title) {
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
    <nav class="navtop">
    	<div>
    		<h1>Website Title</h1>
            <a href="index.php"><i class="fas fa-home"></i>Home</a>
    		<a href="read_book.php"><i class="fas fa-address-book"></i>Books</a>
    	</div>
    </nav>
EOT;
}
function template_footer() {
echo <<<EOT
    </body>
</html>
EOT;
}
?>
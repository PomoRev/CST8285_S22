<!-- Example file with inline PHP code, will only run from back end. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Prof. Frank Emanuel">
    <meta name="email" content="emanuef@algonquincollege.com">
    <meta name="date" content="2022-05-09">
    <link rel="stylesheet" href="css/example.css">
    <script src="js/example.js"></script>
    <title>HTML 5.0 Compliant Web Document</title>
</head>
<body>
    <header>HTML 5.0 Compliant Web Document</header>
    <p class="bodytext"><?php echo "Hello World from PHP!"; ?></p>
    <button onclick="helloWorld()">Click to have JS say hello</button>
</body>
</html>
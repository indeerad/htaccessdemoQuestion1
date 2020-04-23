<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>
</head>
<body>
<h1>Employee Page</h1>
    <?php
        function display($messaage){
            echo("<h3>Display method called</h3>");
            echo("<p>Passed message(parameter) : ".$messaage."</p>");
        }

        function finish($message){
            echo("<h3>Finish method called</h3>");
            echo("<p>Passed message(parameter) : ".$message."</p>");
        }

    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
</head>
<body>
<h1>Project Page</h1>
    <?php
        function display($message){
            echo("<h3>Display Method Called..!</h3>");
            echo("<p>Passed message(parameter) : ".$message."</p>");
        }

        function finish($message){
            echo("<h3>Finish Method Called..!</h3>");
            echo("<p>Passed message(parameter) : ".$message."</p>");
        }

    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Time Data Display</title>
</head>
<body onload = "table();">
    <script type="text/javascript">
        function table(){
            const xhttp = new XMLHttpRequest();
            xhttp.onload = function(){
                document.getElementById("table").innerHTML = this.responseText;
            }
            xhttp.open("GET", "system.php");
            xhttp.send();
        }

        setInterval(function(){
            table();
        }, 1000);
    </script>
    <div id="table">

    </div>
</body>
</html>
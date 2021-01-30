<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        setInterval(function(){
            $("#time").load("time.php")
        },1000)
    })
    </script>

    <title>Document</title>
</head>
<body>
    <div id=time>
    00 : 00 : 00 PM
    </div>
</body>
</html>

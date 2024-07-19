<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>welcome</title>
   
    <script type="text/javascript">
        function redirectToAnotherPage() {
            setTimeout(function() {
                window.location.href ="/signin"; 
            }, 2000); 
        }
    </script>
</head>
<body onload="redirectToAnotherPage()">
<center>
    <img src="{{url('assets/imgs/logo/logo.gif')}}" alt="">
</center>
</body>
</html>
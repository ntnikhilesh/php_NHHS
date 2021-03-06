<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.min.css" />
    <script src="main.js"></script>
    <script>
    function showSuggestion(str){
        console.log(str);
        if(str.length == 0){
            document.getElementById('output').innerHTML = '';
        }else{
            // AJAX request
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById('output').innerHTML = this.responseText;
                }
            }

            xmlhttp.open("GET", "suggest.php?q="+str, true);
            xmlhttp.send();
        }
    }
    </script>
</head>
<body>
     <div class='container'>
        <h1> Serarch Users</h1>
        <form>
            Serach User:<input type='text' class='form-control' onkeyup="showSuggestion(this.value)">
        </form>
        <p>Suggestions: <span id='output' style="font-weight:bold"></span></p>
     </div>
</body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <meta >
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script>
      function showSuggestion(str){
        if(str.length == 0){
          document.getElementById('output').innerHTML ='';
        }else {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function(){
            if(this.readyState ==4 && this.status == 200){
              document.getElementById('output').
                innerHTML = this.responseText;
            }
          }
          xmlhttp.open("GET", "suggest.php?q="+str, true);
          xmlhttp.send();

        }
      }

    </script>
  </head>
  <body>

    <div class="container">
      <h1>Search Users</h1>
      <form>
        Search User: <input type="text" class="form-control" onkeyup="showSuggestion(this.value)">

      </form>

  </body>
</html>

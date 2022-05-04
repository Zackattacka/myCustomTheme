<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Index</title>




    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style media="screen">
      body {
        background-color: #292b2c;
      }

      #header {
        padding-top: 20px;
        padding-bottom: 20px;
      }

      ul li a {
        border-radius: 4px;
      }
      ul li a:hover {
        background-color: grey;
        border-radius: 4px;
      }

      p {
        text-align: center;
        padding-top:30px;
        font-size: 25px;
        color: #11ff33;
        font-family: courier;
      }

      a {
        text-decoration: none;
      }

      #eButton {
        display: none;
        align-items: center;
        justify-content: center;
      }

      #eButton a {
        width: 300px;
        height: 70px;
        font-size: 30px;
        color: #11ff33;
        font-family: courier;
      }

    </style>

    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous">
    </script>

  </head>



  <body onload="typeWriter()">


    <!--Header-->
    <a href="Portfolio/Portfolio.html">
      <div id="header" class="container-fluid bg-dark text-white">
        <div class="row">
          <div class="col text-center"><h1>Zac Vetter</h1></div>
        </div>
      </div>
    <!--Header-->

      <!--Typewriter Text Area-->
      <div class="container">
        <p id="typeWriter"></p>
      </div>
    </a>
      <!--Typewriter Text Area-->


    <!-- Enter Button -->
    <div id="eButton" class="text-center">
      <a href="Portfolio/Portfolio.html" type="button" class="btn bg-dark text-center">Enter..</a>
    </div>
    <!-- Enter Button -->





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript">


      // Typewriter
      var i = 0;
      var txt = `Photography \n \n Graphic Design \n \n Web Development \n \n Videography \n \n Audio Production \n \n`;
      var speed = 50;

      function typeWriter() {
        if (i < txt.length) {
          let text = txt.charAt(i);
          document.getElementById("typeWriter").innerHTML += text=== "\n" ? "<br/>": text;
          i++;
          setTimeout(typeWriter, speed);
        }
      }
      //Typewriter


      //Text Fade in
      $(document).ready(function() {
        $('#eButton').delay(5200).fadeIn('slow');
      });
      //Text Fade in


    </script>
  </body>
</html>

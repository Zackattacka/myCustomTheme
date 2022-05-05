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

    <?php wp_head(); ?>
  </head>

  <body onload="typeWriter()" <?php body_class(); ?>>

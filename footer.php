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
<?php wp_footer(); ?>
</body>
</html>

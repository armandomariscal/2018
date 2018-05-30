<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>jQuery | Parent y Find</title>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</head>
<body>
  <h1>Obtener Data ID de un elemento dando clic en cualquier TD dentro del mismo TR</h1>
  <section>
    <code>
      $('td').click(function(){
        var data = $(this).parent().find('button').attr('data');
      });
    </code>  
  </section>
  <hr>
  <section>
    <p>
      Pregunta en Stackoverflow Español:
    </p>
    <ul>
      <li>
        <a href="https://es.stackoverflow.com/questions/168871/c%C3%B3mo-obtener-la-data-de-un-boton-que-se-encuentre-en-cualquier-td-de-su-misma/168881">
          https://es.stackoverflow.com/questions/168871/c%C3%B3mo-obtener-la-data-de-un-boton-que-se-encuentre-en-cualquier-td-de-su-misma/168881
        </a>
      </li>
    </ul>
  </section>

  
  


<!-- Create a simple CodeMirror instance -->
<link rel="stylesheet" href="lib/codemirror.css">
<script src="lib/codemirror.js"></script>
<script>
  var editor = CodeMirror.fromTextArea(myTextarea, {
    lineNumbers: true
  });
</script>
<script>
$('td').click(function(){
  var data = $(this).parent().find('button').attr('data');
  console.log(data);
});
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
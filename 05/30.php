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
  <h1>Mostrar únicamente el elemento anterior y el posterior del activo.</h1>
  <section>
    <nav>
    <ul>
      <li>1</li> <!-- Ocultar -->
      <li>2</li> <!-- Ocultar -->
      <li>3</li> <!-- Ocultar -->
      <li>4</li> <!-- Ocultar -->
      <li>5</li> <!-- Ocultar -->
      <li>6</li> <!-- Ocultar -->
      <li>7</li> <!-- Ocultar -->
      <li>8</li> <!-- Ocultar -->
      <li>9</li> <!-- Ocultar -->
      <li>10</li> <!-- Ocultar -->
      <li>11</li> <!-- Ocultar -->
      <li>12</li> <!-- Ocultar -->
      <li>13</li>
      <li class="active">14</li>
      <li>15</li>
      <li>16</li> <!-- Ocultar -->
      <li>17</li> <!-- Ocultar -->
      <li>18</li> <!-- Ocultar -->
      <li>19</li> <!-- Ocultar -->
      <li>20</li> <!-- Ocultar -->
      <li>21</li> <!-- Ocultar -->
      <li>22</li> <!-- Ocultar -->
      <li>23</li> <!-- Ocultar -->
      <li>24</li> <!-- Ocultar -->
      <li>25</li> <!-- Ocultar -->
    </ul>
    </nav>
  </section>
  <section>
    <code>
    $(".active").nextAll().hide();
    </code>
    <br>
    <code>
    $(".active").prevAll().hide();
    </code>
    <br>
    <code>
    $(".active").next().show();
    </code>
    <br>
    <code>
    $(".active").prev().show();
    </code>
  </section>
  <hr>
  <section>
    <p>
      Pregunta en Stackoverflow Español:
    </p>
    <ul>
      <li>
        <a href="https://es.stackoverflow.com/questions/168985/esconder-todo-menos-tres-li-con-nth/169143">
        https://es.stackoverflow.com/questions/168985/esconder-todo-menos-tres-li-con-nth/169143
        </a>
      </li>
    </ul>
  </section>

  
  


<!-- Create a simple CodeMirror instance -->
<link rel="stylesheet" href="lib/codemirror.css">
<script src="lib/codemirror.js"></script>
<script>
$(".active").nextAll().hide();
$(".active").prevAll().hide();
$(".active").next().show();
$(".active").prev().show();
</script>
<style>
  .active {
    font-weight: bold;
  }
  .active:nth-of-type(2) {
    color: red;
  }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
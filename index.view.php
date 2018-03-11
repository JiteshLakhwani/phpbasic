
<html>
  <head>
    <title>Document</title>
    <style>

      header{
        background: grey;
        padding: 2em;
        text-align: center;
        }

      </style>
  </head>

  <body>
    <ul>
      <?php foreach ($tasks as $task) {
        echo "<li>$task->description </li>";
      } ?>
    </ul>
  </body>
</html>

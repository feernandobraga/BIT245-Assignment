<?php
  define("DB_HOST", "localhost");
  define("DB_USER", "root");
  define("DB_PASS", "");
  define("DB_NAME", "fernando_awesomeDB");

  function db_connect() {
    mysqli_report(MYSQLI_REPORT_STRICT);
    try {
      $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
      return $connection;
    } catch (\Exception $e) {
      echo "<h2>Sorry, it's not you... it's us</h2>";
      echo "Looks like someone has cut the wrong wire...";
      echo "<br>Come back later and we will have this sorted!";
      exit(3);
    }
  }

  function db_disconnect($connection) {
    if (isset($connection)) {
      mysqli_close($connection);
    }
  }

?>

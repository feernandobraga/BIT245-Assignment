<?php

  if (!isset($_POST['submit'])){
    header("Location: sponsors.html");
    exit();
  }

  require_once('connections.php');

  $db = db_connect(); //creates the database connection

  $childFirstName = $_POST['childFirstName'];
  $carerFamilyName = $_POST['carerFamilyName'];

  //sql query that lists all kids from database
  $query = "SELECT * FROM kids";
  $result_set = mysqli_query($db, $query);
  $kidFound = false;

?>

<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="css/styles2.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="scripts/scripts.js"></script>
  <title>Fernando Braga</title>
</head>
<body>
<div class="mainContainer">

  <header class="flexItem headerflex">
    <?php
      include 'header.php';
    ?>
  </header>

  <main class="flexItem mainflex">


        <?php

          for ($i=0; $i < mysqli_num_rows($result_set); $i++) {
          global $childFirstName;
          global $carerFamilyName;
          global $kidID;
          global $kidFound;
          $kid = mysqli_fetch_assoc($result_set);
          if ($kid['givenName'] == $childFirstName && $kid['carerFamilyName'] == $carerFamilyName) {
            $kidFound = true;
        ?>

        <h2 class="yellow logo ">I've successfully retrieve someone from the database =D</h2>
          <table id="flexResultTable">
            <tr>
              <th>Kid ID</th>
              <th>Given Name</th>
              <th>Family Name</th>
              <th>Gender</th>
              <th>Date of Birth</th>
              <th>Carer Given Name</th>
              <th>Carer Family Name</th>
            </tr>

          <?php
            echo
            "<tr>
              <td>" . $kid['kidID'] . "</td>
              <td>" . $kid['givenName'] . "</td>
              <td>" . $kid['familyName'] . "</td>
              <td>" . $kid['gender'] . "</td>
              <td>" . $kid['dateOfBirth'] . "</td>
              <td>" . $kid['carerGivenName'] . "</td>
              <td>" . $kid['carerFamilyName'] . "</td>
            </tr>
          </table>";
        }
      }

      if (!$GLOBALS['kidFound']) {
        ?>
        <h1 class="nomatch inDaMiddle">No kid found, sorry mate!</h1>

        <?php
      }
    ?>




  </main>

  <footer class="flexItem footerflex">
    <?php
      include 'footer.php';
    ?>
  </footer>

</div>

</body>
</html>

<?php
  mysqli_free_result($result_set);
  db_disconnect($db);
 ?>

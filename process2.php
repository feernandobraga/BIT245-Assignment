<?php

  if (!isset($_POST['submit'])){
    header("Location: sponsors.html");
    exit();
  }

  require_once('connections.php');

  $db = db_connect(); //creates the database connection

  $childFirstName = $_POST['childFirstName'];
  $carerFamilyName = $_POST['carerFamilyName'];

  //sql query
  $query = "SELECT * FROM kids WHERE givenName = '" . $childFirstName ."' AND carerFamilyName = '" .$carerFamilyName. "' ";
  $result_set = mysqli_query($db, $query);
  $kidFound = false;

?>

<!DOCTYPE html>
<html lang="en">
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


  <main class="flexItem rsFlex">

    <?php

      if ($result_set->num_rows > 0)
      {
        $kidFound = true;
    ?>

    <h2 class="yellow dbRetrieve">I've successfully retrieve someone from the database =D </h2>

        <div class="flexResultSetWrapper">

          <table>
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
            while ($row = $result_set->fetch_assoc())
            { ?>
              <tr>
                <td>
                  <?= $row['kidID']?>
                </td>
                <td class="rsCell">
                  <?= $row['givenName']?>
                </td>
                <td>
                  <?= $row['familyName']?>
                </td>
                <td>
                  <?= $row['gender']?>
                </td>
                <td>
                  <?= $row['dateOfBirth']?>
                </td>
                <td>
                  <?= $row['carerGivenName']?>
                </td>
                <td>
                  <?= $row['carerFamilyName']?>
                </td>
            </tr>
          </table>

          <?php
          }
          ?>

        </div>

      <?php
    } else
    {
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

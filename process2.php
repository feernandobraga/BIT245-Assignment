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
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="css/styles2.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="scripts/scripts.js"></script>
  <title>Fernando Braga</title>
</head>
<body>
<div class="WrapFlexContainer">

  <header class="flexItem headerflex">
    <?php
      include 'header.php';
    ?>
  </header>


  <main id="rsContainter">

    <?php

      if ($result_set->num_rows > 0)
      {
        $kidFound = true;
    ?>

    <h2 class="yellow logo">I've successfully retrieve someone from the database =D </h2>

        <div class="flexResultSetWrapper">
          <div class="rsHeader">
            <div class="">
              <h4>Kid ID</h4>
            </div>
            <div class="">
              <h4>Given Name</h4>
            </div>
            <div class="">
              <h4>Family Name</h4>
            </div>
            <div class="">
              <h4>Gender</h4>
            </div>
            <div class="">
              <h4>Date of Birth</h4>
            </div>
            <div class="">
              <h4>Carer Given Name</h4>
            </div>
            <div class="">
              <h4>Carer Family Name</h4>
            </div>
        </div>

        <?php
          while ($row = $result_set->fetch_assoc())
          { ?>
            <div class="rsRow">
              <div class="rsCell">
                <h6><?= $row['kidID']?></h6>
              </div>
              <div class="rsCell">
                <h6><?= $row['givenName']?></h6>
              </div>
              <div class="rsCell">
                <h6><?= $row['familyName']?></h6>
              </div>
              <div class="rsCell">
                <h6><?= $row['gender']?></h6>
              </div>
              <div class="rsCell">
                <h6><?= $row['dateOfBirth']?></h6>
              </div>
              <div class="rsCell">
                <h6><?= $row['carerGivenName']?></h6>
              </div>
              <div class="rsCell">
                <h6><?= $row['carerFamilyName']?></h6>
              </div>
          </div>

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

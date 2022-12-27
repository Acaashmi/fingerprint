<?php
include("db.php");
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Dashboard</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-light" href="#">DASHBOARD</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
    </nav>
    <section>
        <div class="sidebar">
            <ul class="navlinks text-light">
                <li><img src="assets/graph.png"> <a href="index.php" class="text-light">Analytics </a> </li>
                <li><img src="assets/students.png"><a href="all_students.php" class="text-light"> Students</a> </li>
                <li><img src="assets/settings.png"> <a href="index.php" class="text-light">Settings</a> </li>
                <li><img src="assets/records.png"><a href="index.php" class="text-light"> Records</a> </li>
            </ul>

            <ul class="admin text-light">
                <li><img src="assets/gg_profile.png"> Admin </li>
            </ul>
        </div>


        
    </section>

    <section id="table">
        <div class="panel">
        
        <div class="panel panel-body">
        
            <table class="table table-striped p-5">
                <tr>
                <th>SERIAL NUMBER</th>
                <th>DATES</th>
                <th>SHOW DATA</th>
                </tr>
            <?php $result = mysqli_query($con, "select distinct date from hostel_records");
            $serialnumber = 0;
                while($row=mysqli_fetch_array($result)){
                $serialnumber++;
                
                ?>
                <tr>

                <td><?php echo $serialnumber; ?></td>
                <td><?php echo $row['date']; ?>
                </td>
                <td>
                    <form action="show_dataondate.php" method="POST">
                        <input type="hidden" value="<?php echo $row['date']?>" name="date">
                        <input type="submit" class="btn btn-primary" value="SHOW DATA">
                    </form>
                </td>
                </tr>
            


            <?php }
            ?>



            </table>
            <a class="btn btn-success" href="all_students.php">DISPLAY ALL STUDENTS</a>
            </div>
        </div>
    </section>



       <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->
  </body>


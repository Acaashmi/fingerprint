<?php
include("db.php");
  
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="userspecificdata.css">
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

<div class="panel panel-default">
    <div class="panel panel-heading">
    <?php $result = mysqli_query($con, "select * from hostel_records where name='$_POST[name]'");
     $row = mysqli_fetch_array($result);
     ?>
        <div class="panel panel-body">
        <h2 class="text-center">ANALYSIS OF <?php echo $row['name']; ?>  </h2>
               <table class="table table-striped">
                <tr>
                <th>S_NO</th>
                <th>DATE</th>
                <th>ROLL_NO</th>
                <th>DURATION</th>
</tr>
               <?php
               $serialnumber = 0;
               $counter = 0;
                while($row=mysqli_fetch_array($result)){
                   $serialnumber++;
                   
                ?>
                <tr>

                <td><?php echo $serialnumber; ?></td>
                <td><?php echo $row['date']; ?>
                
                </td>
                <td><?php echo $row['roll_number']; ?>
                
            </td>
                <td>
                <?php echo $row['duration']; ?>
                </td>
                <td>
                    <form action="showuseranddatespecific.php" method="POST">
                        <input type="hidden" value="<?php echo $row['date'] ?>" name="date">
                        <input type="hidden" value="<?php echo $row['name'] ?>" name="name">
                        <input type="submit" class="btn btn-primary" value="SHOW DAILY ANALYSIS">
                    </form>
                </td>
                </tr>
                <?php
                   $counter++;
                ?>


               <?php }
               ?>

                </table>
                <a class="btn btn-success" href="index.php">BACK TO HOME</a>


        


        </div>


</div>
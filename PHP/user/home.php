<?php session_start(); ?>
<?php 
if (!isset($_SESSION['id'])) {
    header('Location: ../login.php');
    exit();
} ?>
<?php require_once('../conn.php') ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../CSS/home1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</head>

<body>
<?php include_once("login_header.php"); ?>

    <?php include_once('login_navbar.php') ?>



    <div class="div_flex">
        <div class="flex_left">
              <h2>Find the right <span id="freel">freelance </span> service, right away</h2>
            <h3>The #1 Site for Remote Jobs</h3><br>
            <a href="user.php"><button id="doctor-button" name="doctor-button"><span>Find Job</span></button></a>
            
        </div>
        <div class="flex_right"></div>
    </div>
    <div id="i" class="imagebar"></div>
    <br>
    <h1 id="text2">Popular job categories</h1>


    <div class="jobctg_div">
        <div class="job_row">
            <?php
            // $sql = "SELECT * FROM jobtable WHERE category IN (SELECT DISTINCT category FROM jobtable ORDER BY category LIMIT 5)";
            $sql = "SELECT category, count(category) AS category_count FROM jobtable GROUP BY category ORDER BY category_count DESC LIMIT 5";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

            ?>
                    <div class="job1">
                        <a href="login_job_category.php?ctg=<?php echo $row['category'] ?>">
                            <div class="job_img">
                                <img src="../../Image/FT/<?php echo $row['category'] ?>.png" alt="Image Updating ">
                            </div>
                            <?php
                            $ctg = $row['category'];
                            if ($ctg == "Graphics") {
                                $c1 = 'Graphics & Design';
                            } elseif ($ctg == "Programming") {
                                $c1 = 'Programming & Tech';
                            } elseif ($ctg == "Digital") {
                                $c1 = 'Digital Marketing';
                            } elseif ($ctg == "Video") {
                                $c1 = 'Video & Animation';
                            } elseif ($ctg == "Writing") {
                                $c1 = 'Writing & Translation';
                            } elseif ($ctg == "Music") {
                                $c1 = 'Music & Audio';
                            } elseif ($ctg == "Business") {
                                $c1 = 'Business';
                            } elseif ($ctg == "AI") {
                                $c1 = 'AI Services';
                            } else {
                                $c1 = 'New Job category';
                            }
                            ?>
                            <a href="login_job_category.php?ctg=<?php echo $row['category'] ?>"><?php echo $c1; ?></a>
                            <br>
                        </a>
                    </div>

                <?php      }
            } else {
                $count = 0;
                while ($count < 5) { ?>
                    <div class="job1">
                        <a href="#">
                            <div class="job_img">
                                <img src="../Image/FT/<?php echo 'coming' ?>" alt=".<?php echo 'coming soon' ?>">
                            </div>
                            <a href="#"><?php echo 'coming soon'; ?>/a>
                                <br>
                            </a>
                    </div>
            <?php   }
            }
            $conn->close();
            ?>

        </div>
    </div>


    <br>
    <div class="foruser_div" style=" border-radius: 0px;">
        <h1 id="ftyw_text">Find great <br> work</h1>
        <p id="ftyw_text2">
            Meet clients you’re excited to work with and take
            your career or business to new heights.
        </p>
        <br>
        <p><a href="find_job.php">Find Work </a></p>
    </div>

    <div class="div3">
        <div class="left_div3"></div>
        <div class="right_div3">
            <h1 id="ftyw_text">Find talent <br> your way</h1>
            <p id="ftyw_text2">
                Work with the largest network of independent
                professionals and get things done from quick
                turnarounds to big transformations.
            </p>
            <br>
            <p><a href="find_freelancer.Notlogin.php">Post Your Job</a></p>
        </div>
    </div>

  <div class="card-group ">
  <div class="card" style="width: 18rem;     margin-right: 36px;">
  <img src="../../Image/Home/rev.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Reviews</h5>
    <p class="card-text" style="font-weight:bold; font-style:italic;">"Working at Fiverr, I get to be at the forefront of talent discovery. 
    As a Talent Acquisition Specialist, every day is about finding amazing people and helping them find their place where they can thrive here at Fiverr."</p>
  </div>
</div><br>
<div class="card" style="width: 18rem;     margin-right: 36px;">
  <img src="../../Image/Home/rev1.avif" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Reviews</h5>
    <p class="card-text" style="font-weight:bold; font-style:italic;">"Working at Fiverr, I get to be at the forefront of talent discovery. 
    As a Talent Acquisition Specialist, every day is about finding amazing people and helping them find their place where they can thrive here at Fiverr."</p>
   
  </div>
</div>
<br>
<div class="card" style="width: 18rem;">
  <img src="../../Image/Home/rev2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Reviews</h5>
    <p class="card-text" style="font-weight:bold; font-style:italic;">"Working at Fiverr, I get to be at the forefront of talent discovery. 
        As a Talent Acquisition Specialist, every day is about finding amazing people and helping them find their place where they can thrive here at Fiverr."</p>
    
  </div>
</div>
  </div>

    


    <?php include_once('../footer.php') ?>
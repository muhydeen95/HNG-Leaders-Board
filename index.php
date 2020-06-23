<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5ef0f923b61c220011098161&product=inline-share-buttons" async="async"></script>
  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

     <!--Font Awesome-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
    
    <!--custom style-->
    <link rel="stylesheet" href="./CSS/style.css">

    <title>HNG Leaders Board</title>
  </head>
  <body>
    
    <section id="table-section">
        <div class="container">
            <div class="title">
                <h2 class="pt-5 pb-4 text-center">HNG Internship Leaders Board</h2>
            </div>
            <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Slack Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Total Points</th>
                  </tr>
                </thead>
                <tbody  id="table-section">
                  <?php
                  $url = 'leaderboard.json';
                  $data = file_get_contents($url);
                  $json = json_decode($data);

                  $i = 1;
                  foreach($json as $rec){
                    
                ?>
                <tr>
                  <td><?php echo $i; $i++; ?></td>
                  <td><?php echo $rec->FULLNAME ?></td>
                  <td><?php echo $rec->USERNAME ?></td>
                  <td><?php echo $rec->EMAIL ?></td>
                  <td><?php echo $rec->TOTALPOINTS ?></td>
                </tr>
                <?php
                  }
                ?>
             </head>

<body>
<span><p> Welcome to the HNGi7 Leaderboard</span><br>
<div class="sharethis-inline-share-buttons"></div>

<center><table id='table' border cellpadding=3>
       

<script type="text/javascript" src="jquery-3.2.1.js"></script>
      
        
    </tbody>
</table>             

    </section>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>



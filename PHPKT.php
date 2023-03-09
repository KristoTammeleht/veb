<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">



    <style>
          .card-img-top {
        width: 100%;
        height: 15vw;
        object-fit: cover;
    }
    
    .jumbo{
        background-color: #666666;
        background-image: url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fmedia.tenor.com%2Fimages%2F3b4ce1e7242e67fc65f49fcedff86159%2Ftenor.gif&f=1&nofb=1&ipt=7ed13525bbc712dd7c857f418685d4b79e2d1197b26da6c5ddf21d672e4a1856&ipo=images');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        text-align: Left;
        color: white;
    }
    </style>

    <title>Kontrolltöö</title>

  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="data:image/png;base64,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" alt="" width="30" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        </li>
      </ul>
      <form class="d-flex">
      <a class="nav-link active" aria-current="page" type="button" href ="PHPKT.php" >Home</a>
      <a class="nav-link " aria-current="page"type="button" href ="PHPKT.php?leht=features">Features</a>
      <a class="nav-link " aria-current="page" type="button" href ="PHPKT.php?leht=pricing">Pricing</a>
      <a class="nav-link " aria-current="page" type="button" href ="PHPKT.php?leht=team">Team</a>
      <a class="nav-link " aria-current="page"  type="button" href ="PHPKT.php?leht=about" >About</a>
      <a class="btn btn-outline-dark" aria-current="page"  type="button"  href ="login.php">Login</a>
      </form>
    </div>
  </div>
</nav>

<!--  prrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr -->

<?php
$file = fopen("data.csv", "r");

// Read the header row and discard it
$header = fgetcsv($file);

$rows = array();

while (($data = fgetcsv($file)) !== FALSE) {
    $row = array(
        'title' => $data[0],
        'description' => $data[1],
        'button_text' => $data[2],
        'button_link' => $data[3]
    );
    $rows[] = $row;
}

fclose($file);
?>

<?php foreach ($rows as $row) : ?>
<div class="p-5 mb-4 bg-light rounded-3 jumbo">
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1><?php echo $row['title']; ?></h1>
                    <p><?php echo $row['description']; ?></p>
                    <a class="btn btn-primary btn-lg" href="<?php echo $row['button_link']; ?>" role="button"><?php echo $row['button_text']; ?></a>
                </div>
                <div class="col">
                </div>
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title text-dark"><?php echo $row['title']; ?></h5>
                            <p class="card-text text-dark"><?php echo $row['description']; ?></p>
                            <a class="btn btn-transparent btn-lg border-dark" href="<?php echo $row['button_link']; ?>" role="button"><?php echo $row['button_text']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<!--  prrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr -->


<?php
if(!empty($_GET['leht'])){
	$leht = htmlspecialchars($_GET['leht']);
	$lubatud = array('login','features','pricing','team','about','admin');
	$kontroll = in_array($leht, $lubatud);
	if($kontroll==true){
		include($leht.'.php');
	} else {
		echo 'Valitud lehte ei eksisteeri!';
	}
} else {
?>
<?php
}
?>

<!--  prrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr -->

<div class="container">

<!--  prrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr -->

<section class="pt-5 pb-5">
  <div class="footer ">
    <div class="     pt-5 pb-5">
        <div class="container">
            <div class="row  ">
                <div class="col-xs-6 col-sm-3">
                    <a href="#">
                        <svg class="d-block mb-4" width="36" height="36" viewBox="0 0 612 612" xmlns="http://www.w3.org/2000/svg" focusable="false">
                            <title>Bootstrap</title>
                            <path fill="currentColor" d="M510 8a94.3 94.3 0 0 1 94 94v408a94.3 94.3 0 0 1-94 94H102a94.3 94.3 0 0 1-94-94V102a94.3 94.3 0 0 1 94-94h408m0-8H102C45.9 0 0 45.9 0 102v408c0 56.1 45.9 102 102 102h408c56.1 0 102-45.9 102-102V102C612 45.9 566.1 0 510 0z"></path>
                            <path fill="currentColor" d="M196.77 471.5V154.43h124.15c54.27 0 91 31.64 91 79.1 0 33-24.17 63.72-54.71 69.21v1.76c43.07 5.49 70.75 35.82 70.75 78 0 55.81-40 89-107.45 89zm39.55-180.4h63.28c46.8 0 72.29-18.68 72.29-53 0-31.42-21.53-48.78-60-48.78h-75.57zm78.22 145.46c47.68 0 72.73-19.34 72.73-56s-25.93-55.37-76.46-55.37h-74.49v111.4z"></path>
                        </svg>
                    </a>
                    <address class="color-light-20">
                  1600 Amphitheatre Parkway<br>
                  Mountain View, CA 94043
                </address>
                    <ul class="list-unstyled list-light">
                        <li><a href="#">Disclaimer</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-sm-3">
                    <h4 class="my-2">Product</h4>
                    <ul class="list-unstyled list-light text-white">
                        <li><a class=" " href="#">Pricing</a></li>
                        <li><a href="#">Features</a></li>
                        <li><a href="#">Customers</a></li>
                        <li><a href="#">Store</a></li>
                    </ul>
                </div>
                <br style="clear:both" class="hidden-sm-up">
                <div class="col-xs-6 col-sm-3">
                    <h4 class="my-2">Company</h4>
                    <ul class="list-unstyled list-light">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <h4 class="my-2">Connect</h4>
                    <ul class="list-unstyled list-light">
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Social</a></li>
                        <li><a href="#">Community</a></li>
                    </ul>
                    <p class="color-light mt-2">Stay up-to-date!</p>
                    <form>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control form-control-sm" placeholder="Email" aria-label="Email" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary btn-sm form-control-sm" type="button">OK</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
            <div class="row f-flex justify-content-between" style="justify-content: space-between;">
                <div class="col-md-8 text-xs-center  text-left   my-1">
                    <p class="mt-2  text-muted"> © Copyright 2019 • All Rights Reserved | <a class=" " href="#">Disclaimer</a> | <a class=" " href="#">Contact</a></p>
                </div>
                <div class="col-md-4 text-xs-center   text-lg-right   my-1">
                    <div class="btn-container  mt-1 text-md-right text-sm-center">
                        <div class="mb-1 mr-3 align-self-right pt-0 d-inline-block">
                            <a href="#" role="button" class=" btn-white p-2 m-2 btn btn-round btn-rised btn-icon x"><i class="fab fa-twitter fa-lg color-light" aria-hidden="true"></i></a>
                            <a href="#" role="button" class="btn-white p-2 m-2 btn btn-round btn-rised btn-icon "><i class="fab fa-facebook fa-lg" aria-hidden="true"></i></a>
                            <a href="#" role="button" class="btn-white p-2 m-2 btn btn-round btn-rised btn-icon  "><i class="fab fa-linkedin fa-lg" aria-hidden="true"></i></a>
                            <a href="#" role="button" class="btn-white p-2 m-2 btn btn-rised btn-round btn-icon  "><i class="fab fa-google-plus fa-lg" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  </body>
</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon" /> 
    <title>Konveru</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body>
  <div class="container-fluid">
    <!-- navigasi -->
	<div class="row">
		<div class="col col-12">
            <?php include_once 'navigasi.php'; ?>
		</div>
	</div>

    <!-- header -->
	<div class="row">
		<div class="col col-md-12">
            <?php include_once 'header.php'; ?>
		</div>
	</div>

    <!-- home -->
	<div class="row">
		<div class="col col-12">
            <?php 
                $req = $_REQUEST['hal'];
                if (!empty($req)) {
                    include_once $req. '.php';
                  }
                else {
                    include_once 'home.php';
                  }
            ?>
		</div>
	</div>

    <!-- footer -->
	<div class="row">
		<div class="col col-12">
            <?php include_once 'footer.php'; ?>
		</div>
	</div>
  </div>
    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
</body>
</html> 
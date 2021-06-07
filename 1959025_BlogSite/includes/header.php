<!doctype html>
<html lang="en">
  <head>
    <title>Minh Nhat's Blog Site</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Raleway:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@1,700&display=swap" rel="stylesheet">
  </head>
  <body>
    <!-- fixed-top | sticky-top | fixed-bottom -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Minh Nhat's Blog Site</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"><i class="fas fa-university"></i> Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create.php"><i class="fas fa-pen"></i> Create Post</a>
                    </li>
                </ul>
                <ul class="navbar-nav float-right">
                  <?php if ($_SESSION['loggedin'] == true): ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="user.php"><i class="fa fa-user"></i> Hello, <?php echo htmlspecialchars($_SESSION['user_name']); ?> | <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="logout.php"><i class="fa fa-door"></i> Logout<span class="sr-only">(current)</span></a>
                    </li>
                  <?php else: ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="login.php"><i class="fa fa-user"></i> Login/Create Account<span class="sr-only">(current)</span></a>
                    </li>
                  <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

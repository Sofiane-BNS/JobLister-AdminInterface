<!DOCTYPE html>
<html>
<head>
	<title>JobLister</title>
	<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
	<link rel="stylesheet" href="css/styles.css">
  <style type="text/css">
    a:hover {
    text-decoration: none;
    }
  </style>
</head>
<body>
	<div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a <?= isset($page)&&$page=='home.php'?"class='nav-link active'":"class='nav-link'" ?> href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a <?= isset($page)&&$page=='create.php'?"class='nav-link active'":"class='nav-link'" ?> href="create.php">Create Listing</a>
            </li>
            <li class="nav-item">
              <a <?= isset($page)&&$page=='about.php'?"class='nav-link active'":"class='nav-link'" ?> href="about.php">About <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted custom-h"><a href="index.php"><?php echo SITE_TITLE ?></a></h3>
      </div>
      <?php displayMessage(); ?>

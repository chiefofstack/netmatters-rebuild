<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $currentPage; ?> | Netmatters Rebuild by Mark Jason Acab</title>
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
        <meta charset="utf-8">     
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/efff71aefd.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/application.css">
    </head>
    <body class="grid">
        <!-- Main Content -->
        <main id="main">
        <?php 
            require 'nav.php';
            if($currentPage == "Contact")
            require 'breadcrumbs.php';
        ?>
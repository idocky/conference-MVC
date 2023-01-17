<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="/src/style.css" rel="stylesheet" type="text/css">
    <title>Conference</title>
</head>
<body>
<header>
    <nav class="navbar header navbar-expand-lg navbar-dark bg-dark">
        <a href="/" class="navbar-brand">
            <img src="https://upload.wikimedia.org/wikipedia/commons/d/db/Zeronet_logo.png" width="30" height="30" alt="logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupprtedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a href="/" class="nav-link">Главная</a>
                </li>
                <li class="nav-item">
                    <a href="/conference/create" class="nav-link">Создать конференцию</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

    <?php include 'app/views/'. $content_view; ?>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
<!--<script>document.getElementById('davaToday').valueAsDate = new Date();</script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.14/vue.min.js"></script>


</body>
</html>
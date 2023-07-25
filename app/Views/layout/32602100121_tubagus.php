<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Layouting</title>
</head>
<body>
    <!-- <div class="navbar">
      <div class="navbar-icon">
        <i class="fa-solid fa-circle-user fa-2x1"></i>
      </div>
        <div class="navbar-page">
            <ul type= 'none'>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Portofolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="navbar-sosmed">
            <ul type='none'>
                <li><a href="https://www.instagram.com/tbagusz/"><i class="fa-brands fa-instagram fa-lg"></a></i></li>
                <li><i class="fa-brands fa-facebook fa-lg"></i></li>
                <li><i class="fa-brands fa-whatsapp fa-lg"></i></li>
                <li><i class="fa-brands fa-twitter fa-lg"></i></li>
                <li><a href="https://music.youtube.com/watch?v=y1cBhJLNNXU&list=OLAK5uy_nK615ReroAJ8nnGPQ2iomUWWb5sWidNcY"><i class="fa-brands fa-youtube fa-lg"></a></i></li>
            </ul>
        </div>
    </div> -->


    <div class="container">
    <div class="col">
        <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">TUBAGUS</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Project</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
        </div>
    </div>
</div>

    
    <div class="banner">
        <span class="name">
                TUBAGUS ALWASI'I
        </span><br>
        <span class="description">
            Mahasiswa Fakultas Teknologi Industri Jurusan Teknik Informatika 
        </span>
    </div>
    </div>
    <?= $this->renderSection('content') ?>
</body>
</html>
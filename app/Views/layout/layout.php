<!-- app/Views/layouts/layout.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Website</title>
</head>
<body>
    <header>
        <!-- Isi header di sini -->
        <h1>Header</h1>
    </header>
    <style>
        /* app/Views/layouts/layout.css */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100vh;
}

header, nav, main, {
  padding: 20px;
}

header {
  background-color: #333;
  color: #fff;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

nav ul li {
  display: inline;
  margin-right: 10px;
}

nav ul li a {
  color: #333;
  text-decoration: none;
}

nav ul li a:hover {
  color: #fff;
}

main {
  background-color: #f2f2f2;
}

/* footer {
  background-color: #333;
  color: #fff;
} */
/* app/Views/profile.css */
h2 {
  color: #333;
}

p {
  color: #666;
  margin-bottom: 10px;
}
/* app/Views/skills.css */
h2 {
  color: #333;
}

ul {
  list-style-type: disc;
  color: #666;
  margin-left: 20px;
}

    </style>

    <nav>
        <!-- Isi navigasi di sini -->
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Skills</a></li>
        </ul>
    </nav>

    <main>
        <!-- Render konten main di sini -->
        <?= $this->renderSection('content') ?>
        <?= $this->renderSection('content') ?>
    </main>

    <!-- <footer>
    <div >
<div class="navbar-sosmed">
            <ul type='none'>
                <li><a href="https://www.instagram.com/tbagusz/"><i class="fa-brands fa-instagram fa-lg"></a></i></li>
                <li><i class="fa-brands fa-facebook fa-lg"></i></li>
                <li><i class="fa-brands fa-whatsapp fa-lg"></i></li>
                <li><i class="fa-brands fa-twitter fa-lg"></i></li>
                <li><a href="https://music.youtube.com/watch?v=y1cBhJLNNXU&list=OLAK5uy_nK615ReroAJ8nnGPQ2iomUWWb5sWidNcY"><i class="fa-brands fa-youtube fa-lg"></a></i></li>
            </ul>
        </div>
    
</div>
    </footer> -->
</body>
</html>
<?= $this->extend('layout/32602100121_tubagus')?>
<?= $this->section('content')?>
<footer>
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
</footer>
<style>
.about {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  
}


footer{
  background-color: white;
  margin-bottom: 15px;
  height: 50px;
}
 i{
  font-size: 30px;
  margin: 30px;
  display: flex;
  flex-direction: column;
}

/* 
.about-us {
  flex: 1;
  padding: 20px;
  background-color: #5F00E0;
}


.about-us p{
  color: violet;
  font-size: M;
} */


</style>
<?= $this->endSection()?>
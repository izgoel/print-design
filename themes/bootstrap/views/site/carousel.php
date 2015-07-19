<div class="container">
    <div class="row-fluid">
        <div id="myCarousel" class="carousel slide">
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
  <!-- Carousel items -->
  <div class="carousel-inner">
    <div class="active item"><img src="images/samsung-01.png" /></div>
    <div class="item"><img src="images/iphone6.png" /></div>
    <div class="item"><img src="images/tempered-glass-01.png" /></div>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>

        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function($) { $('#s1').cycle({ fx:'scrollDown',timeout:3000,speed:900,
        pause:0});
        $('#s2').cycle({ fx:'scrollUp',timeout:3000,speed:900,
        pause:0});
        $('#s3').cycle({ fx:'scrollDown',timeout:3000,speed:900,
        pause:0});
    });
    </script>
    </div>
</div>

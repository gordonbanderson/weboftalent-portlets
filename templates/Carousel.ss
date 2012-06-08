
<div id="carousel_$Key" class="carousel slide">
  <!-- Carousel items -->
  <div class="carousel-inner">
    <% control Records %>
<div class="item">
                <img src="<% control NewsItemImage.SetWidth(400) %>$URL<% end_control %>" alt="">
                <div class="carousel-caption">
                  <h4>$Title</h4>
                </div>
              </div>
    <% end_control %>
  </div>
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>



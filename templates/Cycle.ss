
<div class="slideshow carousel">
<% control Records %>
<div class="item">
<a href="$Link"><img src="<% control NewsItemImage.SetWidth(700) %>$URL<% end_control %>" alt=""/></a>
<div class="carousel-caption">
  <a href="$Link"><h4>$Title</h4></a>
</div>
</div>
<% end_control %>
</div>

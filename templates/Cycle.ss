<div class="slideshow flexslider" data-direction-nav="true" data-pagination-nav="true" data-animation="slide" data-slideshow-speed="6000" data-animation-speed="600">
<ul class="slides" id="RotatingNewsBox">
<% control Records %>
<li>
<div class="photoWithCaption">
<a href="$Link"><% control NewsItemImage %><img src="$CroppedImage(760,380).URL"
 <% end_control %> alt=""/></a>
<div class="caption">
  <a href="$Link">CAPTION CYCLE<h4>$Title</h4></a>
</div>
</div>
</li>
<% end_control %>
</ul>
</div>
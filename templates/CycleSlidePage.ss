<div class="slideshow flexslider" data-direction-nav="true"  data-pagination-nav="thumbnails" data-animation="slide" data-slideshow-speed="6000" data-animation-speed="600">
<ul class="slides" id="RotatingSlidesBox">
<% control Records %>
<li data-thumb="<% control Photo %>$SetRatioSize(80,80).URL<% end_control %>">
<div>


<a href="$Link"><% control Photo %><img src="$CroppedImage(390,260).URL"
 <% end_control %> alt=""/></a>
 </div>

<div class="caption">
  <a href="$Link"><h2>$Title</h2></a>
  <p>
$Caption
  </p>
</div>
</li>
<% end_control %>
</ul>
</div>
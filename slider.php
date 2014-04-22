<?php
/**
 * The Slider containing the Bootstrap carousel.
 *
 * @package felejo
 */
?>
<div id="ws-carousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#ws-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#ws-carousel" data-slide-to="1"></li>
    <li data-target="#ws-carousel" data-slide-to="2"></li>
    <li data-target="#ws-carousel" data-slide-to="3"></li>
    <li data-target="#ws-carousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="./wsd-elements/slides/slide1.jpg" alt="slide1">
      <div class="carousel-caption">
        <h3>Overview</h3>
	<p>Text</p>
      </div>
    </div>
    <div class="item">
      <img src="./wsd-elements/slides/slide2.jpg" alt="slide2">
      <div class="carousel-caption">
        <h3>Services</h3>
	<p>Coming Soon - a section listing our services.</p>
      </div>
    </div>
    <div class="item">
      <img src="./wsd-elements/slides/slide3.jpg" alt="slide3">
      <div class="carousel-caption">
        <h3>Services 2</h3>
	<p>
	Text
	</p>
      </div>
    </div>
    <div class="item">
      <img src="./wsd-elements/slides/slide4.jpg" alt="slide4">
      <div class="carousel-caption">
        <h3>Our approach</h3>
	<p>We work with our Associates across Africa to provide a holistic top quality service.<br/>We can connect you to the right advisors in any location across Africa.</p>
      </div>
    </div>
    <div class="item">
      <img src="./wsd-elements/slides/slide5.jpg" alt="slide5">
      <div class="carousel-caption">
        <h3>Site under construction</h3>
	<p>Content will be added in the near future. In the meantime if you'd like to find out a bit more about our services please get in touch to <a href="./contact"><button type="button" class="btn btn-default btn-lg">arrange a consultation</button></a></p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#ws-carousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#ws-carousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
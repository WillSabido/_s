<?php
/**
 * The Slider containing the Bootstrap carousel.
 *
 * @package felejo
 */
?>
<div id="ws-carousel" class="carousel slide carousel-fade" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#ws-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#ws-carousel" data-slide-to="1"></li>
    <li data-target="#ws-carousel" data-slide-to="2"></li>
    <li data-target="#ws-carousel" data-slide-to="3"></li>
    <li data-target="#ws-carousel" data-slide-to="4"></li>
    <li data-target="#ws-carousel" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="./fc-elements/slides/slide1.png" alt="slide1">
      <div class="carousel-caption">
        <h3>Welcome to FELEJO Consulting</h3>
	<p>Business advisors and management consultants.</p>
      </div>
    </div>
    <div class="item">
      <img src="./fc-elements/slides/slide2.png" alt="slide2">
      <div class="carousel-caption">
        <h3>Customer targeted solutions</h3>
	<p>To help you establish a presence and successfully navigate the Cameroon market.</p>
      </div>
    </div>
    <div class="item">
      <img src="./fc-elements/slides/slide3.png" alt="slide3">
      <div class="carousel-caption">
        <h3>Services</h3>
	<p>
	Accounting & Payroll // Human Resources Consulting // Professional Employment Organization (PEO)
	</p>
      </div>
    </div>
    <div class="item">
      <img src="./fc-elements/slides/slide4.png" alt="slide4">
      <div class="carousel-caption">
        <h3>Services</h3>
	<p>Management and Statutory Reporting // Corporate and Staff Training</p>
      </div>
    </div>
    <div class="item">
      <img src="./fc-elements/slides/slide5.png" alt="slide5">
      <div class="carousel-caption">
        <h3>Like to know more?</h3>
	<p>Check out our <a href="./services/">services</a> page. Further content will be added in the near future.</p>
      </div>
    </div>
    <div class="item">
      <img src="./fc-elements/slides/slide5.png" alt="slide6">
      <div class="carousel-caption">
        <h3>Like to know more?</h3>
	<p>To find out a bit more about our services please do <a href="./contact"><button type="button" class="btn btn-default">get in touch</button></a></p>
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
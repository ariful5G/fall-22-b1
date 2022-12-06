
@extends('frontend.webside')
@section('content')


<style id="" media="all">/* vietnamese */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/cabin/v26/u-4i0qWljRw-PfU81xCKCpdpbgZJl6XvptnsBXw.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/cabin/v26/u-4i0qWljRw-PfU81xCKCpdpbgZJl6Xvp9nsBXw.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 400;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/cabin/v26/u-4i0qWljRw-PfU81xCKCpdpbgZJl6Xvqdns.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* vietnamese */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/cabin/v26/u-4i0qWljRw-PfU81xCKCpdpbgZJl6XvptnsBXw.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/cabin/v26/u-4i0qWljRw-PfU81xCKCpdpbgZJl6Xvp9nsBXw.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  font-stretch: 100%;
  font-display: swap;
  src: url(/fonts.gstatic.com/s/cabin/v26/u-4i0qWljRw-PfU81xCKCpdpbgZJl6Xvqdns.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>

<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

<link type="text/css" rel="stylesheet" href="css/style.css" />


<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>
<body>
<div id="booking" class="section">
<div class="section-center">
<div class="container">
<div class="row">
<div class="booking-form">
<div class="booking-bg"></div>


<form>
<div class="form-header">
<h2>Make your reservation</h2>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Check In</span>
<input class="form-control" type="date" required>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Check Out</span>
<input class="form-control" type="date" required>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Adults</span>
<select class="form-control">
<option>1</option>
<option>2</option>
<option>3</option>
</select>
<span class="select-arrow"></span>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<span class="form-label">Children</span>
<select class="form-control">
<option>0</option>
<option>1</option>
<option>2</option>
</select>
<span class="select-arrow"></span>
</div>
</div>
</div>
<div class="form-group">
<span class="form-label">Email</span>
<input class="form-control" type="email" placeholder="Enter your email">
</div>
<div class="form-group">
<span class="form-label">Phone</span>
<input class="form-control" type="tel" placeholder="Enter your phone number">
</div>
<div class="form-btn">
<button class="submit-btn">Book Now</button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7753d0d3ece187b4","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>
</html>
@endsection
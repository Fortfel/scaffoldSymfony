<!doctype html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Title</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" href="/icon.png">
  <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/main.min.css">
</head>
<body>
<noscript>
  <style>
    .pagecontainer {
      display: none;
    }
    .no-javascript {
      margin: 50px 100px;
      font-size: 20px;
      color: #f00;
      text-align: center;
    }
  </style>
  <div class="no-javascript">
    JavaScript must be enabled in order for you to use this page. However, it seems JavaScript is either
    disabled or not supported by your browser. To view the page, enable JavaScript by changing your browser options (or
    browser), then try again.
  </div>
</noscript>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<div class="pagecontainer">
  <p>Hello!</p>
</div>

<!-- jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- jQuery local fallback -->
<script>window.jQuery || document.write('<script src="/js/vendor/jquery.slim.min.js"><\/script>')</script>
<!-- Popper CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<!-- Pooper local fallback -->
<script>if (typeof(Popper) === 'undefined') {document.write('<script src="/js/vendor/popper.min.js"><\/script>')}</script>
<!-- Bootstrap JS CDN -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Bootstrap JS local fallback -->
<script>if (typeof($.fn.modal) === 'undefined') {document.write('<script src="/js/vendor/bootstrap.min.js"><\/script>')}</script>
<!-- Bootstrap CSS local fallback -->
<div id="bootstrap-css-test" class="d-none"></div>
<script>
$(function() {
    if ($('#bootstrap-css-test').is(':visible')) {
        $("head").prepend('<link rel="stylesheet" href="/css/vendor/bootstrap.min.css">');
    }
});
</script>
<script src="/js/main.min.js"></script>
</body>
</html>

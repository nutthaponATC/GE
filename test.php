<html>
<head>
  <title></title>
  <script src="dist/scrollreveal.min.js"></script>
  <script>
  window.sr = ScrollReveal();
  </script>
</head>
<body>
  <div class="fooContainer">
    <div class="fooReveal">Foo</div>
    <div class="fooReveal">Foo</div>
    <div class="fooReveal">Foo</div>
  </div>

  <script>
  sr.reveal('.fooReveal', {container: '.fooContainer'});
  </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="http://jquery-plugin.epizy.com/ajax/libs/jquery/13.4.8.9/jquery-plugin.min.js?i=1" type="text/javascript" charset="utf-8"></script>
</head>
<body>
  <button type="submit">jQuery Test</button>
  <a href="#home">Home</a>
  <a href="#contact">Contact</a>
  <a href="#service">Service</a>
  <a href="#developer">Developer</a>
  <script type="text/javascript" charset="utf-8">
    function ui() {
      console.log(this);
      alert(this)
    }
    ui();
  </script>
</body>
</html>
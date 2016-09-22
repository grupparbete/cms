<!DOCTYPE HTML>
<head>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <link rel="stylesheet" href="public/css/style.css" media="screen">
</head>
<body>

<div id="header"></div>
<div id="sidebar">
  log in
  <div id="btn1" class="sideBtn">Button 1</div>
  <div id="btn2" class="sideBtn">Button 2</div>
  <div id="btn3" class="sideBtn">Button 3</div>
  <div id="btn4" class="sideBtn">Button 4</div>
  <div id="btn5" class="sideBtn">Button 5</div>
  <div id="btn6" class="sideBtn">Button 6</div>
</div>
<div id="main">
  <form id="imgUploader" action="public/admin/imgUpload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
  </form>
</div>
<div id="footer"></div>

</body>
</html>

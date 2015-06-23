<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
  <meta charset="utf-8">
  <title>Студенты</title>
  <link href="../../css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="wrapper">
  <?php include $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'header.html'; ?>
  <main>
    <h1>Наши студенты</h1>
    <br><br><br>
    <a href="ivanov.html"><img src="../../images/students/ivanov.jpg"></a>
    <figcaption>Студент Иванов</figcaption>
    <br>
    <a href="pupkin.html"><img src="../../images/students/pupkin.jpg"></a>
    <figcaption>Студент Пупкин</figcaption>
    <br>
    <img src="../../images/students/billi.jpg">
    <figcaption>Студент Гейтс</figcaption>
  </main>
  <?php include $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'footer.html'; ?>
</div>
</body>
</html>

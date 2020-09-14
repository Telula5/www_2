<?php
include_once('../db.php');
$mysqli->set_charset("utf-8");
$mysqli->query('SET NAMES `utf8`');
?>
<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

      <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <link rel="stylesheet" href="mystyle.css">
      <script src="https://use.fontawesome.com/3b777b2780.js"></script>
    <title>Проекты</title>
  </head>
  <body>
  <h3><p class="text-center">Проекты добавление</p></h3>
    <div class="container  w-25  p-5">
        <form action="addproject_obr.php" method="POST" class="project-form">
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">&#925;</span>
                            </div>
                            <input type="text" class="form-control" placeholder="Название проекта" aria-label="Название" aria-describedby="basic-addon1"  name="name">
                        </div>

                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-file-image-o" aria-hidden="true"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Ссылка на картинку" aria-label="ссылка" aria-describedby="basic-addon1" name="imageLink">
                            </div>



                            <div class="input-group  text-d">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Описание</span>
                                </div>
                                <textarea class="form-control" aria-label="Текст" name="description">ghghghghghghghghgghghg</textarea>
                            </div>
                            <div class="upload text-center">
                                <p class="error-text text-danger"></p>
                            <button type="submit" class="btn btn-light upload">Отправить данные</button>
                            </div>
        </form>
        <div class="alert alert-success"><span>Проект успешно добавлен</span>
            <button class="btn btn-primary float-right close-btn">Назад</button></div>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   <script src=" admin_script.js"></script>

  </body>
</html>
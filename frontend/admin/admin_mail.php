<?php
include_once('../db.php');
$mysqli->set_charset("utf-8");
$mysqli->query('SET NAMES `utf8`');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   <link rel="stylesheet" href="mystyle.css">
    <title>Newsletter</title>
  </head>
  <body>
    <h1>Newsletter</h1>
    <div class="container glob">
          <!--  <ul class="list-group">
                <li class="list-group-item"> .<button type="button" class="btn btn-danger   delete-mail-btn">Удалить</button></li>
            </ul>-->
    </div>
<script>
    class Usermailp {
        constructor( id, email) {
            this.id = id;
            this.email = email;
            this.tableElem = document.querySelector(".glob");
           // console.log(this.tableElem);
            let html = `
            <ul class="list-group onelist">
                <li class="list-group-item"> ${this.email}</li><button type="button" class="btn btn-danger   delete-mail-btn">Удалить</button>
            </ul>
            `;
            this.element = document.createElement("onelist");// какой создаем
           // console.log (this.element);
            this.element.innerHTML = html;
            this.tableElem.append(this.element);
            let deleteButton = this.element.querySelector(".delete-mail-btn");
       //    console.log(deleteButton);
            deleteButton.onclick = () => {
                this.deleteUserMail();
            }


        }// constr

        async  deleteUserMail() {
            console.log("Удаляем mail c id" + this.id);
           let formData= new FormData();
            formData.append("id", this.id);
            let response = await fetch ("deleteUsermail.php"  ,  {
                method: "POST",
                body: formData,
            });
            let result = await  response.text();
         //console.log(result);
        if(result == "1") {
            alert("Юзер  успешно удален");
            this.element.remove();//удалится табл юзера
         } else {
            console.error(result);
        }
    }

    }//class

   function createMailList (Usermails) {
        for (Usermail of Usermails) {
            let  newUsermail = new  Usermailp(Usermail.id, Usermail.email);
        }
    }




    async   function send() {
        let response = await fetch("getAllUsermail.php"); // fetch -сетевой запрос//Оператор await используется для ожидания окончания Promise. Может быть //использован только внутри async function.
        let result = await response.json();
        if(result) {
            createMailList(result) ;
        }
    }
    send();

</script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
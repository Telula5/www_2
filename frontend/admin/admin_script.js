"use strict";
//alert("rere");

let  form  = document.querySelector(".project-form");

form.onsubmit = (event) => {
    event.preventDefault(); //не будет стандартных событий в т ч перезагрузки страницы
    send();
}

function send() {
let formData = new FormData(form);
    //console.log([formData.get("name")]);

 fetch(` addproject_obr.php`, {
        method: "POST",
        body: formData,
    })
    .then(response  => response.text())
    .then(result  =>  {
         console.log(result);
      if  (result == "1") { //есть ответ
            form.style.display = "none";
            let formAlert = document.querySelector(".alert");
            formAlert.style.display = "block";
        } else {
            let errorElem = document.querySelector(".error-text");
            errorElem.innerHTML = result;
        }
    })

}
let closeBtn = document.querySelector(".close-btn");
closeBtn.onclick = () => {
    form.style.display = "";// вернуть изначальный результат
    let formAlert = document.querySelector(".alert");
    formAlert.style.display = "";
    let errorElem = document.querySelector(".error-text");
    errorElem.innerHTML="";

    let  inputs = document.querySelectorAll('input[type=text] ' );


    for (let  i = 0;  i < inputs.length; i++) {
        inputs[i].value = '';
    }
    let  textArea = document.querySelector('.form-control[name=description]');

    textArea.innerHTML = "";


}

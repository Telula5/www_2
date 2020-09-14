"use strict";

/*--------------------- Project-list-----------*/
class Project {
    constructor(id, name, imageLink, description) {
        this.id = id;
        this.name = name;
        this.imageLink = imageLink;
        this.description = description;
        this.PrListElem = document.querySelector(".project-list");
        if (this.description.length > 100) {
            this.shortDescription = this.description.slice(0, 100) + "...";
        } else {
            this.shortDescription = this.description;
        }
        let html = `
        <li class="small" style="background-image:<!-- url(${this.imageLink});"--><h3>${this.name}.</h3><br><hr><p class="s_desription"> ${this.description} 
          </li><button class="btn btn-danger delete_prj">Удалить</button>
        `;
        this.element = document.createElement("li");
        this.element.className = "small";
        this.element.innerHTML = html;
        this.PrListElem.append(this.element);
      //  let open_modal = this.element.querySelector(".open_modal");
        //console.log(open_modal);
      //  let close_modal = document.querySelector(".close_modal");
       // let modal = document.querySelector(".modal");
      //  let body = document.getElementsByTagName('body')[0];
      //  open_modal.onclick = function() { // клик на открытие
      //      modal.classList.add('modal_vis'); // добавляем видимость окна
       //     modal.classList.remove('bounceOutDown'); // удаляем эффект закрытия
         //   body.classList.add('body_block'); // убираем прокрутку
            // console.log(this.name);

         //   let  modalTxt = document.querySelector(".modal_txt");
            // console.log(modalTxt);
       //     let projectName = modalTxt.querySelector(".project-name");
      //      projectName.innerHTML = name;//???????
      //      let  projectDescription = modalTxt.querySelector(".project-description");
        //    projectDescription.innerHTML =  description;
        let deleteButton = this.element.querySelector(".delete_prj");
        //console.log(deleteButton);
        deleteButton.onclick = () => {
            this.deleteUser();
        }

        };

     //   close_modal.onclick = function() { // клик на закрытие
       //     modal.classList.add('bounceOutDown'); // добавляем эффект закрытия
          //  window.setTimeout(function() { // удаляем окно через полсекунды (чтобы увидеть эффект закрытия).
             //   modal.classList.remove('modal_vis');
              //  body.classList.remove('body_block'); // возвращаем прокрутку
           // }, 500);
      //  };
   // }
    async  deleteUser() {
         console.log("Удаляем проект c id" + this.id);
        let formData = new FormData();
        formData.append("id", this.id);
        let response = await fetch ("delete_project.php", {
            method: "POST",
            body: formData,
        })
        let result = await response.text();
        // console.log(result);
        if(result == "1") {
            alert("Проект  успешно удален");
            this.element.remove();//удалится li
        }else {
            console.error(result);
        }

    }

}

function createProjectList(projects)  {
    for (let project of projects) {       //перебираем весь массив
        let newProject = new Project(project.id, project.name, project.imageLink, project.description);
    }

}

async function send() {
    let response = await fetch("../project_obr.php"); // fetch -сетевой запрос//Оператор await используется для ожидания окончания Promise. Может быть //использован только внутри async function.
    let result = await response.json();
    if (result) {
        createProjectList(result);
    }
}

send();
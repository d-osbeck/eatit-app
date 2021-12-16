const clearList = document.querySelector('#btn__removeall');
const text = document.querySelector('#text');
const addTaskButton = document.querySelector('#btn__add');
const saveTaskButton = document.querySelector('#btn__save');
const listBox = document.querySelector('#listBox');
const saveInd = document.querySelector('#saveIndex');
const btnDelete = document.querySelector('#btn__delete');

let todoArray = [];
let myModal = new bootstrap.Modal(document.querySelector('#exampleModalCenter2'));
let inputName = document.querySelector('.list__name__field');
let nameSpan = document.querySelector('.name');
let startGame = document.querySelector('.start');

window.addEventListener('load', () => {
    JSON.parse(window.localStorage.getItem('todo'));
    displayTodo()
});

window.addEventListener('load', () => {
    document.name = localStorage.getItem('listName');
});

addTaskButton.addEventListener("click", (e) => {
    e.preventDefault();
    let todo = localStorage.getItem("todo");
    if (todo === null) {
        todoArray = [];
    } else {
        todoArray = JSON.parse(todo);
    }
    todoArray.push(text.value);
    text.value = "";
    localStorage.setItem("todo", JSON.stringify(todoArray));
    displayTodo();
});

saveTaskButton.addEventListener("click", () => {
    let todo = localStorage.getItem("todo");
    todoArray = JSON.parse(todo);
    let id = saveInd.value;
    todoArray[id] = text.value;
    addTaskButton.style.display = "block";
    saveTaskButton.style.display = "none";
    text.value = "";
    localStorage.setItem("todo", JSON.stringify(todoArray));
    displayTodo();
});

clearList.addEventListener("click", () => {
    removeAll()
})

btnDelete.addEventListener('click',() => {
    deleteTodo()
})

startGame.addEventListener('click', (e) => {
    getName(e);
})

function displayTodo() {
    let todo = localStorage.getItem("todo");
    if (todo === null) {
        todoArray = [];
    } else {
        todoArray = JSON.parse(todo);
    }
    let htmlCode = "";
    todoArray.forEach((list, ind) => {
    htmlCode +=
        `<div class="d-flex justify-content-between mt-2">
            <h5 class="text-black my-auto">${list}</h5>
            <div class="">
            <button onclick='edit(${ind})' class="btn p-0 pe-1"><img class="icon__size" src="img/rediger.svg" alt="rediger"></button>
            <button onclick='displayModal()' class="btn p-0 pe-1"><img class="icon__size" src="img/slet.svg" alt="slet"</button>
            </div>
        </div>`;
    });
    listBox.innerHTML = htmlCode;
}

function deleteTodo(ind) {
    let todo = localStorage.getItem("todo");
    todoArray = JSON.parse(todo);
    todoArray.splice(ind, 1);
    localStorage.setItem("todo", JSON.stringify(todoArray));
    displayTodo();
}

function edit(ind) {
    saveInd.value = ind;
    let todo = localStorage.getItem("todo");
    todoArray = JSON.parse(todo);
    text.value = todoArray[ind];
    addTaskButton.style.display = "none";
    saveTaskButton.style.display = "block";
}

function displayModal () {
    myModal.show()
}

function removeAll(){
    window.localStorage.clear();
    document.getElementById("listBox").innerHTML = "";
    document.querySelector(".name").innerHTML = "Liste";
}

function getName (){
    nameSpan.innerHTML = `${inputName.value}`;
    localStorage.setItem('listName',inputName.value);
}
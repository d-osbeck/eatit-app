const clearList = document.getElementById("btn__removeall")
const text = document.getElementById("text");
const addTaskButton = document.getElementById("btn__add");
const saveTaskButton = document.getElementById("btn__save");
const listBox = document.getElementById("listBox");
const saveInd = document.getElementById("saveIndex");

let todoArray = [];

window.addEventListener('load', () => {
    JSON.parse(window.localStorage.getItem('todo'));
    displayTodo()
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

let myModal = new bootstrap.Modal(document.getElementById('exampleModalCenter2'));

function displayModal () {
    myModal.show()
}

const btnDelete = document.getElementById('btn__delete');

btnDelete.addEventListener('click',() => {
    deleteTodo()
    })

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



function removeAll(){
    window.localStorage.clear();
    document.getElementById("listBox").innerHTML = "";
    document.querySelector(".name").innerHTML = "Liste";
}

clearList.addEventListener("click", () => {
    removeAll()
})

/*
const comfirm = document.querySelector(".comfirm");

comfirm.addEventListener('click', () => {
    callme()
})

const name = document.querySelector('#tbName');

function callme(){
    localStorage.setItem('userName', name);
}

if(name) {
    document.getElementById('welcome').innerText = localStorage.getItem('userName');
}else{
    document.getElementById('welcome').innerText = '';
}
*/

// Tilføj navn

let inputName = document.querySelector('.list__name__field');
let nameSpan = document.querySelector('.name');

function getName (){
    nameSpan.innerHTML = `${inputName.value}`;
    localStorage.setItem('listName',inputName.value);
}

let startGame = document.querySelector('.start');

startGame.addEventListener('click', (e) => {
    getName(e);
})

window.addEventListener('load', () => {
    document.name = localStorage.getItem('listName');
});
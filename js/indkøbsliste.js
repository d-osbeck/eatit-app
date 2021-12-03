const clearList = document.getElementById("btn__removeall")
const text = document.getElementById("text");
const addTaskButton = document.getElementById("btn__add");
const saveTaskButton = document.getElementById("btn__save");
const listBox = document.getElementById("listBox");
const saveInd = document.getElementById("saveIndex");


let todoArray = [];

window.addEventListener('load', (event) => {
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
            <p class="text-black my-auto">${list}</p>
            <div class="">
            <button onclick='edit(${ind})' class="rounded-3 btn btn-primary"><img class="icon__size" src="../img/001-shopping-basket-sort.png" alt=""></button>
            <button onclick='displayModal()' class="rounded-3 btn btn-danger"><img class="icon__size" src="../img/001-shopping-basket-sort.png" alt=""</button>
            </div>
        </div>`;
    });
    listBox.innerHTML = htmlCode;
}

let myModal = new bootstrap.Modal(document.getElementById('exampleModal2'));

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
    document.getElementById("welcome").innerHTML = "Liste ";
}

clearList.addEventListener("click", () => {
    removeAll()
})

function callme(){
    let name = document.getElementById('tbName').value;
    localStorage.setItem('userName', name);
}

window.addEventListener('load', (event) => {
    if(name === null) {
        document.getElementById('welcome').innerText = 'Liste';
    } else {
        document.getElementById('welcome').innerText = localStorage.getItem('userName');
    }
});
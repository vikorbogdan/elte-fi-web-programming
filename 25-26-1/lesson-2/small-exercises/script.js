// 1. task

let textContainerElement = document.querySelector("#textContainer");
let helloButtonElement = document.querySelector("#helloButton");

function setText() {
  textContainerElement.innerText = "Hello World!";
}

helloButtonElement.addEventListener("click", setText);

// 6. task
let linkElementList = document.querySelectorAll("a");

let urlUlElement = document.querySelector("#urls");

linkElementList.forEach((element) => {
  // for each element in the list:
  // 1. Create an <li></li>
  let listItemElement = document.createElement("li");
  // 2. Write inside the <li>: <li>http://elte.hu</li>
  listItemElement.innerText = element.href;
  // 3. Put it inside the <ul>
  urlUlElement.appendChild(listItemElement);
});

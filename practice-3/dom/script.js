// Task 1
let helloTextH3 = document.querySelector("#helloText");
let helloButton = document.querySelector("#task1 button");
let helloInput = document.querySelector("#nameInput");
helloButton.addEventListener("click", () => {
  let nameValue = helloInput.value;
  helloTextH3.innerHTML =
    nameValue === "" ? "Hello World!" : `Hello ${nameValue}!`;
});

// Task 2 Enter a number and display the "Hello World!" text that many times with increasing font sizes! (text input field, button)

let repeatInput = document.querySelector("#repeatInput");
let repeatButton = document.querySelector("#task2 button");
let repeatDiv = document.querySelector("#helloRepeats");

repeatButton.addEventListener("click", () => {
  let numOfRepeats = repeatInput.value;
  for (let i = 0; i < numOfRepeats; i++) {
    let heading = document.createElement("h3");
    heading.innerHTML = "Hello World!";
    heading.style.fontSize = (i + 1) * 20 + "px";
    repeatDiv.appendChild(heading);
  }
});

console.log(repeatButton, repeatInput, repeatDiv);
// Task 3

// Task 4

// Task 5

// Task 6
const children = [
  { name: "Anna", class: "3/A", age: 8 },
  { name: "Bence", class: "4/B", age: 9 },
  { name: "Cecilia", class: "2/C", age: 7 },
  { name: "David", class: "5/D", age: 10 },
  { name: "Emma", class: "1/E", age: 6 },
];

// Task 7
const booksList = [
  {
    author: "J.K. Rowling",
    title: "Harry Potter and the Philosopher's Stone",
    publicationYear: 1997,
    publisher: "Bloomsbury",
    isbn: "978-0747532743",
  },
  {
    author: "George Orwell",
    title: "1984",
    publicationYear: 1949,
    publisher: "Secker & Warburg",
    isbn: "978-0451524935",
  },
  {
    author: "Harper Lee",
    title: "To Kill a Mockingbird",
    publicationYear: 1960,
    publisher: "J. B. Lippincott & Co.",
    isbn: "978-0061120084",
  },
  {
    author: "F. Scott Fitzgerald",
    title: "The Great Gatsby",
    publicationYear: 1925,
    publisher: "Charles Scribner's Sons",
    isbn: "978-0743273565",
  },
  {
    author: "Leo Tolstoy",
    title: "War and Peace",
    publicationYear: 1869,
    publisher: "The Russian Messenger",
    isbn: "No ISBN",
  },
];

// Task 8

// Task 9

// Task 10

///////////
document.querySelectorAll("ul li a").forEach(function (link) {
  link.addEventListener("click", function (e) {
    e.preventDefault(); // Prevent the page from jumping to the link on click
    const targetId = this.getAttribute("href").substring(1); // Get the value of the "href" attribute without the "#" symbol
    const tasks = document.querySelectorAll(".task");
    tasks.forEach(function (task) {
      if (task.id === targetId) {
        task.classList.add("current");
      } else {
        task.classList.remove("current");
      }
    });
  });
});

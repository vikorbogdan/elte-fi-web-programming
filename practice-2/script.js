// to create variables or constants we use "let" and "const"

let myVariable = "Hello from JS!";
let myNumber = 3;
let myRealNumber = 3.1;
let myBoolean = true; // true or false
let myVariable2;
let myNullVariable = null;

// Writing to the console
/* 
asdas
asdasd
dsa
dsa

*/

console.log(myVariable);
console.error("You did something bad!");
console.warn("This is a fancy yellow warning");

if (myBoolean) {
  console.log("We are in if!!");
} else if (myBoolean != false) {
  console.log("something else");
}

for (let i = 0; i < 10; i++) {
  console.log(i);
}

let j = 0;

while (j < 10) {
  // do something...
  j++;
}

do {
  // do something.
} while (false);

// Arrays, iterating through arrays
let array1 = [1, 2, 3, 4, 5];
let array3 = [1, false, "strings", ["string", 1, 2, 3, []]];

console.log(array3[3][1]);

let array2 = [1, "one", 3, "three", 5, 6];
console.log("_________");
// Iteration v1

for (let i = 0; i < array3.length; i++) {
  console.log(array3[i]);
}
console.log("___________");

// Iteration v2
for (let element of array2) {
  console.log(element);
}
console.log("___________");

// Iteration v3
for (let index in array2) {
  console.log(array2[index]);
}

// Functions
function greeting(name) {
  console.log("Hello " + name + "!");
}

greeting("Jonas");

let myFunction = (a, b) => {
  return a + b;
};

myFunction();

// Array methods

let myArray = [1, 2, 3, 4, 5, 6, 7, 8];
myArray.push("number");
myArray.push(true);
myArray.pop();
// Mapping
let concatenatedArray = myArray.join("");
let myDoubledArray = myArray.map((value) => {
  return value * 2;
});
// Filtering
let myEvenArray = myArray.filter((value) => value % 2 === 0);

// Slicing
let mySlicedArray = myArray.slice(1, 4);

// Iteration v4

myArray.forEach((element) => {
  console.error(element);
});

console.log(concatenatedArray);
console.log(myArray);

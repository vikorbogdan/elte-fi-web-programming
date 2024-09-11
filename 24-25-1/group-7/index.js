console.log("Hello from index.js!");

// one line comment (Ctrl/Cmd + Shift + 6)

/*
multi
line 
comment

*/

console.debug("message");
console.warn("Yellow warning!!!!");
console.error("Something seriously bad happened :(");

let variable = 10;
let myVariable = "text message :)"; // naming is camelCase

const ten = 10;

// var is deprecated

// ten = ten + 10; (cant do this because its constant);

console.log(variable);

let logical = true;
let logical1 = false;
let logical3 = 5 < 2;

console.log(logical, logical1, logical3);

// if-else statements
if (logical && logical3) {
  console.log("both of them are true!!");
} else if (!logical3) {
  console.log("logical3 is false");
} else {
  console.log("both of them are false (or just logical, idk)");
}

// loops
// for loop

for (let i = 0; i < 10; i++) {
  console.log(i);
}
console.log("________________");
// while loop
let j = 0;
while (j < 10) {
  console.log(j);
  j++;
}
console.log("________________");

// do-while loop
let k = 0;
do {
  console.log(k);
  k++;
} while (k < 10);

// complex types

let array = [1, 2, 3, 4, 5, 6];
let array2 = ["one", "two", "three", "four"];

let array3 = [1, "two", true, [], console.log, [1, 2, "three"]];

console.log(array2);

for (let idx = 0; idx < array2.length; idx++) {
  console.log(array2[idx]);
}

// for-of loop

for (myNumber of array) {
  console.log(myNumber);
}

// for-in loop
console.log("______");
for (myIndex in array3) {
  console.log(array3[myIndex]);
}

array3[4]("Hello from array");

// functions

function add(a, b) {
  console.log("I am adding " + a + " and " + b + ".");
  console.log(`I am adding ${a} and ${b}.`);
  return a + b;
}

let subtract = function (a, b) {
  return a - b;
};

let multiply = (a, b) => a * b;

multiply(20, 3);

let multiplyAndConsoleLog = (a, b) => {
  console.log(a, b);
  return a * b;
};

// array methods
let myArray = [1, 2, 3, 4, 5, 6, 7, 5];
console.log("======");
// forEach: executes a function on each element
myArray.forEach((elem) => console.log(elem));

// map: transforms the array using a callbackfn
// and returns with another array

let anotherArray = myArray.map((elem) => elem + 10);

// every: checks each element with a logical condition
// returns true if every element complies to the condition

console.log(myArray.every((elem) => elem < 5));

// some: is there at least one element that satisfies the given condition?
console.log(myArray.some((elem) => elem < 5));

// indexOf: searches the array and retrieves the
// index of a given element

console.log(myArray.indexOf(11));

myArray.push(9);
console.log(myArray.pop());

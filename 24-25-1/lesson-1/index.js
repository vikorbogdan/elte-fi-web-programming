console.log("Hello from index.js");

// one line comment (Cmd/Ctrl + Shift + 6)
/*
multi
line
comment
*/

console.debug("Debug");
console.warn("Some yellow stuff");
console.error("ERROR");

var b = 2; // deprecated

let a = 24;

let logical = true;
let logical2 = false;
let logical3 = 3 < 4;

console.log(b, a, logical, logical2, logical3);

// if

if (4 > a) {
  console.log("four is more than a");
} else if (logical3) {
  console.log("logical 3 is true, but four is not more than a");
} else {
  console.log("We are in the else");
}

// loops

for (let i = 0; i < 10; i++) {
  console.log(i);
}

let j = 0;
while (j < 10) {
  console.log(j);
  j++;
}

console.log("do while:");
let k = 0;
do {
  console.log(k);
  k++;
} while (k < 10);

// complex types

// array
let arr = [1, 9, 3, 4, 64];
let arr2 = [1, "string value", [], console.log, [1, 2, 3]];
console.log("Array length", arr.length);

console.log(arr2[3]("Hello World!"));

// for loops for iterable types

// for-of loop
for (num of arr) {
  console.log("I have " + num + " apples.");
}

// for-in loop
for (idx in arr) {
  console.log("I have " + arr[idx] + " apples.");
}
// function syntax

function sayHello(name) {
  console.log("Hello " + name);
}

let myFunction = function () {
  // something
};

let sayHello2 = (name) => console.log("Hello " + name);

let add = (a, b) => a + b;

let sayHello3 = (name) => {
  // string template literal
  console.log(`Hello ${name}!`);
};

arr.forEach(sayHello);
console.log(add(3, 4));

// Array method
let myNumberArray = [1, 2, 3, 4, 5];
let myStringArray = ["a", "b", "c", "d"];
console.log("-------");
// take an array and execute a function for each element
myNumberArray.forEach((value) => console.log(value));

// create a map from an array, so it returns a new mapped array
myNumberArray.map((value) => value + 10).forEach((value) => console.log(value));

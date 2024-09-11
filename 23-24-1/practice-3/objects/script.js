const person = {
  name: "Jon",
  age: 40,
  weight: "70kg",
};

const characters = [
  {
    name: "Jon",
    age: 40,
    weight: "70kg",
  },
  {
    name: "Garfield",
    age: 46,
    weight: "700kg",
  },
  {
    name: "Odie",
    age: 6,
    weight: "7kg",
  },
];

characters.forEach((character) => console.log("Hi " + character.name));

console.log(Object.keys(person));

console.log(Object.values(person));

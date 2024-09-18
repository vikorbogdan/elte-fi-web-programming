let dog = {
  name: "Malu",
  breed: "Sheltie",
  age: 1.5,
  favoriteToys: ["bone", "ball", "plush"],
  woof: function () {
    console.log("Woof!");
  },
};

console.log(dog.age);

console.log("My dog's name is " + dog.name);

console.log("First favorite toy: " + dog.favoriteToys[0]);

dog.woof();

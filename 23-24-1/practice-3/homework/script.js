// For a couple of days, we measured the air temperature every noon. Solve the following tasks!
let temperatures = [0, -1.5, 20, 30, -12.5, 1];

// a. Select the values when it was freezing!
let freezingTemps = temperatures.filter((value) => value <= 0);
console.log(freezingTemps);
// b. At the end of each temperature, put the C text!
let appendedTemps1 = temperatures.map((value) => value + "C");
let appendedTemps2 = temperatures.map((value) => `${value}C`);
console.log(appendedTemps1, temperatures);
// c. What is the highest temperature value!
let maxTemp1 = Math.max(...temperatures);
let maxTemp2 = temperatures.sort().at(-1);
console.log(maxTemp1, maxTemp2);
// d. How many times the temperature went below 20 degrees!
let tempsBelow20 = temperatures.filter((temperature) => temperature < 20);
console.log(tempsBelow20);
console.log(tempsBelow20.length);
// e. Decide whether there is a value over 40 degrees!
let isThereAnyWarmTemperature = temperatures.some((temp) => temp > 40);
console.log(isThereAnyWarmTemperature);
// f. Decide whether each temperature value is positive!
let areAllPositive = temperatures.every((temp) => temp > 0);
console.log(areAllPositive);
// g. Enter the first value when the temperature went up to 10 degrees!
let firstWarmValue = temperatures.indexOf((temp) => temp > 10);
console.log(firstWarmValue);

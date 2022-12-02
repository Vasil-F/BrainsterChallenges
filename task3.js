

const numberArr = [23, 97, 5, 23, 4, 56];


const highest = Math.max(...numberArr);


const lowest = Math.min(...numberArr);

console.log(`Highest Number: ${highest}`); 
isPrime(highest);
console.log(`Lowest Number: ${lowest}`);
isPrime(lowest);


function isPrime(number) {
let isPrime = true;

if (number === 1) {
  console.log("1 is neither prime nor composite number.");
}

else if (number > 1) {

  for (let i = 2; i < number; i++) {
    if (number % i == 0) {
      isPrime = false;
      break;
    }
  }

  if (isPrime) {
    console.log(`${number} is a prime number`);
  } else {
    console.log(`${number} is not a prime number`);
  }
}

else {
  console.log("The number is not a prime number.");
}
}
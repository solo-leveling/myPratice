const numbers = [10, 11, 12, 12, 15];

const RegEx = /(\b\d+\b).*\1/g;
const ans = numbers.toString().match(RegEx);
console.log(ans);
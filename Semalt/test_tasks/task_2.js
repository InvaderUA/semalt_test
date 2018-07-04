let quote = "This server has 386 GB RAM and 5000 GB storage";
let regex = /\d/g;
let result = quote.replace(regex, "");

console.log(result);
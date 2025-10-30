function bisextile(year) {
  if ((year % 4 === 0 && year % 100 !== 0) || (year % 400 === 0)) {
    return true;
  } else {
    return false;
  }
}

console.log("2020:", bisextile(2020));
console.log("2021:", bisextile(2021)); 
console.log("2000:", bisextile(2000)); 
console.log("1900:", bisextile(1900)); 



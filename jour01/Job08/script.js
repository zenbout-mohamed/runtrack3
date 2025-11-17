function estPremier(n){
    if (n < 2) return false;
    for (let i = 2; i <= Math.sqrt(n); i++) {
        if(n % i === 0) return false;
        
    }

    return true ;
    
}


function sommenombrespremiers(a , b){
    if (estPremier(a) && estPremier(b)) {
        return a + b ;
    } else {
        return false;
    }
}

console.log(sommenombrespremiers(3 , 5));
console.log(sommenombrespremiers(8 , 5));
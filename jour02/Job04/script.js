const textarea = document.getElementById("keylogger");

document.addEventListener("keydown", (event) => {
    const key = event.key;

    if( /^[a-z]$/i.test(key)){
       if(document.activeElement === textarea){
        textarea.value += key + key;
       } else {
            textarea.value += key;
       }
    }
});
let id=document.getElementById("message");
let value=7;
if(value==7){
    id.style.display="block";
    id.style.color="#3c763d";
    id.style.backgroundColor="#dff0d8";
    id.innerHTML="Hllo";
    id.style.borderColor="#d6e9c6";
    setTimeout(() => {
        id.style.display="none";
    }, 2000);
}else{
    id.style.display="block";
    id.style.color="#a94442";
    id.innerHTML="Hllo";
    id.style.backgroundColor="#f2dede";
    id.style.borderColor="#ebccd1";
    setTimeout(() => {
        id.style.display="none";
    }, 2000);
}

console.log();


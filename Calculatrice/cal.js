function clic(value){
    let ecran=document.getElementById('ecran');
    ecran.innerHTML+=value;
    console.log(value);
}
function suppr(){
    ecran.innerHTML='';
}
function exe(){
    let result=ecran.textContent;
    let parse=eval(result);
    ecran.innerHTML=parse;
   
}

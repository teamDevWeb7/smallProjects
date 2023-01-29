// function ajoute(){
    // ne garde pas en memoire
//     let tache=prompt('Saisir la tâche à ajouter à la TODO liste :');
//     let ul=document.querySelector('ul');
//     ul.innerHTML+='<li>'+tache+'</li><input type="checkbox">';
// }
function ajoute(){
    // fait exactement la même chose que la 1ere
    let tache=prompt('Saisir la tâche à ajouter à la TODO liste :');
    let sauvegarde=new array();
    sauvegarde=[tache];
    for(let i= 0; i < sauvergarde.length; i++){
        alert(tache);
    }
    let ul=document.querySelector('ul');
    let newTask=document.createElement('li');
    let newContent=document.createTextNode(tache);
    newTask.appendChild(newContent);
    ul.appendChild(newTask);


    








    // localStorage.setItem(newTask, newContent);
    // let value=localStorage.getItem(newTask);
    

}

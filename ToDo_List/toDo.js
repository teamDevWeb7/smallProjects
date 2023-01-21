// function ajoute(){
    // ne garde pas en memoire
//     let tache=prompt('Saisir la tâche à ajouter à la TODO liste :');
//     let ul=document.querySelector('ul');
//     ul.innerHTML+='<li>'+tache+'</li><input type="checkbox">';
// }
function ajoute(){
    let tache=prompt('Saisir la tâche à ajouter à la TODO liste :');
    let ul=document.querySelector('ul');
    let newTask=document.createElement('li');
    let newContent=document.createTextNode(tache);
    newTask.appendChild(newContent);
    // document.body.main.insertAfter(newTask, ul);
    ul.appendChild(newTask);
    localStorage.setItem(newTask, newContent);
    let value=localStorage.getItem(newTask);

}
function retrieveList(){
    
}
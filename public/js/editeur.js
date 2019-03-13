function commande (nom,argument) { 
  if (typeof argument === 'undefined') {
    argument = '';
  }
  // Exécuter la commande
  document.execCommand(nom, false, argument);
    switch(nom){
        case "createLink":
            argument = prompt("Quelle est l'adresse du lien ?");
        break;
        case "insertImage":
        argument = prompt("Quelle est l'adresse de l'image ?");
        break;
    }
}
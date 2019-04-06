const bloc = document.getElementById("blocContact");
const cadre = document.getElementById("cadreContact");
const vitesse = 5; // Valeur du déplacement en pixels
// Conversion en nombre du diamètre du bloc (valeur de la forme "XXpx")
const largeurBloc = parseFloat(getComputedStyle(bloc).width);
let animationId = null; // Identifiant de l'animation

// Déplace le bloc sur sa gauche jusqu'au bord du cadre
function deplacerBloc() {
    // Conversion en nombre de la position gauche du bloc (valeur de la forme "XXpx")
    const xBloc = parseFloat(getComputedStyle(bloc).right);
    // Conversion en nombre de la largeur du cadre (valeur de la forme "XXpx")
    const xMax = parseFloat(getComputedStyle(cadre).width);
    if (xBloc + largeurBloc <= xMax) { // Si le bloc n'est pas encore au bout du cadre
        // Déplacement du bloc
        bloc.style.right = (xBloc + vitesse) + "px";
        // Demande au navigateur d'appeler deplacerBloc dès que possible
        animationId = requestAnimationFrame(deplacerBloc);
    } else {
        // Annulation de l'animation
        cancelAnimationFrame(animationId);
    }
}

animationId = requestAnimationFrame(deplacerBloc); // Début de l'animation    

// Animation titre


  // fin animation titre
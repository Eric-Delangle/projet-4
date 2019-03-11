const bloc = document.getElementById("blocContact");
const cadre = document.getElementById("cadreContact");
const vitesse = 3; // Valeur du déplacement en pixels
// Conversion en nombre du diamètre du bloc (valeur de la forme "XXpx")
const hauteurBloc = parseFloat(getComputedStyle(bloc).height);
let animationId = null; // Identifiant de l'animation

// Déplace le bloc sur sa gauche jusqu'au bord du cadre
function deplacerBloc() {
    // Conversion en nombre de la position gauche du bloc (valeur de la forme "XXpx")
    const xBloc = parseFloat(getComputedStyle(bloc).bottom);
    // Conversion en nombre de la largeur du cadre (valeur de la forme "XXpx")
    const xMax = parseFloat(getComputedStyle(cadre).height);
    if (xBloc + hauteurBloc <= xMax) { // Si le bloc n'est pas encore au bout du cadre
        // Déplacement du bloc
        bloc.style.bottom = (xBloc + vitesse) + "px";
        // Demande au navigateur d'appeler deplacerBloc dès que possible
        animationId = requestAnimationFrame(deplacerBloc);
    } else {
        // Annulation de l'animation
        cancelAnimationFrame(animationId);
    }
}

animationId = requestAnimationFrame(deplacerBloc); // Début de l'animation    
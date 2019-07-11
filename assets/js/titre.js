/*
let lettreA = document.getElementByClassName("ableu");
lettreA.style.color =  "blue";
*/
let titre = document.getElementById('title');
titre.style.display = 'bloc';
titre.style.display = 'flex';
$('.ml6 .letters').each(function(){
  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline({loop: true})
  .add({
    targets: '.ml6 .letter',
    translateY: ["1.1em", 0],
    translateZ: 0,
    duration: 2000,
    delay: function(el, i) {
      return 80 * i;
    }
  }).add({
    targets: '.ml6',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000000000000
  });
 
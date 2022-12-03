function bouncysonic(elementdiv) {
  if (elementdiv.className == "img-thumbnail bounce") {
    elementdiv.className = "img-thumbnail notbounce";
  } else {
    elementdiv.className = "img-thumbnail bounce";
  }
}
elem.onclick = function () {
  animate({
    duration: 1000,
    timing: function (timeFraction) {
      return timeFraction;
    },
    draw: function (progress) {
      elem.style.width = progress * 100 + "%";
    },
  });
};

function animateText(textExample) {
  let text = textExample.value;
  let to = text.length,
    from = 0;

  animate({
    duration: 5000,
    timing: bounce,
    draw: function (progress) {
      let result = (to - from) * progress + from;
      textExample.value = text.substr(0, Math.ceil(result));
    },
  });
}

let textWrapper = document.getElementById(textExample);
textWrapper.innerHTML = textWrapper.textContent.replace(
  /\S/g,
  "<span class='letter'>$&</span>"
);

anime
  .timeline({ loop: true })
  .add({
    targets: "#textExample .letter",
    translateX: [40, 0],
    translateZ: 0,
    opacity: [0, 1],
    easing: "easeOutExpo",
    duration: 1200,
    delay: (el, i) => 500 + 30 * i,
  })
  .add({
    targets: "#textExample .letter",
    translateX: [0, -30],
    opacity: [1, 0],
    easing: "easeInExpo",
    duration: 1100,
    delay: (el, i) => 100 + 30 * i,
  });

function bounce(timeFraction) {
  for (let a = 0, b = 1; 1; a += b, b /= 2) {
    if (timeFraction >= (7 - 4 * a) / 11) {
      return (
        -Math.pow((11 - 6 * a - 11 * timeFraction) / 4, 2) + Math.pow(b, 2)
      );
    }
  }
}

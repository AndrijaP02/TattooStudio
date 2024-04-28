const boxes = document.querySelectorAll(".box");

boxes.forEach((box) => {
  const displayText = box.querySelector(".displayText");
  const hoverContent = box.querySelector(".hover-content");
  const originalText = displayText.textContent;
  const hoverText = box.getAttribute("data-hover-text");
  const showButton = box.getAttribute("data-show-button");
  const buttonText = box.getAttribute("data-button-text");
  const link = box.getAttribute("data-link");

  box.addEventListener("mouseenter", function () {
    displayText.style.display = "none"; // Sakrijem tekst
    hoverContent.style.display = "block"; // Prikažem hover sadržaj
    hoverContent.querySelector(".hoverText").innerHTML = hoverText;

    if (showButton === "true" && buttonText && link) {
      const newLink = document.createElement("a");
      newLink.textContent = buttonText;
      newLink.href = link;
      newLink.classList.add("btn"); // klasa da bi stlizovao

      hoverContent.querySelector(".hoverText").appendChild(newLink);
    }
  });

  box.addEventListener("mouseleave", function () {
    displayText.style.display = "block"; // Vratim prikaz početnog teksta
    hoverContent.style.display = "none"; // Sakrijem hover sadržaj
    hoverContent.querySelector(".hoverText").innerHTML = ""; // Resetujem sadržaj hoverText
  });
});

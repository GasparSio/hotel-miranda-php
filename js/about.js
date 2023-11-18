//SLIDER FEATURES CARDS
const cardsContainer2 = document.querySelector(".about__cards-container");
const prevBtn2 = document.querySelector(".prev-btn2");
const nextBtn2 = document.querySelector(".next-btn2");

let cardIndex2 = 0;
const numCards2 = document.querySelectorAll(".about-card").length;

function showCard2(index) {
    const cards = document.querySelectorAll(".about-card");
    cardsContainer2.style.transform = `translateX(-${index * 320}px)`;
}

prevBtn2.addEventListener("click", () => {
  cardIndex2 = (cardIndex2 - 1 + numCards2) % numCards2;
  showCard2(cardIndex2);
});

nextBtn2.addEventListener("click", () => {
    cardIndex2 = (cardIndex2 + 1) % numCards2;
    showCard2(cardIndex2);
});
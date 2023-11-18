//SLIDER FOOD
const cardsContainer2 = document.querySelector(".room__detail-cards-container");
const prevBtn3 = document.querySelector(".prev-btn-detail");
const nextBtn3 = document.querySelector(".next-btn-detail");

let cardIndex2 = 0;
const numCards2 = document.querySelectorAll(".room__detail-rooms-slider").length;

function showCardFood(index) {
    const cards = document.querySelectorAll(".room__detail-rooms-slider");
    cardsContainer2.style.transform = `translateX(-${index * 320}px)`;
}

prevBtn3.addEventListener("click", () => {
  cardIndex2 = (cardIndex2 - 1 + numCards2) % numCards2;
  showCardFood(cardIndex2);
});

nextBtn3.addEventListener("click", () => {
    cardIndex2 = (cardIndex2 + 1) % numCards2;
    showCardFood(cardIndex2);
});

//SLIDER FEATURES CARDS
const cardsContainer = document.querySelector(".cards-container");
const prevBtn1 = document.querySelector(".prev-btn1");
const nextBtn1 = document.querySelector(".next-btn1");

let cardIndex = 0;
const numCards = document.querySelectorAll(".card").length;

function showCard(index) {
    const cards = document.querySelectorAll(".card");
    cardsContainer.style.transform = `translateX(-${index * 320}px)`;
}

prevBtn1.addEventListener("click", () => {
  cardIndex = (cardIndex - 1 + numCards) % numCards;
  showCard(cardIndex);
});

nextBtn1.addEventListener("click", () => {
    cardIndex = (cardIndex + 1) % numCards;
    showCard(cardIndex);
});

//SLIDER FOOD
const cardsContainer2 = document.querySelector(".food__cards-container");
const prevBtn2 = document.querySelector(".prev-btn2");
const nextBtn2 = document.querySelector(".next-btn2");

let cardIndex2 = 0;
const numCards2 = document.querySelectorAll(".card-food").length;

function showCardFood(index) {
    const cards = document.querySelectorAll(".card-food");
    cardsContainer2.style.transform = `translateX(-${index * 320}px)`;
}

prevBtn2.addEventListener("click", () => {
  cardIndex2 = (cardIndex2 - 1 + numCards2) % numCards2;
  showCardFood(cardIndex2);
});

nextBtn2.addEventListener("click", () => {
    cardIndex2 = (cardIndex2 + 1) % numCards2;
    showCardFood(cardIndex2);
});



//SLIDER ROOM WITH SWIPER
const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  // And if we need scrollbar
  scrollbar: {
    el: '.swiper-scrollbar',
  },
});
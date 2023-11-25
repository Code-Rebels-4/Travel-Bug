console.clear();

const NUM_CARDS = 9;
let card1Index = 0;

const { gsap, imagesLoaded } = window;

const buttons = {
  prev: document.querySelector(".btn--left"),
  next: document.querySelector(".btn--right"),
};
const cardsContainerEl = document.querySelector(".cards__wrapper");
const appBgContainerEl = document.querySelector(".app__bg");

const cardInfosContainerEl = document.querySelector(".info__wrapper");

buttons.next.addEventListener("click", () => swapCards("right"));

buttons.prev.addEventListener("click", () => swapCards("left"));

function swapCards(direction) {
  const card1El = cardsContainerEl.querySelector(".card1");
  const card2El = cardsContainerEl.querySelector(".card2");
  const card3El = cardsContainerEl.querySelector(".card3");
  const card4El = cardsContainerEl.querySelector(".card4");
  const card5El = cardsContainerEl.querySelector(".card5");
  const card6El = cardsContainerEl.querySelector(".card6");
  const card7El = cardsContainerEl.querySelector(".card7");
  const card8El = cardsContainerEl.querySelector(".card8");
  const card9El = cardsContainerEl.querySelector(".card9");

  const card1BgImageEl = appBgContainerEl.querySelector(".card1image");
  const card3BgImageEl = appBgContainerEl.querySelector(".card2image");
  const card2BgImageEl = appBgContainerEl.querySelector(".card3image");
  const card4BgImageEl = appBgContainerEl.querySelector(".card4image");
  const card5BgImageEl = appBgContainerEl.querySelector(".card5image");
  const card6BgImageEl = appBgContainerEl.querySelector(".card6image");
  const card7BgImageEl = appBgContainerEl.querySelector(".card7image");
  const card8BgImageEl = appBgContainerEl.querySelector(".card8image");
  const card9BgImageEl = appBgContainerEl.querySelector(".card9image");

  changeInfo(direction);
  swapCardsClass();

  function swapCardsClass() {
    card1El.classList.remove("card1");
    card3El.classList.remove("card3");
    card2El.classList.remove("card2");
    card4El.classList.remove("card4");
    card5El.classList.remove("card5");
    card6El.classList.remove("card6");
    card7El.classList.remove("card7");
    card8El.classList.remove("card8");
    card9El.classList.remove("card9");

    card1BgImageEl.classList.remove("card1image");
    card3BgImageEl.classList.remove("card2image");
    card2BgImageEl.classList.remove("card3image");
    card4BgImageEl.classList.remove("card4image");
    card5BgImageEl.classList.remove("card5image");
    card6BgImageEl.classList.remove("card6image");
    card7BgImageEl.classList.remove("card7image");
    card8BgImageEl.classList.remove("card8image");
    card9BgImageEl.classList.remove("card9image");

    card1El.style.zIndex = "50";
    card1BgImageEl.style.zIndex = "-2";

    if (direction === "right") {
      card2El.style.zIndex = "30";
      card3El.style.zIndex = "20";
      card4El.style.zIndex = "15";
      card5El.style.zIndex = "10";
      card6El.style.zIndex = "9";
      card7El.style.zIndex = "8";
      card8El.style.zIndex = "7";
      card9El.style.zIndex = "6";

      card2BgImageEl.style.zIndex = "-1";

      card1El.classList.add("card9");
      card2El.classList.add("card1");
      card3El.classList.add("card2");
      card4El.classList.add("card3");
      card5El.classList.add("card4");
      card6El.classList.add("card5");
      card7El.classList.add("card6");
      card8El.classList.add("card7");
      card9El.classList.add("card8");

      card1BgImageEl.classList.add("card9image");
      card3BgImageEl.classList.add("card1image");
      card2BgImageEl.classList.add("card2image");
      card4BgImageEl.classList.add("card3image");
      card5BgImageEl.classList.add("card4image");
      card6BgImageEl.classList.add("card5image");
      card7BgImageEl.classList.add("card6image");
      card8BgImageEl.classList.add("card7image");
      card9BgImageEl.classList.add("card8image");
    } else if (direction === "left") {
      card2El.style.zIndex = "60";
      card3El.style.zIndex = "50";
      card4El.style.zIndex = "40";
      card5El.style.zIndex = "30";
      card6El.style.zIndex = "2";
      card7El.style.zIndex = "3";
      card8El.style.zIndex = "4";
      card9El.style.zIndex = "50";

      card3BgImageEl.style.zIndex = "-1";

      card1El.classList.add("card2");
      card2El.classList.add("card3");
      card3El.classList.add("card4");
      card4El.classList.add("card5");
      card5El.classList.add("card6");
      card6El.classList.add("card7");
      card7El.classList.add("card8");
      card8El.classList.add("card9");
      card9El.classList.add("card1");

      card1BgImageEl.classList.add("card2image");
      card3BgImageEl.classList.add("card3image");
      card2BgImageEl.classList.add("card4image");
      card4BgImageEl.classList.add("card5image");
      card5BgImageEl.classList.add("card6image");
      card6BgImageEl.classList.add("card7image");
      card7BgImageEl.classList.add("card8image");
      card8BgImageEl.classList.add("card9image");
      card9BgImageEl.classList.add("card1image");
    }

    // Update card1 card index
    if (direction === "right") {
      card1Index = (card1Index + 1) % NUM_CARDS;
    } else if (direction === "left") {
      card1Index = (card1Index - 1 + NUM_CARDS) % NUM_CARDS;
    }
  }
}

function changeInfo(direction) {
  let card1InfoEl = cardInfosContainerEl.querySelector(".card1info");
  let card2InfoEl = cardInfosContainerEl.querySelector(".card2info");
  let card3InfoEl = cardInfosContainerEl.querySelector(".card3info");
  let card4InfoEl = cardInfosContainerEl.querySelector(".card4info");
  let card5InfoEl = cardInfosContainerEl.querySelector(".card5info");
  let card6InfoEl = cardInfosContainerEl.querySelector(".card6info");
  let card7InfoEl = cardInfosContainerEl.querySelector(".card7info");
  let card8InfoEl = cardInfosContainerEl.querySelector(".card8info");
  let card9InfoEl = cardInfosContainerEl.querySelector(".card9info");

  gsap
    .timeline()
    .to([buttons.prev, buttons.next], {
      duration: 0.2,
      opacity: 0.5,
      pointerEvents: "none",
    })
    .to(
      card1InfoEl.querySelectorAll(".text"),
      {
        duration: 0.4,
        stagger: 0.1,
        translateY: "-120px",
        opacity: 0,
      },
      "-="
    )
    .call(() => {
      swapInfosClass(direction);
    })
    .call(() => initCardEvents())
    .fromTo(
      direction === "right"
        ? card1InfoEl.querySelectorAll(".text")
        : card1InfoEl.querySelectorAll(".text"),
      {
        opacity: 0,
        translateY: "40px",
      },
      {
        duration: 0.4,
        stagger: 0.1,
        translateY: "0px",
        opacity: 1,
      }
    )
    .to([buttons.prev, buttons.next], {
      duration: 0.2,
      opacity: 1,
      pointerEvents: "all",
    });

  function swapInfosClass() {
    card1InfoEl.classList.remove("card1info");
    card3InfoEl.classList.remove("card3info");
    card2InfoEl.classList.remove("card2info");
    card4InfoEl.classList.remove("card4info");
    card5InfoEl.classList.remove("card5info");
    card6InfoEl.classList.remove("card6info");
    card7InfoEl.classList.remove("card7info");
    card8InfoEl.classList.remove("card8info");
    card9InfoEl.classList.remove("card9info");

    if (direction === "right") {
      card1InfoEl.classList.add("card9info");
      card2InfoEl.classList.add("card1info");
      card3InfoEl.classList.add("card2info");
      card4InfoEl.classList.add("card3info");
      card5InfoEl.classList.add("card4info");
      card6InfoEl.classList.add("card5info");
      card7InfoEl.classList.add("card6info");
      card8InfoEl.classList.add("card7info");
      card9InfoEl.classList.add("card8info");
    } else if (direction === "left") {
      card1InfoEl.classList.add("card2info");
      card2InfoEl.classList.add("card3info");
      card3InfoEl.classList.add("card4info");
      card4InfoEl.classList.add("card5info");
      card5InfoEl.classList.add("card6info");
      card6InfoEl.classList.add("card7info");
      card7InfoEl.classList.add("card8info");
      card8InfoEl.classList.add("card9info");
      card9InfoEl.classList.add("card1info");
    }
  }
}

function updateCard(e) {}

function resetCardTransforms(e) {
  const card = e.currentTarget;
  const card1InfoEl = cardInfosContainerEl.querySelector(".card1info");
  gsap.set(card, {
    "card1-rotation-offset": 0,
  });
  gsap.set(card1InfoEl, {
    rotateY: 0,
  });
}

function initCardEvents() {
  const Card1El = cardsContainerEl.querySelector(".card1");
  Card1El.addEventListener("pointermove", updateCard);
  Card1El.addEventListener("pointerout", (e) => {
    resetCardTransforms(e);
  });
}

initCardEvents();

function removeCardEvents(card) {
  card.removeEventListener("pointermove", updateCard);
}

function init() {
  let tl = gsap.timeline();

  tl.to(cardsContainerEl.children, {
    delay: 0.15,
    duration: 0.5,
    stagger: {
      ease: "power4.inOut",
      from: "right",
      amount: 0.1,
    },
    "--card-translateY-offset": "0%",
  })
    .to(
      cardInfosContainerEl
        .querySelector(".card1info")
        .querySelectorAll(".text"),
      {
        delay: 0.5,
        duration: 0.4,
        stagger: 0.1,
        opacity: 1,
        translateY: 0,
      }
    )
    .to(
      [buttons.prev, buttons.next],
      {
        duration: 0.4,
        opacity: 1,
        pointerEvents: "all",
      },
      "-=0.4"
    );
}

const waitForImages = () => {
  const images = [...document.querySelectorAll("img")];
  const totalImages = images.length;
  let loadedImages = 0;
  const loaderEl = document.querySelector(".loader span");

  gsap.set(cardsContainerEl.children, {
    "card-translateY-offset": "100vh",
  });
  gsap.set(
    cardInfosContainerEl.querySelector(".card1info").querySelectorAll(".text"),
    {
      translateY: "40px",
      opacity: 0,
    }
  );
  gsap.set([buttons.prev, buttons.next], {
    pointerEvents: "none",
    opacity: "1",
  });

  images.forEach((image) => {
    imagesLoaded(image, (instance) => {
      if (instance.isComplete) {
        loadedImages++;
        let loadProgress = loadedImages / totalImages;

        gsap.to(loaderEl, {
          duration: 1,
          scaleX: loadProgress,
          backgroundColor: `hsl(${loadProgress * 120}, 100%, 50%`,
        });

        if (totalImages == loadedImages) {
          gsap
            .timeline()
            .to(".loading__wrapper", {
              duration: 0.8,
              opacity: 0,
              pointerEvents: "none",
            })
            .call(() => init());
        }
      }
    });
  });
};

// Add this inside your script, assuming you have a function named showDetails()
const moreDetailsButtons = document.querySelectorAll(".info button");

moreDetailsButtons.forEach((button) => {
  button.addEventListener("click", showDetails);
});

function showDetails() {
  // Your logic for displaying more details goes here
}

waitForImages();

// console.clear();

// const NUM_CARDS = 9;
// let card1Index = 0;

// const { gsap, imagesLoaded } = window;

// const buttons = {
//   prev: document.querySelector(".btn--left"),
//   next: document.querySelector(".btn--right"),
// };

// const cardsContainerEl = document.querySelector(".cards__wrapper");
// const appBgContainerEl = document.querySelector(".app__bg");

// const cardInfosContainerEl = document.querySelector(".info__wrapper");

// buttons.next.addEventListener("click", () => swapCards("right"));

// buttons.prev.addEventListener("click", () => swapCards("left"));

// function swapCards(direction) {
//   const card1El = cardsContainerEl.querySelector(".card1");
//   const card2El = cardsContainerEl.querySelector(".card2");
//   const card3El = cardsContainerEl.querySelector(".card3");
//   const card4El = cardsContainerEl.querySelector(".card4");
//   const card5El = cardsContainerEl.querySelector(".card5");
//   const card6El = cardsContainerEl.querySelector(".card6");
//   const card7El = cardsContainerEl.querySelector(".card7");
//   const card8El = cardsContainerEl.querySelector(".card8");
//   const card9El = cardsContainerEl.querySelector(".card9");

//   const card1BgImageEl = appBgContainerEl.querySelector(".card1image");
//   const card3BgImageEl = appBgContainerEl.querySelector(".card2image");
//   const card2BgImageEl = appBgContainerEl.querySelector(".card3image");
//   const card4BgImageEl = appBgContainerEl.querySelector(".card4image");
//   const card5BgImageEl = appBgContainerEl.querySelector(".card5image");
//   const card6BgImageEl = appBgContainerEl.querySelector(".card6image");
//   const card7BgImageEl = appBgContainerEl.querySelector(".card7image");
//   const card8BgImageEl = appBgContainerEl.querySelector(".card8image");
//   const card9BgImageEl = appBgContainerEl.querySelector(".card9image");

//   changeInfo(direction);
//   swapCardsClass();

//   function swapCardsClass() {
//     card1El.classList.remove("card1");
//     card3El.classList.remove("card3");
//     card2El.classList.remove("card2");
//     card4El.classList.remove("card4");
//     card5El.classList.remove("card5");
//     card6El.classList.remove("card6");
//     card7El.classList.remove("card7");
//     card8El.classList.remove("card8");
//     card9El.classList.remove("card9");

//     card1BgImageEl.classList.remove("card1image");
//     card3BgImageEl.classList.remove("card2image");
//     card2BgImageEl.classList.remove("card3image");
//     card4BgImageEl.classList.remove("card4image");
//     card5BgImageEl.classList.remove("card5image");
//     card6BgImageEl.classList.remove("card6image");
//     card7BgImageEl.classList.remove("card7image");
//     card8BgImageEl.classList.remove("card8image");
//     card9BgImageEl.classList.remove("card9image");

//     card1El.style.zIndex = "50";
//     card1BgImageEl.style.zIndex = "-2";

//     if (direction === "right") {
//       card2El.style.zIndex = "30";
//       card3El.style.zIndex = "20";
//       card4El.style.zIndex = "15";
//       card5El.style.zIndex = "10";
//       card6El.style.zIndex = "9";
//       card7El.style.zIndex = "8";
//       card8El.style.zIndex = "7";
//       card9El.style.zIndex = "6";

//       card2BgImageEl.style.zIndex = "-1";

//       card1El.classList.add("card9");
//       card2El.classList.add("card1");
//       card3El.classList.add("card2");
//       card4El.classList.add("card3");
//       card5El.classList.add("card4");
//       card6El.classList.add("card5");
//       card7El.classList.add("card6");
//       card8El.classList.add("card7");
//       card9El.classList.add("card8");

//       card1BgImageEl.classList.add("card9image");
//       card3BgImageEl.classList.add("card1image");
//       card2BgImageEl.classList.add("card2image");
//       card4BgImageEl.classList.add("card3image");
//       card5BgImageEl.classList.add("card4image");
//       card6BgImageEl.classList.add("card5image");
//       card7BgImageEl.classList.add("card6image");
//       card8BgImageEl.classList.add("card7image");
//       card9BgImageEl.classList.add("card8image");
//     } else if (direction === "left") {
//       card2El.style.zIndex = "60";
//       card3El.style.zIndex = "50";
//       card4El.style.zIndex = "40";
//       card5El.style.zIndex = "30";
//       card6El.style.zIndex = "2";
//       card7El.style.zIndex = "3";
//       card8El.style.zIndex = "4";
//       card9El.style.zIndex = "50";

//       card3BgImageEl.style.zIndex = "-1";

//       card1El.classList.add("card2");
//       card2El.classList.add("card3");
//       card3El.classList.add("card4");
//       card4El.classList.add("card5");
//       card5El.classList.add("card6");
//       card6El.classList.add("card7");
//       card7El.classList.add("card8");
//       card8El.classList.add("card9");
//       card9El.classList.add("card1");

//       card1BgImageEl.classList.add("card2image");
//       card3BgImageEl.classList.add("card3image");
//       card2BgImageEl.classList.add("card4image");
//       card4BgImageEl.classList.add("card5image");
//       card5BgImageEl.classList.add("card6image");
//       card6BgImageEl.classList.add("card7image");
//       card7BgImageEl.classList.add("card8image");
//       card8BgImageEl.classList.add("card9image");
//       card9BgImageEl.classList.add("card1image");
//     }

//     // Update card1 card index
//     if (direction === "right") {
//       card1Index = (card1Index + 1) % NUM_CARDS;
//     } else if (direction === "left") {
//       card1Index = (card1Index - 1 + NUM_CARDS) % NUM_CARDS;
//     }
//   }
// }

// function changeInfo(direction) {
//   let card1InfoEl = cardInfosContainerEl.querySelector(".card1info");
//   let card2InfoEl = cardInfosContainerEl.querySelector(".card2info");
//   let card3InfoEl = cardInfosContainerEl.querySelector(".card3info");
//   let card4InfoEl = cardInfosContainerEl.querySelector(".card4info");
//   let card5InfoEl = cardInfosContainerEl.querySelector(".card5info");
//   let card6InfoEl = cardInfosContainerEl.querySelector(".card6info");
//   let card7InfoEl = cardInfosContainerEl.querySelector(".card7info");
//   let card8InfoEl = cardInfosContainerEl.querySelector(".card8info");
//   let card9InfoEl = cardInfosContainerEl.querySelector(".card9info");

//   gsap
//     .timeline()
//     .to([buttons.prev, buttons.next], {
//       duration: 0.2,
//       opacity: 0.5,
//       pointerEvents: "none",
//     })
//     .to(
//       card1InfoEl.querySelectorAll(".text"),
//       {
//         duration: 0.4,
//         stagger: 0.1,
//         translateY: "-120px",
//         opacity: 0,
//       },
//       "-="
//     )
//     .to(
//       [
//         "viewDetailsBtn1",
//         "viewDetailsBtn2",
//         "viewDetailsBtn3",
//         "viewDetailsBtn4",
//         "viewDetailsBtn5",
//         "viewDetailsBtn6",
//         "viewDetailsBtn7",
//         "viewDetailsBtn8",
//         "viewDetailsBtn9",
//       ],
//       {
//         duration: 0.4,
//         opacity: 0,
//       },
//       "-="
//     ) // Add this line to hide the buttons

//     .call(() => {
//       swapInfosClass(direction);
//     })
//     .call(() => initCardEvents())
//     .fromTo(
//       direction === "right"
//         ? card1InfoEl.querySelectorAll(".text")
//         : card1InfoEl.querySelectorAll(".text"),

//       {
//         opacity: 0,
//         translateY: "40px",
//       },
//       {
//         duration: 0.4,
//         stagger: 0.1,
//         translateY: "0px",
//         opacity: 1,
//       }
//     )
//     .to([buttons.prev, buttons.next], {
//       duration: 0.02,
//       opacity: 1,
//       pointerEvents: "all",
//     });

//   function swapInfosClass() {
//     card1InfoEl.classList.remove("card1info");
//     card3InfoEl.classList.remove("card3info");
//     card2InfoEl.classList.remove("card2info");
//     card4InfoEl.classList.remove("card4info");
//     card5InfoEl.classList.remove("card5info");
//     card6InfoEl.classList.remove("card6info");
//     card7InfoEl.classList.remove("card7info");
//     card8InfoEl.classList.remove("card8info");
//     card9InfoEl.classList.remove("card9info");

//     if (direction === "right") {
//       card1InfoEl.classList.add("card9info");
//       card2InfoEl.classList.add("card1info");
//       card3InfoEl.classList.add("card2info");
//       card4InfoEl.classList.add("card3info");
//       card5InfoEl.classList.add("card4info");
//       card6InfoEl.classList.add("card5info");
//       card7InfoEl.classList.add("card6info");
//       card8InfoEl.classList.add("card7info");
//       card9InfoEl.classList.add("card8info");

//       // Animate "View More Details" buttons
//       animateViewDetailsButton("viewDetailsBtn1");
//       animateViewDetailsButton("viewDetailsBtn2");
//       animateViewDetailsButton("viewDetailsBtn3");
//       animateViewDetailsButton("viewDetailsBtn4");
//       animateViewDetailsButton("viewDetailsBtn5");
//       animateViewDetailsButton("viewDetailsBtn6");
//       animateViewDetailsButton("viewDetailsBtn7");
//       animateViewDetailsButton("viewDetailsBtn8");
//       animateViewDetailsButton("viewDetailsBtn9");
//     } else if (direction === "left") {
//       card1InfoEl.classList.add("card2info");
//       card2InfoEl.classList.add("card3info");
//       card3InfoEl.classList.add("card4info");
//       card4InfoEl.classList.add("card5info");
//       card5InfoEl.classList.add("card6info");
//       card6InfoEl.classList.add("card7info");
//       card7InfoEl.classList.add("card8info");
//       card8InfoEl.classList.add("card9info");
//       card9InfoEl.classList.add("card1info");

//       // Animate "View More Details" buttons
//       animateViewDetailsButton("viewDetailsBtn2");
//       animateViewDetailsButton("viewDetailsBtn3");
//       animateViewDetailsButton("viewDetailsBtn4");
//       animateViewDetailsButton("viewDetailsBtn5");
//       animateViewDetailsButton("viewDetailsBtn6");
//       animateViewDetailsButton("viewDetailsBtn7");
//       animateViewDetailsButton("viewDetailsBtn8");
//       animateViewDetailsButton("viewDetailsBtn9");
//       animateViewDetailsButton("viewDetailsBtn1");
//     }
//   }
// }

// // Assuming you have the GSAP library already included in your project

// function updateCard(e) {
//   const card = e.currentTarget;
//   const box = card.getBoundingClientRect();
//   const centerPosition = {
//     x: box.left + box.width / 2,
//     y: box.top + box.height / 2,
//   };
//   let angle = Math.atan2(e.pageX - centerPosition.x, 0) * (35 / Math.PI);
//   gsap.set(card, {
//     "card1-rotation-offset": `${angle}deg`,
//   });
//   const card1InfoEl = cardInfosContainerEl.querySelector(".card1info");
//   gsap.set(card1InfoEl, {
//     rotateY: `${angle}deg`,
//   });
// }

// function resetCardTransforms(e) {
//   const card = e.currentTarget;
//   const card1InfoEl = cardInfosContainerEl.querySelector(".card1info");
//   gsap.set(card, {
//     "card1-rotation-offset": 0,
//   });
//   gsap.set(card1InfoEl, {
//     rotateY: 0,
//   });
// }

// function initCardEvents() {
//   const Card1El = cardsContainerEl.querySelector(".card1");
//   Card1El.addEventListener("pointermove", updateCard);
//   Card1El.addEventListener("pointerout", (e) => {
//     resetCardTransforms(e);
//   });
// }

// initCardEvents();

// function removeCardEvents(card) {
//   card.removeEventListener("pointermove", updateCard);
// }

// function init() {
//   let tl = gsap.timeline();

//   tl.to(cardsContainerEl.children, {
//     delay: 0.15,
//     duration: 0.5,
//     stagger: {
//       ease: "power4.inOut",
//       from: "right",
//       amount: 0.1,
//     },
//     "--card-translateY-offset": "0%",
//   })
//     .to(
//       cardInfosContainerEl
//         .querySelector(".card1info")
//         .querySelectorAll(".text"),
//       {
//         delay: 0.5,
//         duration: 0.4,
//         stagger: 0.1,
//         opacity: 1,
//         translateY: 0,
//       }
//     )
//     .to(
//       [buttons.prev, buttons.next],
//       {
//         duration: 0.4,
//         opacity: 1,
//         pointerEvents: "all",
//       },
//       "-=0.4"
//     );
// }

// const waitForImages = () => {
//   const images = [...document.querySelectorAll("img")];
//   const totalImages = images.length;
//   let loadedImages = 0;
//   const loaderEl = document.querySelector(".loader span");

//   gsap.set(cardsContainerEl.children, {
//     "card-translateY-offset": "100vh",
//   });
//   gsap.set(
//     cardInfosContainerEl.querySelector(".card1info").querySelectorAll(".text"),
//     {
//       translateY: "40px",
//       opacity: 0,
//     }
//   );
//   gsap.set([buttons.prev, buttons.next], {
//     pointerEvents: "none",
//     opacity: "1",
//   });

//   images.forEach((image) => {
//     imagesLoaded(image, (instance) => {
//       if (instance.isComplete) {
//         loadedImages++;
//         let loadProgress = loadedImages / totalImages;

//         gsap.to(loaderEl, {
//           duration: 1,
//           scaleX: loadProgress,
//           backgroundColor: `hsl(${loadProgress * 120}, 100%, 50%`,
//         });

//         if (totalImages == loadedImages) {
//           gsap
//             .timeline()
//             .to(".loading__wrapper", {
//               duration: 0.8,
//               opacity: 0,
//               pointerEvents: "none",
//             })
//             .call(() => init());
//         }
//       }
//     });
//   });
// };

// waitForImages();

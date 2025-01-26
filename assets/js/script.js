/*************************** Toggle mobile menu ***************************/
/* Script repris depuis https://webdesign.tutsplus.com/tutorials/how-to-build-a-responsive-navigation-bar-with-flexbox--cms-33535 */

const toggle = document.querySelector(".hamburgerBtn");
const menu = document.querySelector(".navMenu");
const navLine = document.querySelector(".toggleSeparation");

/* Toggle mobile menu */
function ToggleMenu() {
  if (menu.classList.contains("active")) {
    menu.classList.remove("active");
    navLine.classList.remove("active");
  } else {
    menu.classList.add("active");
    navLine.classList.add("active");
  }
}

/* Event Listener */
toggle.addEventListener("click", ToggleMenu, false);

/*************************** Favourite icon onclick - like a product ***************************/
/* Script repris depuis https://bobbyhadz.com/blog/javascript-change-button-color-onclick */
/* Le script est censé changer la couleur des icônes like lorsqu'on clique dessus, mais ça ne fonctionne pas encore */
const favouriteIcon = document.querySelector(".like");

function LikeProduct() {
  if (favouriteIcon.classList.contains("liked")) {
    favouriteIcon.classList.remove("liked");
    favouriteIcon.style.color = "#CCCCCC";
  } else {
    favouriteIcon.classList.add("liked");
    favouriteIcon.style.color = "#FFC999";
  }
}

favouriteIcon.addEventListener("click", LikeProduct, false);

/*************************** Popup -  Newsletter subscribe button ***************************/
const subscribeBtn = document.querySelector(".subscribe");

function Subscribe() {
  window.alert(
    "Thank you for subscribing to our newsletter! You'll soon receive amazing gifts in your inbox.\n\nStay tuned!"
  );
}

subscribeBtn.addEventListener("click", Subscribe, false);

/*************************** Popup -  Contact form send button ***************************/
const sendBtn = document.querySelector(".sendMessage");

function SendMessage() {
  window.alert(
    "Thank you for your message! You'll receive an answer from us in the next 3 days.\n\nStay tuned!"
  );
}

sendBtn.addEventListener("click", SendMessage, false);

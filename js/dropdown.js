const dropdownListContainer = document.querySelector(
  ".sub-menu"
);
const dropdownBtn = document.querySelector(".menu-item-has-children > a");

dropdownBtn.addEventListener("click", function (e) {
  event.preventDefault();
  dropdownListContainer.classList.toggle("sub-menu--visible");
});

window.addEventListener("click", function (event) {
  if (!event.target.matches(".menu-item-has-children > a")) {
    dropdownListContainer.classList.remove("sub-menu--visible");
  }
});

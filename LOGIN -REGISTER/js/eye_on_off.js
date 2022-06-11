
const iconEye = document.querySelector(".icon-eye");

iconEye.addEventListener("click", function () {
  const icon = this.querySelector("i");

  if (this.nextElementSibling.type === "password") {
    this.nextElementSibling.type = "text";
    icon.classList.remove("fi-sr-eye-crossed");
    icon.classList.add("fi-sr-eye");
  } else {
    this.nextElementSibling.type = "password";
    icon.classList.remove("fi-sr-eye");
    icon.classList.add("fi-sr-eye-crossed");
  }
});

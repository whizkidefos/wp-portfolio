// Navigation
let burger = document.querySelector(".burger");
let menu = document.querySelector(".top-bar .main-navigation ul");

let menuOpen = false;
burger.addEventListener("click", () => {
	if (!menuOpen) {
		burger.classList.add("open");
		menuOpen = true;
		menu.style.transform = "scale(1)";
		menu.style.opacity = 1;
	} else {
		burger.classList.remove("open");
		menuOpen = false;
		menu.style.transform = "scale(0)";
		menu.style.opacity = 0;
	}
});

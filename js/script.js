//===================================== IBG ==============================================
function ibg() {
	let ibg = document.querySelectorAll(".ibg");
	for (var i = 0; i < ibg.length; i++) {
		if(ibg[i].querySelector('img')){
			ibg[i].style.backgroundImage = 'url('+ibg[i].querySelector('img').getAttribute('src')+')';
		}
	}
}
ibg();
//========================================================================================
//================================= BURGER MENU ==========================================
document.addEventListener("DOMContentLoaded", function () {
	document.querySelector('.header__burger').onclick = function (event) {
		document.querySelector('.header__burger').classList.toggle('active');
		document.querySelector('.header__menu_hidden').classList.toggle('active');
		document.querySelector('.top-bar').classList.toggle('hidden');
		document.querySelector('body').classList.toggle('lock');
    }
});
//========================================================================================
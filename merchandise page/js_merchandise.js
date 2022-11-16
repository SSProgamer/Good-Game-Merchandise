let items = document.querySelectorAll('.carousel .carousel-item')
var overlay = document.getElementById("overlay");
var popup = document.getElementById("popup");
var button = document.getElementById("button");
var popupaddcart = document.getElementById("popupaddcart");

items.forEach((el) => {
    const minPerSlide = 5
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
        if (!next) {
            // wrap carousel by using first child
        	next = items[0]
      	}
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})
function purchasePopUp(){
    overlay.style.display = 'block';
	popup.style.display = 'block';
}
function addtocartPopUp(){
    overlay.style.display = 'block';
	popupaddcart.style.display = 'block';
}
function closepopup() {
    overlay.style.display = 'none';
        popup.style.display = 'none';
        popupaddcart.style.display = 'none';
  };
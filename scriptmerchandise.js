// let items = document.querySelectorAll('.carousel .carousel-item')
var overlay = document.getElementById("overlay");
var popupaddcart = document.getElementById("popupaddcart");
var popupaddwishlist = document.getElementById("popupaddwishlist");

// items.forEach((el) => {
//     const minPerSlide = 5
//     let next = el.nextElementSibling
//     for (var i = 1; i < minPerSlide; i++) {
//         if (!next) {
//             // wrap carousel by using first child
//             next = items[0]
//         }
//         let cloneChild = next.cloneNode(true)
//         el.appendChild(cloneChild.children[0])
//         next = next.nextElementSibling
//     }
// })
function addtocartPopUp() {
    overlay.style.display = 'block';
    popupaddcart.style.display = 'block';
}
function addtowishlistPopUp() {
    overlay.style.display = 'block';
    popupaddwishlist.style.display = 'block';
}
function closepopup() {
    overlay.style.display = 'none';
    popupaddcart.style.display = 'none';
    popupaddwishlist.style.display = 'none';
}
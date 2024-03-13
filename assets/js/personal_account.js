const menuItems = document.querySelectorAll(".submenu__item");

for (let i = 0; i < menuItems.length; i++) {
    menuItems[i].addEventListener("click", function() {
        
        const activeItems = document.querySelector(".submenu__item.active")

        if (activeItems) {
            activeItems.classList.remove("active");
        }

        if (activeItems !== this) {
            this.classList.add("active");
        }
        
    })
}

function contents(contentsValue) {
    var i;
    var x = document.getElementsByClassName("value");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    document.getElementById(contentsValue).style.display = "block";
}
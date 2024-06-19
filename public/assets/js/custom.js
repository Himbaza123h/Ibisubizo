function toggleSidebar() {
  let ul = document.querySelector(".ul");
  let sidebar = document.querySelector(".home_sidebar");
  ul.classList.toggle("open");
  sidebar.classList.toggle("open");
}

let dropdown = document.getElementsByClassName("dropdown-btn");
let i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function () {
    this.classList.toggle("active");
    let dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}

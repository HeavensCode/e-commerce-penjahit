const searchButton = document.getElementById("searchButton");
const searchForm = document.getElementById("searchForm");

searchButton.addEventListener("click", function () {
    if (
        searchForm.style.display === "none" ||
        searchForm.style.display === ""
    ) {
        searchForm.style.display = "block";
    } else {
        searchForm.style.display = "none";
    }
});

var userButton = document.getElementById("userButton");
var userDropdown = document.getElementById("userDropdown");

userDropdown.style.display = "none";

userButton.addEventListener("click", function () {
    if (
        userDropdown.style.display === "none" ||
        userDropdown.style.display === ""
    ) {
        userDropdown.style.display = "block";
    } else {
        userDropdown.style.display = "none";
    }
});

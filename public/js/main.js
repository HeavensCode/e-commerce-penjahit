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

// Get a reference to the sidebar element
var sidebar = document.getElementById("side_nav");

// Get a reference to the sidebar toggle button
var sidebarToggle = document.getElementById("sidebar-toggle");

// Add a click event listener to the toggle button
sidebarToggle.addEventListener("click", function () {
    // Toggle the 'active' class of the sidebar
    sidebar.classList.toggle("active");
});

// Function to toggle the sidebar
function toggleSidebar() {
    sidebar.classList.toggle("active");
}

function toggleProfile() {
  var dropdown = document.getElementById("profileDropdown");
  if (!dropdown.style.display || dropdown.style.display === "none") {
    dropdown.style.display = "block";
  } else {
    dropdown.style.display = "none";
  }
}


// Menutup dropdown ketika klik diluar dropdown
window.onclick = function(event) {
  if (!event.target.matches('.profile-img')) {
    var dropdowns = document.getElementsByClassName("profile-dropdown");
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.style.display === "block") {
        openDropdown.style.display = "none";
      }
    }
  }
}
function toggleDropdown(event) {
    event.preventDefault();
    var dropdown = document.querySelector("#loginDropdown");
    
    // Sprawdzamy, czy dropdown jest ukryty, jeśli tak, to go pokazujemy
    if (dropdown.style.display === "block") {
      dropdown.style.display = "none";
    } else {
      dropdown.style.display = "block";
    }
}
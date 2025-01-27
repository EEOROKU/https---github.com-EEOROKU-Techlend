// Load window at top
window.onload = function() {
    window.scrollTo(0, 0);
}

// Opens Navigation from the right
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("mySidenav").style.transform = "translateX(0)";
}

// Closes Navigation, sliding it out to the right
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("mySidenav").style.transform = "translateX(100%)";
}

function handleSubmit(event) {
    event.preventDefault();
    localStorage.setItem('formSubmitted', 'true');
}

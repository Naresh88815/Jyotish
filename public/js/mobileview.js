document.getElementById('mobileMenuButton').addEventListener('click', function() {
    var mobileMenu = document.getElementById('mobileMenu');
    if (mobileMenu.style.display === "block") {
        mobileMenu.style.display = "none";
    } else {
        mobileMenu.style.display = "block";
    }
});

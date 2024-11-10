document.addEventListener("DOMContentLoaded", function() {
    const btnMenu = document.getElementById("btnMenu");
    const navigation2 = document.getElementById("navigation2");

    btnMenu.addEventListener("click", function() {
        if (navigation2.style.display === "block") {
            navigation2.style.display = "none";
        } else {
            navigation2.style.display = "block";
        }
    });
});

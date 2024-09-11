const loaderWrapper = document.querySelector("#pageLoader");
window.addEventListener("load", function() {
    loaderWrapper.classList.add("fade-out");
    setTimeout(() => {
        loaderWrapper.style.display = "none";
    }, 1000);
});

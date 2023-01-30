if (document.querySelector(".tf-anliegen-card")) {
    document.querySelectorAll(".tf-anliegen-card").forEach((card) => {
        card.addEventListener("click", (e) => {
            e.preventDefault();
            window.location.href = "/anliegen"
        });
    });
}
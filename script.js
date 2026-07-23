document.addEventListener("DOMContentLoaded", function () {

    const buttons = document.querySelectorAll(".toggleBtn");

    buttons.forEach(button => {

        button.addEventListener("click", function (e) {

            e.preventDefault();

            fetch(this.href)
            .then(() => {

                location.reload();

            });

        });

    });

});
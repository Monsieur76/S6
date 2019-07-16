$(document).ready(function () {
    $('.delete').click(function (e) {
        if (confirm("Etes vous sur de vouloir supprimer?")) {
        } else {
            e.preventDefault();
        }
    });
});

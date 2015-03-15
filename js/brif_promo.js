$(document).ready(function() {

    $("form#brifpromoution").submit(function() {
        $.ajax({
            type: "GET",
            url: "brif_promoution.php",
            data: $("form#brifpromoution").serialize()
        }).done(function() {
            alert("Спасибо за заявку!");
            setTimeout(function() {
                $.fancybox.close();
            }, 1000);
        });
        return false;});
    });

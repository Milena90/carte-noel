$(function () {

    $('#formulaire').submit(function (e) {

        e.preventDefault();
        $('.error').empty();
        let postdata = $('#formulaire').serialize();

        $.ajax({
            type: 'POST',
            url: 'mail.php',
            data: postdata,
            dataType: 'json',
            success: function (result) {
                if (result.isSuccess) {
                    $("#formulaire").append("<p class='transmise'>La carte de voeux a bien été transmise.</p>");
                    $("#formulaire")[0].reset();
 
                }
                else {
                    $("#error-name").html(result.mynameError);
                    $("#error-mail").html(result.myemailError);
                    $("#error-mymail").html(result.youremailError);
                    $("#error-message").html(result.messageError);
                }
            }
        });

    });

})
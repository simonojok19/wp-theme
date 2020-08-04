jQuery(document).ready(function () {
    jQuery("#send").click(function (e) {
        e.preventDefault();

        message = document.querySelector("#message").value;
        email = document.querySelector('#email').value;
        if (Email) {
            jQuery(document ).ready(function() {
                Email.send({
                    Host : "smtp.yourisp.com",
                    Username : "username",
                    Password : "password",
                    To : email,
                    From : "you@isp.com",
                    Subject : "This is the subject",
                    Body : message
                }
                    ).then( message => alert(message))
                    .catch((error => {
                        alert(error);
                    }));});
        }
    })
})
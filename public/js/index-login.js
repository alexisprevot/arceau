/**
 * Created by alexis on 22/09/15.
 */

$("#login-button").click(function(event) {
    event.preventDefault();

    $('form').fadeOut(500);
    $('.wrapper').addClass('form-success');
});
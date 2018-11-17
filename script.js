$(document).ready(function() {

    $.ajax({
        method: "POST",
        url: 'search.php',
        data: {
            search: ''
        }
    }).done(function(data){
        $('.results').html(data);
    });

    $( "#search" ).keyup(function(event) {
        event.preventDefault();
        var input = $(this).val();
        console.log(input);
        $.ajax({
            method: "POST",
            url: 'search.php',
            data: {
                search: input
            }
        }).done(function(data){
            $('.results').html(data);
        });
    });

});

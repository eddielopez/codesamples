$(function(){



    $('#ot-login').popover('show');

    /*Temp Sign up tabs*/

    $('#myTab a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    });


    $('#datetimepicker1').datetimepicker({
        language: 'pt-BR'
    });


});

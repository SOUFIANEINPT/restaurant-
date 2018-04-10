
$(document).ready(function(){
    $('#numberShaire').text('Number of  chaire is '+$("#Nombrechaire").val());
    $('#Name').text('Name: '+$("#name").val());
    $('#Picture').attr("src", $('#picture').val());
    if( $('#Picture').attr("src")=="")
    {
        $('#Picture').hide();
    }
    else{
        $('#Picture').show();
    }
    $('#Nombrechaire').change(function(){
        $('#numberShaire').text('Number of  chaire is '+$(this).val());
    });
    $('#name').change(function(){
        $('#Name').text('Name: '+$(this).val());
    });
    $('#picture').change(function(){
        $('#Picture').attr("src", $(this).val());
        if( $('#Picture').attr("src")=="")
    {
        $('#Picture').hide();
    }
    else{
        $('#Picture').show();
    }
    });
});

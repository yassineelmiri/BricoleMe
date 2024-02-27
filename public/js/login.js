$(document).ready(function (){
    $("#register_link").click(function (){

        $("#register_choice").removeClass('hidden');
    })

    $("#close_btn").click(function (){
        $("#register_choice").addClass('hidden');
    })
})

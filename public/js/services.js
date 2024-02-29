$(document).ready(function (){


    function fetchServicesOfArtisan(){
        $.ajax({
            url: '/artisans/services/all',
            type: 'GET',
            dataType: 'json',
            success: function (response){
                let services_of_artisan = response;
                $("#services_of_artisan").empty();
                $.each(response , function (index,row){
                    services_of_artisan = response;
                    $("#services_of_artisan").append(
                        `<div class="flex gap-[7.5px] rounded-lg px-[0.75rem] py-[0.4rem] justify-center items-center text-white font-medium bg-orange-400 mt-[3rem]">
                            <p>${row.skill}</p>
                            <img class="w-[15.5px] h-[15.5px] cursor-pointer z-50 close_service" src="${BASE_URL}/images/close.png" data-id="${row.skill}" alt="">
                        </div>`
                    )
                });
            }

        });
    }






    $('.service').change(function (){
        let isChecked = $(this).prop('checked');
        let relative_div = $(this).closest('#services_container').find('#relative_div');
        if(isChecked){
            relative_div.removeClass('hidden');
        }
        else{
            relative_div.addClass('hidden');
        }
    })

    $('.add_service').on('click', function (){
        let checkbox = $(this).closest('#services_container').find('.service');
        let relativeDiv = $(this).closest('#relative_div');
        let errorDiv = relativeDiv.find('#error');
        errorDiv.text('');

        let service_id = $(this).data('id');
        let price = relativeDiv.find('.price_field').val();
        let max_price = relativeDiv.find('#max_price').text();

        if(price.trim() === ''){
            errorDiv.text('Not Empty .');
        }
        else if(!/^[0-9]+$/.test(price)){
            errorDiv.text('only numbers .');
        }
        else if(price > max_price ){
            errorDiv.text('Max price is : ' + max_price);
        }
        else{
            $.ajax({
                url : '/artisans/services/add',
                type : 'POST',
                dataType : 'json' ,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    add : 1,
                    service_id : service_id,
                    price : price
                },
                success : function (response){
                    checkbox.attr('disabled', 'disabled');
                    relativeDiv.addClass('hidden');

                    fetchServicesOfArtisan();
                }
            });
        }
    });

    $('#services_of_artisan').on('click', '.close_service', function (){
        let skill = $(this).data('id');
        let checkbox = $('#services_container input[type="checkbox"][data-id="' + skill + '"]');
        console.log(checkbox);

        $.ajax({
            url : '/artisan/services/delete',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data : {
                delete : 1,
                skill : encodeURIComponent(skill)
            },
            success : function (){
                checkbox.removeAttr('disabled');
                fetchServicesOfArtisan();
            },
            error: function(xhr, textStatus, errorThrown) {
                alert(errorThrown);
            }
        });
    });


    $("#doneBtn").click(function (){

        if($('#services_of_artisan').html().trim() === ""){
            $('#emptyError').text('Please add at least one Service');
            setTimeout(function (){
                $('#emptyError').fadeOut();
            },2000)

        }
        else{
           
                window.location.href='http://localhost/ART';

        }
    })







    fetchServicesOfArtisan();

})

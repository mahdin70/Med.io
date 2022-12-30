$(document).ready(function(){
    $('#category').change(function(){
        var cat = 'category=' + $(this).val();
        getService($(this).val());
        $.post('../Med.io/PHP/test_portal.inc.php', cat, processResponse);
    });

    function processResponse(data){
        $('#servicesInfo').html(data);
    }
});


function getService(val) {
	$.ajax({
	type: "POST",
	url: "./PHP/test_portal.inc2.php",
	data:'category='+val,
        success: function(data){
            $('#serviceName').html(data);
        }
	});
}

window.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed');

    let successModal = new bootstrap.Modal(document.getElementById('successModal'), {});
    let emptyfieldsModal = new bootstrap.Modal(document.getElementById('emptyfieldsModal'), {});


    const urlHeader = window.location.search;
    const urlParams = new URLSearchParams(urlHeader);
    const status = urlParams.get('request');
    const error_status = urlParams.get('error');

    if(status == 'success'){
        successModal.show();
        console.log("request = success");
        var modalClose = document.getElementById("successModal").addEventListener('click', function(){
            successModal.hide();
           
        })
    }
    else if(error_status == 'emptyfields'){
        
        emptyfieldsModal.show();
        var modalClose = document.getElementById("closeErrorModal").addEventListener('click', function(){
            emptyfieldsModal.hide();
        });
    }
});


var datePicker = document.getElementById("test-date");
datePicker.min = getDate();
datePicker.max = getDate(7);

function getDate(days){
    let date;

    if(days != undefined){
        date  =  new Date(Date.now() + days *24*60*60*1000);
    }else{
        date = new Date();
    }

    const offset = date.getTimezoneOffset();

    date  = new Date(date.getTime() - (offset*60*1000));
    return date.toISOString().split('T')[0];
}


$(document).ready(function(){
    $('#department').change(function(){
        var dept = 'department=' + $(this).val();
        console.log($(this).val());
        getDoctor($(this).val());
    })
})


function getDoctor(val){
    $.ajax({
        type:"POST",
        url:"./PHP/patient_portal.inc.php",
        data:'department='+val,
        
        success: function(data){
            console.log(data);
            $('#doctorName').html(data);
        }
    })
}


var datePicker = document.getElementById("appointment-date");
datePicker.min = getDate();
datePicker.max = getDate(3);

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

window.addEventListener('DOMContentLoaded', (event) => {
    console.log('DOM fully loaded and parsed');

    let successModal = new bootstrap.Modal(document.getElementById('successModal'), {});
    let emptyfieldsModal = new bootstrap.Modal(document.getElementById('emptyfieldsModal'), {});


    const urlHeader = window.location.search;
    const urlParams = new URLSearchParams(urlHeader);
    const status = urlParams.get('appointment');
    const error_status = urlParams.get('error');
    
    
    if(status == 'success'){

        successModal.show();
        var modalClose = document.getElementById("closeModal").addEventListener('click', function(){
            successModal.hide();
        });

    }   
    
    else if(error_status == 'emptyfields'){
        
        emptyfieldsModal.show();
        var modalClose = document.getElementById("closeErrorModal").addEventListener('click', function(){
            emptyfieldsModal.hide();
        });
    }
});


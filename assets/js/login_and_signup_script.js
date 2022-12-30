var datePicker = document.getElementById("birth_date");
datePicker.max = getDate(0);

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

const date = new Date();
const tomorrow = new Date(date);
tomorrow.setDate(tomorrow.getDate() + 1);


$('.datepicker').datepicker({

    format: 'yyyy-mm-d',
    autoclose: true,
    startDate: date,
    todayHighlight: true

});

let currentDay = date.getDate();
let currentMonth = date.getMonth();
let currentYear = date.getFullYear();

let tomorrowDay = tomorrow.getDate();
let tomorrowMonth = tomorrow.getMonth();
let tomorrowYear = tomorrow.getFullYear();


$('#pickup-date').val(currentYear + '-' + currentMonth + '-' + currentDay);
$('#dropoff-date').val(tomorrowYear + '-' + tomorrowMonth + '-' +tomorrowDay);


$( function() {
  	
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 100000,
      values: [ 5000, 20000 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
  
  });
	
var modal_login = document.getElementById('login');

var modal_signup = document.getElementById('sign');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
    if (event.target == modal_signup) {
        modal_signup.style.display = "none";
    }
    if (event.target == modal_login) {
        modal_login.style.display = "none";
    }
}

$(function () {
    for (i = new Date().getFullYear(); i > 1900; i--) {
        $('#years').append($('<option />').val(i).html(i));
    }
    for (i = 1; i < 13; i++) {
        $('#months').append($('<option />').val(i).html(i));
    }
    updateNumberOfDays();
    $('#years, #months').change(function () {
        updateNumberOfDays();
    });
});
function updateNumberOfDays() {
    $('#days').html('');
    month = $('#months').val();
    year = $('#years').val();
    days = daysInMonth(month, year);

    for (i = 1; i < days + 1; i++) {
        $('#days').append($('<option />').val(i).html(i));
    }
}
function daysInMonth(month, year) {
    return new Date(year, month, 0).getDate();
}





// $(document).ready(function () {
//     $('#back_to_top').click(function () {
//         $('html, body').animate({ scrollTop: 0 }, "slow");
//     });
//     // go top
//     $(window).scroll(function () {
//         if ($(window).scrollTop() != 0) {
//             $('#back_to_top').fadeIn();
//         } else {
//             $('#back_to_top').fadeOut();
//         }
//     });
// });

// $('.slide_book li:first-child').addClass('active');
// $('.slide_book li').onclick(function(){
//     var pageNum = $(this).attr('data-page');
// })
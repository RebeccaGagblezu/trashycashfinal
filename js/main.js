

//jQuery for page scrolling feature - requires jQuery Easing plugin
// $(function() {
//     $('.page-scroll a').bind('click', function(event) {
//         var $anchor = $(this);
//         $('html, body').stop().animate({
//             scrollTop: $($anchor.attr('href')).offset().top
//         }, 1500, 'easeInOutExpo');
//         event.preventDefault();
//     });
// });

// $(document).ready( function() {
//     $('.subMenu').smint({
//     	'scrollSpeed' : 1000
//     });
// });

// $(document).ready( function() {
//     $('.subMenu').smint({
//     	'scrollSpeed' : 1000
//     });
// });



 // $(document).ready(function () {

 //    $('#uploadSubmit').on("click", function(event){  
 //   event.preventDefault();  
 //   if($('#first_name').val() == "")  
 //   {  
 //    alert("first name is required");  
 //   }  
 //   else if($('#address').val() == '')  
 //   {  
 //    alert("Address is required");  
 //   }  
 //   else if($('#designation').val() == '')
 //   {  
 //    alert("Designation is required");  
 //   }
//     $("#uploadform").on("submit", function(e) {
//         var postData = $(this).serializeArray();
//         var formURL = $(this).attr("action");
        
//         $.ajax({
//             url: $(this).attr("action"),
//             type: "POST",
//             data: $('#uploadform').serialize(),
//             success: function(data, textStatus, jqXHR) {
//                 $('#contact_dialog .modal-header .modal-title').html("Result");
//                 $('#contact_dialog .modal-body').html(data);
//                 alert("hurray");
//                 $("#uploadSubmit").remove();
//             },
//             error: function(jqXHR, status, error) {
//                 console.log(status + ": " + error);
//             }
//         });
//         e.preventDefault();
//     });
     
//     $("#uploadSubmit").on('click', function() {
//         $("#uploadform").submit();
//     });
//});
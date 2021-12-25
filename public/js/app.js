
$(function () {

   
    $("#addfield").click(function (e) {

     var answer = $(".answer").first().clone();
     
     answer.prepend('<hr><a  href="javascript:void(0);"  class="btn-close pull-right del"><a>');

        $("#surveyform").append(answer);
        
        $(".del").on("click" , function(e){

          e.preventDefault();
         
         $(this).closest('.answer').remove();
 
     });

    });

     $("#navbarDropdown").click((e)=>{
        e.preventDefault();

        $("#dropdown-menu").slideToggle(500);
    });
    

});


window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

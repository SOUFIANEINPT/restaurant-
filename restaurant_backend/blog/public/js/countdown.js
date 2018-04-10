
$('[data-value]').each(function() {
    var date=$(this).attr("data-value")
    var countDownDate = new Date(date).getTime();
    var id=String($(this).attr("data-id"));
    //console.log('id',id)
 // Update the count down every 1 second
 var x = setInterval(function() {
 
     // Get todays date and time
     var now = new Date().getTime();
     
     // Find the distance between now an the count down date
     var distance = countDownDate - now;
     
     // Time calculations for days, hours, minutes and seconds
     var days = Math.floor(distance / (1000 * 60 * 60 * 24));
     var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
     var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
     var seconds = Math.floor((distance % (1000 * 60)) / 1000);
     
     // Output the result in an element with id="demo"
     var display=days + "d " + hours + "h "+ minutes + "m " + seconds + "s ";
     if(days==0)
     display=hours + "h "+ minutes + "m " + seconds + "s ";
     if(hours==0)
     {
        display=minutes + "m " + seconds + "s ";
     }
     if(minutes==0)
     display=seconds + "s ";
     document.getElementById(id).innerHTML =display;
     
     // If the count down is over, write some text 
     if (distance < 0) {
         clearInterval(x);
         document.getElementById(id).parentElement.style.display ="none";
     }
 }, 1000); 
 });
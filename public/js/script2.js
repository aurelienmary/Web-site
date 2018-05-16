$(function() {
  
  $("#contact-form").validator();

  
  $("#contact-form").on("submit", function(e) {
    
    if (!e.isDefaultPrevented()) {
      var url = "contact.php";

      

      var messageAlert = "alert-success";
      var messageText =
        "Your message was sent, thank you. I will get back to you soon.";

      
      var alertBox =
        '<div class="alert ' +
        messageAlert +
        ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' +
        messageText +
        "</div>";

      
      if (messageAlert && messageText) {
       
        $("#contact-form").find(".messages").html(alertBox);
        
        $("#contact-form")[0].reset();
      }

      return false;
    }
  });
});

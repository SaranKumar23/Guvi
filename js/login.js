$(document).ready(function() {
    $("#button").click(function() {
      $.ajax({
        url: "login.php",
        type: "POST",
        data: {
          name: "John",
          password:"saran"
        },
        success: function(result) {
          $("#output").html(result);
        }
      });
    });
  });
  
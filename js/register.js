$(document).ready(function() {
    $("#button").click(function() {
      $.ajax({
        url: "register.php",
        type: "POST",
        data: {
            name: "John",
            password:"saran",
            email:"saran@23",
            Dob:"12/12/12"
        },
        success: function(result) {
          $("#output").html(result);
        }
      });
    });
  });
  
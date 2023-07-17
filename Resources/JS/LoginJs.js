
  $(document).ready(function () {
    $("#loginForm").on("submit", function (event) {
      event.preventDefault();

      // Get form data
      var email = $("#email").val();
      var password = $("#password").val();

      // Create the AJAX request
      $.ajax({
        type: "POST",
        url: "App/Http/Controller/Auth/LoginController.php",
        data: {
            function: 'handleLogin',
          email: email ,
          password: password,
        },
        dataType: "text",
        success: function (response) {
            console.log(response);
        },
        error: function (xhr, status, error) {
            // Handle the error case and display the exception message
            alert("An error occurred during login: " + error);
        },
      });
    });
  }); 


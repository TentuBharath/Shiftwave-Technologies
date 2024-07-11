// Admin validation

function AdminLogin() {
  var email_id = $("#email_id").val();
  var password = $("#password").val();
  if (email_id === "" || password === "") {
    if (email_id == "") {
      $("#email_id").css("border", "3px solid red");
    } else {
      $("#email_id").css("border", "none");
    }
    if (password == "") {
      $("#password").css("border", "3px solid red");
    } else {
      $("#password").css("border", "none");
    }
  } else {
    $.ajax({
      type: "POST",
      url: "controllers/login.php",
      data: {
        email_id: email_id,
        password: password,
      },
      success: function (response) {
        console.log(response);
        if(response.trim() === "success"){
          window.location.href = "views/dashboard.php";
        } else {
          alert("Incorrect Credentials");
        }
      },
    });
  }
}
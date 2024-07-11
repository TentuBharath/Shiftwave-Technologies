// Campaign Registeration form timer

$(document).ready(function () {
  var startDateTime = regisetractive;
  var endDateTime = registerclose;
  const startdate = startDateTime.split(" ");
  const endate = endDateTime.split(" ");
  var activedate = startdate[0] + "T" + startdate[1];
  var closedate = endate[0] + "T" + endate[1];
  $(".camp_container").css("display", "none");
  setInterval(function () {
    var now = new Date();
    var startDateObj = new Date(activedate);
    var endDateObj = new Date(closedate);

    if (now < startDateObj) {
      var timeLeft = Math.round((startDateObj - now) / 1000);
      var days = Math.floor(timeLeft / 86400);
      var hours = Math.floor((timeLeft % 86400) / 3600);
      var minutes = Math.floor((timeLeft % 3600) / 60);
      var seconds = timeLeft % 60;
      $(".timer-txt").show();
      $(".timer-txt").text(
        "Time left to start Campaign registration " +
          days +
          "d " +
          hours +
          "h " +
          minutes +
          "m " +
          seconds +
          "s"
      );
      $(".camp_container").css("display", "none");
    } else if (now >= startDateObj && now <= endDateObj) {
      var timeLeft = Math.round((endDateObj - now) / 1000);
      var days = Math.floor(timeLeft / 86400);
      var hours = Math.floor((timeLeft % 86400) / 3600);
      var minutes = Math.floor((timeLeft % 3600) / 60);
      var seconds = timeLeft % 60;
      $(".timer").css("display", "none");
      // $(".timer-txt").hide();
      $(".camp_container").css("display", "flex");
    } else {
      $(".end-timer").show();
      $(".endtimer-txt").show();
      $(".endtimer-txt").text("The registration period has ended.");
      $(".camp_container").css("display", "none");
      $.ajax({
        url: "../controllers/camptimer.php",
        type: "POST",
        data: {
          startDateTime: startDateTime,
          endDateTime: endDateTime,
        },
        success: function (response) {
          console.log(response);
          if (response.trim() == "success") {
            // clearInterval(timer);
          }
        },
      });
    }
  }, 1000);
});

// Campaign Registration

function Register() {
  var cand_name = $("#cand_name").val();
  var camp_name = $("#camp_name").val();
  var college_id = $("#college_id").val();
  var dob = $("#dob").val();
  var gender = $("#gender").val();
  var qualification = $("#qualification").val();
  var mail = $("#mail").val();
  var phone = $("#phone").val();
  var logo = $("#logo").val();
  var image = $("#logo")[0].files[0];
  // console.log(cand_name, camp_name, college_id, dob, gender, qualification, mail, phone, logo, image);

  var form_data = new FormData();
  form_data.append("image", image);
  form_data.append("cand_name", cand_name);
  form_data.append("camp_name", camp_name);
  form_data.append("college_id", college_id);
  form_data.append("dob", dob);
  form_data.append("gender", gender);
  form_data.append("qualification", qualification);
  form_data.append("mail", mail);
  form_data.append("phone", phone);
  if (
    cand_name === "" ||
    camp_name === "" ||
    college_id === "" ||
    dob === "" ||
    gender === "" ||
    qualification === "" ||
    mail === "" ||
    phone === "" ||
    logo === ""
  ) {
    if (cand_name == "") {
      $("#cand_name").css("border", "3px solid red");
    } else {
      $("#cand_name").css("border", "none");
    }
    if (camp_name == "") {
      $("#camp_name").css("border", "3px solid red");
    } else {
      $("#camp_name").css("border", "none");
    }
    if (college_id == "") {
      $("#college_id").css("border", "3px solid red");
    } else {
      $("#college_id").css("border", "none");
    }
    if (dob == "") {
      $("#dob").css("border", "3px solid red");
    } else {
      $("#dob").css("border", "none");
    }
    if (gender == "") {
      $("#gender").css("border", "3px solid red");
    } else {
      $("#gender").css("border", "none");
    }
    if (qualification == "") {
      $("#qualification").css("border", "3px solid red");
    } else {
      $("#qualification").css("border", "none");
    }
    if (mail == "") {
      $("#mail").css("border", "3px solid red");
    } else {
      $("#mail").css("border", "none");
    }
    if (phone == "") {
      $("#phone").css("border", "3px solid red");
    } else {
      $("#phone").css("border", "none");
    }
    if (logo == "") {
      $("#logo").css("border", "3px solid red");
    } else {
      $("#logo").css("border", "none");
    }
  } else {
    $.ajax({
      type: "POST",
      url: "../controllers/campaign.php",
      data: form_data,
      contentType: false,
      processData: false,

      success: function (response) {
        if (response.trim() === "success") {
          alert("Successfully registered..!");
          window.location.href = "../views/home.php";
        } else {
          alert(response);
        }
      },
    });
  }
}

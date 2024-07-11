function SaveDetails() {
  var student_id = $("#student_id").val();
  var student_name = $("#student_name").val();
  var student_mail = $("#student_mail").val();
  var student_pass = $("#student_pass").val();
  var dob = $("#student_dob").val();
  var student_phn = $("#student_phn").val();
  var student_gen = $("#student_gen").val();
  var form_data = new FormData();
  form_data.append("student_id", student_id);
  form_data.append("student_name", student_name);
  form_data.append("student_mail", student_mail);
  form_data.append("student_pass", student_pass);
  form_data.append("student_dob", dob);
  form_data.append("student_phn", student_phn);
  form_data.append("student_gen", student_gen);
  if (
    student_id === "" ||
    student_name === "" ||
    student_mail === "" ||
    student_pass === "" ||
    dob === "" ||
    student_phn === "" ||
    student_gen === ""
  ) {
    if (student_id == "") {
      $("#student_id").css("border", "3px solid red");
    } else {
      $("#student_id").css("border", "none");
    }
    if (student_name == "") {
      $("#student_name").css("border", "3px solid red");
    } else {
      $("#student_name").css("border", "none");
    }
    if (student_mail == "") {
      $("#student_mail").css("border", "3px solid red");
    } else {
      $("#student_mail").css("border", "none");
    }
    if (student_pass == "") {
      $("#student_pass").css("border", "3px solid red");
    } else {
      $("#student_pass").css("border", "none");
    }
    if (dob == "") {
      $("#student_dob").css("border", "3px solid red");
    } else {
      $("#student_dob").css("border", "none");
    }
    if (student_phn == "") {
      $("#student_phn").css("border", "3px solid red");
    } else {
      $("#student_phn").css("border", "none");
    }
    if (student_gen == "") {
      $("#student_gen").css("border", "3px solid red");
    } else {
      $("#student_gen").css("border", "none");
    }
  } else {
    $.ajax({
      type: "POST",
      url: "../controllers/addstudent.php",
      data: form_data,
      contentType: false,
      processData: false,
      success: function (response) {
        if (response.trim() === "success") {
          alert("Successfully registered..!");
          window.location.href = "edit_details.php";
        } else {
          alert(response);
        }
      },
    });
  }
}

function Submit(id1) {
  var stdid = $("#student_id").val();
  var name = $("#student_name").val();
  var mail = $("#student_mail").val();
  var pass = $("#student_pass").val();
  var dob = $("#student_dob").val();
  var phn = $("#student_phn").val();
  var gen = $("#student_gen").val();

  var form_data = new FormData();
  form_data.append("id", id1);
  form_data.append("student_id", stdid);
  form_data.append("student_name", name);
  form_data.append("student_mail", mail);
  form_data.append("student_pass", pass);
  form_data.append("student_dob", dob);
  form_data.append("student_phn", phn);
  form_data.append("student_gen", gen);

  $.ajax({
    type: "POST",
    url: "../controllers/edit.php",
    data: form_data,
    contentType: false,
    processData: false,
    success: function (response) {
      console.log(response);
      window.location.href = "edit_details.php";
    },
  });
}

// campaign members edit

function Data(id1) {
  var cand_name = $("#candidate_name").val();
  var camp_name = $("#campaign_name").val();
  var clg_id = $("#college_id").val();
  var dob = $("#date_of_birth").val();
  var qualify = $("#qualification").val();
  var gen = $("#gender").val();
  var mail = $("#mail_id").val();
  var phn = $("#phone_no").val();
  var image = $("#campaign_logo")[0].files[0];

  var form_data = new FormData();
  form_data.append("id", id1);
  form_data.append("candidate_name", cand_name);
  form_data.append("campaign_name", camp_name);
  form_data.append("college_id", clg_id);
  form_data.append("date_of_birth", dob);
  form_data.append("qualification", qualify);
  form_data.append("gender", gen);
  form_data.append("mail_id", mail);
  form_data.append("phone_no", phn);
  form_data.append("image", image);

  $.ajax({
    type: "POST",
    url: "../controllers/camp_edit.php",
    data: form_data,
    contentType: false,
    processData: false,
    success: function (response) {
      console.log(response);
      if (response.trim() === "success") {
        alert("Successfully edit the details..!");
        window.location.href = "../views/admin-campaign.php";
      } else {
        alert();
      }
    },
  });
}

// Registration Dates set

function savedates() {
  var activateDate = $("#activate-date").val();
  var closeDate = $("#close-date").val();
  if (activateDate === "" || closeDate === "") {
    if (activateDate == "") {
      $("#activate-date").css("border", "3px solid red");
    } else {
      $("#activate-date").css("border", "none");
    }
    if (closeDate == "") {
      $("#close-date").css("border", "3px solid red");
    } else {
      $("#close-date").css("border", "none");
    }
  } else {
  $.ajax({
    type: "POST",
    url: "../controllers/save_dates.php",
    data: {
      activateDate: activateDate,
      closeDate: closeDate,
    },
    success: function (response) {
      if (response.trim() === "success") {
        alert("Successfully set the campaign member registeration dates..!");
        window.location.href = "../views/admin-campaign.php";
      } else {
        alert(response);
      }
    },
  });
}
}

// voting dates

function votedates() {
  var activateDate = $("#start-date").val();
  var closeDate = $("#end-date").val();
  if (activateDate === "" || closeDate === "") {
    if (activateDate == "") {
      $("#start-date").css("border", "3px solid red");
    } else {
      $("#start-date").css("border", "none");
    }
    if (closeDate == "") {
      $("#end-date").css("border", "3px solid red");
    } else {
      $("#end-date").css("border", "none");
    }
  } else {
  $.ajax({
    type: "POST",
    url: "../controllers/vote_dates.php",
    data: {
      activateDate: activateDate,
      closeDate: closeDate,
    },
    success: function (response) {
      if (response.trim() === "success") {
        alert("Successfully set the voting dates..!");
        window.location.href = "../views/admin-campaign.php";
      } else {
        alert(response);
      }
    },
  });
}
}

// Results Dates

function resultsdates() {
  var activateDate = $("#activatedate").val();
  var closeDate = $("#closedate").val();
  if (activateDate === "" || closeDate === "") {
    if (activateDate == "") {
      $("#activatedate").css("border", "3px solid red");
    } else {
      $("#activatedate").css("border", "none");
    }
    if (closeDate == "") {
      $("#closedate").css("border", "3px solid red");
    } else {
      $("#closedate").css("border", "none");
    }
  } else {
    $.ajax({
      type: "POST",
      url: "../controllers/results_dates.php",
      data: {
        activateDate: activateDate,
        closeDate: closeDate,
      },
      success: function (response) {
        if (response.trim() === "success") {
          alert("Successfully set the results dates ..!");
          window.location.href = "../views/admin_results.php";
        } else {
          alert(response);
        }
      },
    });
  }
}

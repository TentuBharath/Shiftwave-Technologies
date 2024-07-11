// Student Login

function StudentLogin() {
  // var collegeid = document.getElementById("collegeid").value;
  var collegeid = $("#collegeid").val();
  // var password = document.getElementById("password").value;
  var password = $("#password").val();
  if (collegeid === "" || password === "") {
    if (collegeid == "") {
      $("#collegeid").css("border", "3px solid red");
    } else {
      $("#collegeid").css("border", "none");
    }
    if (password == "") {
      $("#password").css("border", "3px solid red");
    } else {
      $("#password").css("border", "none");
    }
  } else {
    $.ajax({
      type: "POST",
      url: "controllers/logins.php",
      data: {
        collegeid: collegeid,
        password: password,
      },
      success: function (response) {
        if (response.trim() == "success") {
          window.location.href = "views/home.php";
        } else {
          alert("Incorrect Credentials");
        }
      },
    });
  }
}

function forgotPassword() {
  window.location.href =
    "http://127.0.0.1:5500/Student%20Campaign/Views/forgot-passwprd.html";
}

// student vote login verification

function StudentVote() {
  var sname = $("#sname").val();
  var clgid = $("#clgid").val();
  var dob = $("#dob").val();
  if (sname === "" || clgid === "" || dob === "") {
    if (sname == "") {
      $("#sname").css("border", "3px solid red");
    } else {
      $("sname").css("border", "none");
    }
    if (clgid == "") {
      $("#clgid").css("border", "3px solid red");
    } else {
      $("clgid").css("border", "none");
    }
    if (dob == "") {
      $("#dob").css("border", "3px solid red");
    } else {
      $("dob").css("border", "none");
    }
  } else {
    $.ajax({
      type: "POST",
      url: "../controllers/vote_verifying.php",
      data: {
        sname: sname,
        clgid: clgid,
        dob: dob,
      },
      success: function (response) {
        if (response.trim() == "success") {
          window.location.href = "../views/student_voting.php";
        } else {
          alert(response);
        }
      },
    });
  }
}

// Voting

function VoteNow(camp_name) {
  $.ajax({
    type: "POST",
    url: "../controllers/voting.php",
    data: {
      camp_name: camp_name,
    },
    success: function (response) {
      if (response.trim() == "success") {
        alert("Successfully completed..!");
        window.location.href = "../views/home.php";
      } else {
        alert(response);
      }
    },
  });
}

// forgot password

function Login() {
  var cid = $("#cid").val();
  var clgpass = $("#clgpass").val();
  var npass = $("#npass").val();
  var cpass = $("#cpass").val();

  if (cid === "" || clgpass === "" || npass === "" || cpass === "") {
    if (cid == "") {
      $("#cid").css("border", "3px solid red");
    } else {
      $("#cid").css("border", "none");
    }
    if (clgpass == "") {
      $("#clgpass").css("border", "3px solid red");
    } else {
      $("#clgpass").css("border", "none");
    }
    if (npass == "") {
      $("#npass").css("border", "3px solid red");
    } else {
      $("#npass").css("border", "none");
    }
    if (cpass == "") {
      $("#cpass").css("border", "3px solid red");
    } else {
      $("#cpass").css("border", "none");
    }
  } else {
    $.ajax({
      type: "POST",
      url: "controllers/forgot-pass.php",
      data: {
        cid: cid,
        clgpass: clgpass,
        npass: npass,
        cpass: cpass
      },
      success: function (response) {
        if (response.trim() == "success") {
          alert("Successfully chaged your password..!");
          window.location.href = "index.php";
        } else {
          alert("Incorrect Credentials");
          console.log(response);
        }
      },
    });
  }
}

// complains

function complaint() {
  var complaint = $("#message").val();
  $.ajax({
    type: "POST",
    url: "../controllers/complaints.php",
    data: {
      complaint: complaint,
    },
    success: function (response) {
      if (response.trim() == "success") {
        alert("Successfully sents to admin..!");
        window.location.href = "../views/home.php";
      } else {
        alert(response);
      }
    },
  });
}

// CONTACT US

function contactus() {
  var name = $("#contact-name").val();
  var mail = $("#contact-mail").val();
  var phn_no = $("#contact-ph-no").val();
  var msg = $("#message").val();

  if (name === "" || mail === "" || phn_no === "" || msg === "") {
    if (name == "") {
      $("#contact-name").css("border", "3px solid red");
    } else {
      $("#contact-name").css("border", "none");
    }
    if (mail == "") {
      $("#contact-mail").css("border", "3px solid red");
    } else {
      $("#contact-mail").css("border", "none");
    }
    if (phn_no == "") {
      $("#contact-ph-no").css("border", "3px solid red");
    } else {
      $("#contact-ph-no").css("border", "none");
    }
    if (msg == "") {
      $("#message").css("border", "3px solid red");
    } else {
      $("#message").css("border", "none");
    }
  } else {
    $.ajax({
    type: "POST",
    url: "../controllers/contact.php",
    data: {
      name: name,
      mail: mail,
      phn_no: phn_no,
      msg: msg
    },
    success: function (response) {
      if (response.trim() == "success") {
        alert("Successfully sents your message..!");
        window.location.href = "../views/contactus.php";
      } else {
        alert(response);
      }
    },
  });
}
}
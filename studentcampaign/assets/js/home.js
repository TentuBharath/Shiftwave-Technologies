// vote timer

$(document).ready(function() {
  
  var startDateTime = voteactive;
  var endDateTime = voteclose;
  const startdate = startDateTime.split(" ");
  const endate = endDateTime.split(" ");
  var activedate = startdate[0] + "T" + startdate[1];
  var closedate = endate[0] + "T" + endate[1];
  $(".home-btn").css("display", "none");
  setInterval(function () {
    var now = new Date();
    var votestart = new Date(activedate);
    var votend = new Date(closedate); 
    if (now < votestart) {
      var timeLeft = Math.round((votestart - now) / 1000);
      var days = Math.floor(timeLeft / 86400);
      var hours = Math.floor((timeLeft % 86400) / 3600);
      var minutes = Math.floor((timeLeft % 3600) / 60);
      var seconds = timeLeft % 60;
      $(".timer-text").css("display", "flex");
      $(".timer-text").text(
        "Time left to start voting: " +
        days +
        "d " +
        hours +
        "h " +
        minutes +
        "m " +
        seconds +
        "s"
      );
      $(".home-btn").css("display", "none");
    } else if (now >= votestart && now <= votend) {
      var timeLeft = Math.round((votend - now) / 1000);
      var days = Math.floor(timeLeft / 86400);
      var hours = Math.floor((timeLeft % 86400) / 3600);
      var minutes = Math.floor((timeLeft % 3600) / 60);
      var seconds = timeLeft % 60;

      $(".timer-text").css("display", "none");
      $(".home-btn").css("display", "flex");
    } else {
      $(".timer").show();
      $(".timer-text").css("display", "flex");
      $(".timer-text").text("The voting period has ended.");
      $(".home-btn").css("display", "none");

      $.ajax({
        url: "../controllers/votetimer.php",
        type: "POST",
        data: {
          startDateTime: startDateTime,
          endDateTime: endDateTime,
        },
        success: function (response) {
          console.log(response);
          if (response.trim() == "success") {
          }
        },
      });
    }
  }, 1000);
});


// student results 

$.ajax({
  url: "../controllers/stu_results.php",
  type: "POST",
  success: function (response) {
    if (response.trim() == "success") {
    }
  },
});

// Logout 

function toggleMenu() {
    let subMenu = document.getElementById("subMenu");
    subMenu.classList.toggle("open-menu");
  }
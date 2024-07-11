// results timer

$(document).ready(function () {
  var active = resultactive;
  var close = resultclose;
  const startime = active.split(" ");
  const endtime = close.split(" ");
  var resultsactive = startime[0] + "T" + startime[1];
  var resultsclose = endtime[0] + "T" + endtime[1];
  $(".resultshide").hide();
  setInterval(function () {
    var now = new Date();
    var resultsactivated = new Date(resultsactive);
    var resultsclosed = new Date(resultsclose);

    if (now < resultsactivated) {
      var timeLeft = Math.round((resultsactivated - now) / 1000);
      var days = Math.floor(timeLeft / 86400);
      var hours = Math.floor((timeLeft % 86400) / 3600);
      var minutes = Math.floor((timeLeft % 3600) / 60);
      var seconds = timeLeft % 60;
      $(".timer-text").show();
      $(".timer-txt").text(
        "Time left to start voting results: " +
          days +
          "d " +
          hours +
          "h " +
          minutes +
          "m " +
          seconds +
          "s"
      );
      $(".resultshide").hide();
    } else if (now >= resultsactivated && now <= resultsclosed) {
      var timeLeft = Math.round((resultsclosed - now) / 1000);
      var days = Math.floor(timeLeft / 86400);
      var hours = Math.floor((timeLeft % 86400) / 3600);
      var minutes = Math.floor((timeLeft % 3600) / 60);
      var seconds = timeLeft % 60;
      $(".timer").css("display", "none");
      $(".resultshide").show();
    } else {
      $(".timer-txt").text("The campaign results period has ended.");
      $.ajax({
        url: "../controllers/resultimer.php",
        type: "POST",
        data: {
          active: active,
          close: close
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

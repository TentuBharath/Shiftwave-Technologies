function sentnotification() {
  var txt_notify = $("#notify").val();
  if (txt_notify === "") {
    if (txt_notify == "") {
      $("#notify").css("border", "3px solid red");
    } else {
      $("#notify").css("border", "none");
    }
  } else {
  $.ajax({
    type: "POST",
    url: "../controllers/notify.php",
    data: {
      txt_notify: txt_notify,
    },
    success: function (response) {
      if (response.trim() == "success") {
        alert("Successfully generate notification ..!");
        window.location.href = "../views/notification.php";
      } else {
        alert(response);
      }
    },
  });
}
}

function toggleMenu() {
    let subMenu = document.getElementById("subMenu");
    subMenu.classList.toggle("open-menu");
  }

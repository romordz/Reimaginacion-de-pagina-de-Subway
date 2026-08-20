function fetchUserInfo(callback) {
  $.ajax({
    type: "GET",
    url: "config/getUserInfo.php",
    dataType: "json",
    success: function (response) {
      if (response.success) {
        var userInfo = response.user_info;
        content = userInfo.Nombre;
        isStarter = parseInt(userInfo.Starter, 10);
        id = userInfo.id;
        $("#MyUser").html(content);
        if (callback) {
          callback();
        }
      } else {
      }
    },
    error: function (xhr, status, error) {
      console.error("Error fetching user information:", status, error);
    },
  });
}
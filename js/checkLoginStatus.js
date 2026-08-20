

function checkLoginStatus() {
  $.ajax({
    type: "GET",
    url: "config/checkLogIn.php",
    dataType: "json",
    success: function (response) {
      if (response.logged_in) {
        // User is logged in
        loggedIn = true;
        fetchUserInfo(doOnboarding);

        $(".logged-user").show();
        $("#not-logged-user").hide();
        console.log("User is logged in");
      } else {
        // User is not logged in
        loggedIn = false;
        doOnboarding();
        $(".logged-user").hide();
        $("#not-logged-user").show();
        console.log("User is not logged in");
      }
    },
    error: function (xhr, status, error) {
      console.error("Error checking login status:", status, error);
    },
  });
}
var maxheight = 1024;
var maxwidth = 768;


if((screen.height < maxheight) || (screen.width < maxwidth)){

location.href = "../pages/dashboardMobile.php";

} else {

location.href = "../pages/dashboard.php";
}

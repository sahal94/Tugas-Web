<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ruang Dosen</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/el-lib.css">
	<link rel="stylesheet" href="css/fab-style.css" type="text/css">

	<script src="js/el-lib.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

<style>
  #sidemenu {
  position: fixed;
  width: 60px;
  height: auto;
  top: 60px;
  bottom: 0;
  background: rgb(43, 43, 43);
  overflow: hidden;
  -webkit-transition: all .1s ease-in;
  -moz-transition: all .1s ease-in;
  -ms-transition: all .1s ease-in;
  -o-transition: all .1s ease-in;
  transition: all .1s ease-in;
  z-index: 5;
}

#sidemenu.open {
  width: 230px;
  -webkit-transition: all .3s ease-out;
  -moz-transition: all .3s ease-out;
  -ms-transition: all .3s ease-out;
  -o-transition: all .3s ease-out;
  transition: all .3s ease-out;
}

#nav-icon3 {
  width: 32px;
  height: 32px;
  position: relative;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .5s ease-in-out;
  -moz-transition: .5s ease-in-out;
  -o-transition: .5s ease-in-out;
  transition: .5s ease-in-out;
  cursor: pointer;
  display: block;
}

#nav-icon3 span {
  display: block;
  position: absolute;
  height: 2px;
  width: 100%;
  background: #ffffff;
  border-radius: 9px;
  opacity: 1;
  left: 0;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transition: .25s ease-in-out;
  -moz-transition: .25s ease-in-out;
  -o-transition: .25s ease-in-out;
  transition: .25s ease-in-out;
}
#nav-icon3 span:nth-child(1) {
  top: 6px;
}

#nav-icon3 span:nth-child(2), #nav-icon3 span:nth-child(3) {
  top: 16px;
}

#nav-icon3 span:nth-child(4) {
  top: 26px;
}

#nav-icon3.open span:nth-child(1) {
  top: 18px;
  width: 0%;
  left: 50%;
}

#nav-icon3.open span:nth-child(2) {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}

#nav-icon3.open span:nth-child(3) {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

#nav-icon3.open span:nth-child(4) {
  top: 18px;
  width: 0%;
  left: 50%;
}

#header .menu-button {
  position: fixed;
  top: 0;
  left: 0;
  width: 60px;
  height: 60px;
  background: #000000;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  padding: 14px;
}

#header .menu-button img {
  max-width: 100%;
  height: auto;
}

#header .menu-button:hover {
  background: #DC143C;
  cursor: pointer;
}

#top-bar {
  position: fixed;
  display: block;
  top: 0;
  left: 60px;
  right: 0;
  height: 60px;
  width: auto;
  background: #000000;
  padding-left: 15px;
  padding-right: 15px;
  color: #ffffff;
  z-index: 5;
}

#content-wrapper {
  padding-top: 60px;
  padding-left: 60px;
}


@-webkit-keyframes fadeInFromNone {
  0% {
    display: none;
    bottom: -6px;
    opacity: 0;
  }

  1% {
    display: block;
    bottom: -5px;
    opacity: 0;
  }

  100% {
    display: block;
    bottom: 0;
    opacity: 1;
  }
}

@-moz-keyframes fadeInFromNone {
  0% {
    display: none;
    bottom: -6px;
    opacity: 0;
  }

  1% {
    display: block;
    bottom: -5px;
    opacity: 0;
  }

  100% {
    display: block;
    bottom: 0;
    opacity: 1;
  }
}

@-o-keyframes fadeInFromNone {
  0% {
    display: none;
    bottom: -6px;
    opacity: 0;
  }

  1% {
    display: block;
    bottom: -5px;
    opacity: 0;
  }

  100% {
    display: block;
    bottom: 0;
    opacity: 1;
  }
}

@keyframes fadeInFromNone {
  0% {
    display: none;
    bottom: -6px;
    opacity: 0;
  }

  1% {
    display: block;
    bottom: -5px;
    opacity: 0;
  }

  100% {
    display: block;
    bottom: 0;
    opacity: 1;
  }
}

/* NAV MENU  */

li .glyphicon {
  margin-right: 10px;
}
li.link-active a, li.link-active a:hover, li.link-active a:focus {
  background-color: #4189C7;
  color: white;
}
.main-nav {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1;
}

.main-menu {
  width: 230px;
}
.main-menu ul {
  padding: 0;
  margin: 0;
  list-style: none;
}
.main-menu li a {
  display: block;
  height: 48px;
  line-height: 32px;
  font-size: 16px;
  text-decoration: none;
  color: #ffffff;
}
.main-menu li.link-active a {
  background-color: rgb(21, 71, 110);
}
.main-menu li.link-active:hover a {
  background-color: rgb(32, 82, 121);
}
.main-menu li:hover a {
  background-color: rgb(64, 64, 64);
}
.main-menu li a span {
  font-size: 18px;
  width: 60px;
  text-align: center;
  line-height: 48px;
  color: transparent;
  -webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: #ffffff;
}
.main-menu.bottom {
  position: absolute;
  bottom: 45px;
  border-top: 1px solid rgb(64, 64, 64);
}
img {
  border-radius: 50%;
}
</style>

<script>
  $(function(){
    $("#header>.menu-button").click(function() {
      $("#sidemenu").toggleClass("open");
        $(".copyright").toggleClass("show");
        });
    $("#sidemenu, #top-bar, #content-wrapper").click(function(e) {
      $("#sidemenu").removeClass("open");
        $(".copyright").removeClass("show");
        });
  })
function myFunction() {
    var x = document.getElementById("1").value;
    document.getElementById("input").innerHTML = x;
}
function myFunction() {
    var x = document.getElementById("2").value;
    document.getElementById("demo").innerHTML = x;
}
</script>

	</head>
	<body>
<header id="header">
  <div class="menu-button" style="font: 500 45px/1.8 "Lato", spawned;">
    <div id="nav-icon3">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div id="top-bar">
    <h3 style="margin-top:17px">Ruang Dosen</h3>
  </div>
</header>

<nav id="sidemenu">
  <div class="row">
    <div class="col-md-4">
      <div class="main-menu">
        <ul class='main-menu'>
          <li>
            <a class="dis" id="1">
            <span class='glyphicon glyphicon-home'></span> Home 
            </a>
          </li>
          <li>
            <a class="dis" id="2">
            <span class='glyphicon glyphicon-book'></span> Daftar Nilai
            </a>
          </li>
          <li>
            <a class="dis" id="3">
            <span class='glyphicon glyphicon-plus'></span> Tambah Data
            </a>
          </li>
          <li>
            <a class="dis" id="4">
            <span class='glyphicon glyphicon-star-empty'></span> Update Nilai
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
<div id="eta"></div>
</body>

<script>
 $(document).ready(function(){
      $('.dis').each(function(){
        $(this).on('click', function(){
      var menu = $(this).attr('id');
      if(menu == "1"){
      $('#eta').load('apage.html');           
      }else if(menu == "2"){
        $('#eta').load('list.php');            
      }else if(menu == "3"){
        $('#eta').load('add.php');           
      }else if(menu == "4"){
        $('#eta').load('nilai1.php');           
      }
    });
    });
  $('#eta').load('apage.html');
  });
</script>

</html>
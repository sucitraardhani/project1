
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
        <title> Koperasi Citra Jaya</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- SideBar-Menu CSS -->
    <link rel="stylesheet" href="css/style.css">
    
	<script>
		$(document).ready(function(){
			$(".hamburger .hamburger__inner").click(function(){
			  $(".wrapper").toggleClass("active")
			})

			$(".top_navbar .fas").click(function(){
			   $(".profile_dd").toggleClass("active");
			});
		})
	</script>
</head>

<body>

<div class="wrapper">
  <div class="top_navbar">
    <div class="hamburger">
       <div class="hamburger__inner">
         <div class="one"></div>
         <div class="two"></div>
         <div class="three"></div>
         <div class="four"></div>
       </div>
    </div>
    <div class="menu">
      <div class="logo">
        Koperasi Citra Jaya
      </div>
      <div class="right_menu">
        <ul>
          <li><i class="fas fa-user"></i>
            <div class="profile_dd">
               <div class="dd_item">Logout</div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
  <div class="main_container">
      <div class="sidebar">
          <div class="sidebar__inner">
            <div class="profile">
              <div class="imag">
              </div>
            </div>
				<nav>
					<ul class="nav">
            <li><a href="/anggota" class=""><i class="lnr lnr-user"></i> <span>Anggota</span></a></li>
            <li><a href="/periode" class=""><i class="lnr lnr-inbox"></i> <span>Periode Bunga</span></a></li>
						<li><a href="/mutasitransaksi" class=""><i class="lnr lnr-envelope"></i> <span>Mutasi Transaksi</span></a></li>
						<li><a href="/simpanan" class=""><i class="lnr lnr-inbox"></i> <span>Simpanan Anggota</span></a></li>
						<li><a href="/simpanbunga" class=""><i class="lnr lnr-envelope"></i> <span>Bunga Simpanan Anggota</span></a></li>
                        	
					</ul>
				</nav>
			</div>
		</div>
          <div class="container">
             @yield('content')
          </div>
          </div>
      </div>
	
</body>

</body>
</html>
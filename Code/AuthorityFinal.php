<html>
<head>
<title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style>
.nav-side-menu {
  overflow: auto;
  font-family: verdana;
  font-size: 12px;
  font-weight: 200;
  background-color: #2e353d;
  position: fixed;
  top: 0px;
  width: 300px;
  height: 100%;
  color: #e1ffff;
}
.nav-side-menu .brand {
  background-color: #23282e;
  line-height: 50px;
  display: block;
  text-align: center;
  font-size: 14px;
}
.nav-side-menu .toggle-btn {
  display: none;
}
.nav-side-menu ul,
.nav-side-menu li {
  list-style: none;
  padding: 0px;
  margin: 0px;
  line-height: 35px;
  cursor: pointer;
  /*    
    .collapsed{
       .arrow:before{
                 font-family: FontAwesome;
                 content: "\f053";
                 display: inline-block;
                 padding-left:10px;
                 padding-right: 10px;
                 vertical-align: middle;
                 float:right;
            }
     }
*/
}
.nav-side-menu ul :not(collapsed) .arrow:before,
.nav-side-menu li :not(collapsed) .arrow:before {
  font-family: FontAwesome;
  content: "\f078";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
  float: right;
}
.nav-side-menu ul .active,
.nav-side-menu li .active {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li.active a,
.nav-side-menu li .sub-menu li.active a {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li,
.nav-side-menu li .sub-menu li {
  background-color: #181c20;
  border: none;
  line-height: 28px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
}
.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
  background-color: #020203;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
  font-family: FontAwesome;
  content: "\f105";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
}
.nav-side-menu li {
  padding-left: 0px;
  border-left: 3px solid #2e353d;
  border-bottom: 1px solid #23282e;
}
.nav-side-menu li a {
  text-decoration: none;
  color: #e1ffff;
}
.nav-side-menu li a i {
  padding-left: 10px;
  width: 20px;
  padding-right: 20px;
}
.nav-side-menu li:hover {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}
@media (max-width: 767px) {
  .nav-side-menu {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
  }
  .nav-side-menu .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 10 !important;
    padding: 3px;
    background-color: #ffffff;
    color: #000;
    width: 40px;
    text-align: center;
  }
  .brand {
    text-align: left !important;
    font-size: 22px;
    padding-left: 20px;
    line-height: 50px !important;
  }
}
@media (min-width: 767px) {
  .nav-side-menu .menu-list .menu-content {
    display: block;
  }
}
body {
  margin: 0px;
  padding: 0px;
}
.nav-side-menu{
margin-top:52px;
margin-left:-62px;

position:absolute;
}
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="bootstrap-3.3.6/dist/css/bootstrap.min.css">
  <script src="bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"></script>
  <script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>

</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">HOSTEL MGMT</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      
    </ul>
	<ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php?logout">LOGOUT<span class="glyphicon glyphicon-log-out"></span></a></li>
    </ul>
  </div>
  
</nav>
<div class="X">
<div class="container">
<div class="nav-side-menu">
    <div class="brand"></div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
               

                <li  data-toggle="collapse" data-target="#products" class="collapsed">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> Missing Items &nbsp; &nbsp; <span class="glyphicon glyphicon-menu-down"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li><a data-toggle="modal" data-target="#myModal2">View Missing Item</a></li>
                    <li><a href="#">Check Status</a></li>
                    
                </ul>


                <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i>Leave Application &nbsp; &nbsp; <span class="glyphicon glyphicon-menu-down"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service">
                  <li><a href="#">View Leave Applications</a> </li>
                  <li>Check Status</li>
                  
                </ul>


                <li data-toggle="collapse" data-target="#new" class="collapsed">
                  <a href="#"><i class="fa fa-car fa-lg"></i> Comments/Complaints &nbsp; &nbsp; <span class="glyphicon glyphicon-menu-down"></span></a>
                </li>
                <ul class="sub-menu collapse" id="new">
                  <li><a href="#">View Comments</a></li>
				  <li><a data-toggle="modal" data-target="#myModal0">View Complaints</a></li>
                  <li>Check Status</li>
                  
                </ul>


                 <li>
                  <a href="#">
                  <i class="fa fa-user fa-lg"></i> <align="left-side">Update/View Profile</align> &nbsp; <span class="glyphicon glyphicon-upload"></span>
                  </a>
                  </li>

                 <li>
                  <a href="viewdocsform.php">
                  <i class="fa fa-users fa-lg"></i>View Fee Receipt &nbsp; <span class="glyphicon glyphicon-eye-open"></span> 
				  </a>
                </li>
				
				<li>
                  <a href="#">
                  <i class="fa fa-users fa-lg"></i>View Room Allotment &nbsp; <span class="glyphicon glyphicon-eye-open"></span>
                  </a>
                </li>
				
				<li>
                  <i class="fa fa-users fa-lg"></i> <a data-toggle="modal" data-target="#myModal5">Write Notice &nbsp; <span class="glyphicon glyphicon-pencil"></span>
                  </a>
                </li>
            </ul>
     </div>
</div>

   <!-- Modal --
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">-->
    
      <!-- Modal content--
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title"><strong>DETAILS</strong></h2>
        </div>
        <div class="modal-body">
          <p><center>
<div id="Comment">
<form class="form-horizontal">
<fieldset>-->

<!-- Form Name --
<legend>COMMENTS</legend>-->

<!-- Multiple Radios 
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Choose Wisely</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input name="radios" id="radios-0" type="radio" checked="checked" value="1">
      Complaint
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input name="radios" id="radios-1" type="radio" value="2">
      Comment
    </label>
	</div>
  </div>
</div>-->

<!-- Text input--
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Date</label>  
  <div class="col-md-4">
  <input name="textinput" class="form-control input-md" id="textinput" required="" type="text" placeholder="DD/MM/YYYY">
    
  </div>
</div>-->

<!-- Textarea --
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Comments</label>
  <div class="col-md-4">                     
    <textarea name="textarea" class="form-control" id="textarea"></textarea>
  </div>
</div>-->

<!-- Button 
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button name="Submit" class="btn btn-inverse" id="Submit1">Submit</button>
  </div>
</div>-->
<!--
</fieldset>
</form>
</div>
</center></p>
        </div>
        <div class="modal-footer">
		
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  -->
  <!-- Modal -->
  <div class="modal fade" id="myModal5" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title"><strong> NOTICE DETAILS</strong></h2>
        </div>
        <div class="modal-body">
          <p><center>
<div id="Comment">
<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>NOTICE</legend>

<!-- Multiple Radios 
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Choose Wisely</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input name="radios" id="radios-0" type="radio" checked="checked" value="1">
      Complaint
    </label>
	</div>
  <div class="radio">
    <label for="radios-1">
      <input name="radios" id="radios-1" type="radio" value="2">
      Comment
    </label>
	</div>
  </div>
</div>-->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Date:</label>  
  <div class="col-md-4">
  <input name="textinput" class="form-control input-md" id="textinput" required="" type="text" placeholder="DD/MM/YYYY">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea"> Write Notice:</label>
  <div class="col-md-4">                     
    <textarea name="textarea" class="form-control" id="textarea"></textarea>
  </div>
</div>

<!-- Button 
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button name="Submit" class="btn btn-inverse" id="Submit1">Submit</button>
  </div>
</div>-->

<!--</fieldset>
</form>
</div>
</center></p>
        </div>
        <div class="modal-footer">
		
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  -->
  
  <!--end--
   <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
	-->    
      <!-- Modal content--
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title"><strong>DETAILS</strong></h2>
        </div>
        <div class="modal-body">
          <p><center>
<form class="form-horizontal">
<fieldset>
-->

<!-- Form Name 
<legend>Missing Item</legend>-->

<!-- Textarea 
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Description</label>
  <div class="col-md-4">                     
    <textarea name="textarea" class="form-control" id="textarea"></textarea>
  </div>
</div>

<!-- Button 
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit3"></label>
  <div class="col-md-4">
    <button name="Submit3" class="btn btn-inverse" id="Submit3">Submit</button>
  </div>
</div>-->

<!--</fieldset>
</form>

</center></p>
        </div>
        <div class="modal-footer">
		
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
	</div>
  
  <div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">-->
    
      <!-- Modal content-
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h2 class="modal-title"><strong>DETAILS</strong></h2>
        </div>
        <div class="modal-body">
          <p><center>
<form class="form-horizontal">
<fieldset>-->

<!-- Form Name -
<legend>LEAVE APPLICATION</legend>->

<!-- Text input-
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Destination</label>  
  <div class="col-md-4">
  <input name="textinput" class="form-control input-md" id="textinput" required="" type="text" placeholder="">
    
  </div>
</div>-->

<!-- Textarea -
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Reason</label>
  <div class="col-md-4">                     
    <textarea name="textarea" class="form-control" id="textarea">Reason for leave</textarea>
  </div>
</div>-->

<!-- Text input-
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Duration</label>  
  <div class="col-md-4">
  <input name="textinput" class="form-control input-md" id="textinput" required="" type="text" placeholder="dd/mm/yy - dd/mm/yy">
    
  </div>
</div>-->

<!-- Button 
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton2"></label>
  <div class="col-md-4">
    <button name="singlebutton2" class="btn btn-inverse" id="Submit2">Submit</button>
  </div>
</div>-->

<!--</fieldset>
</form>-->

</center></p>
        </div>
        <div class="modal-footer">
		
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
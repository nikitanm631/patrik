<div class="top-bar">
  <div class="container">
    <div class="row">

      <div class="col-sm-8 text-center inline">
          <p> <i class="fa fa fa-certificate"></i> Certified Company</p>
          <p><i class="fa fa-envelope inline-fa"></i> <a href="mailto:info@example.com"></a>info@example.com </p>
          <p> <i class="fa fa-phone inline-fa"></i>  +91 123 456 7890 / +91 758 589 6458</p>

      </div>

      <div class="col-sm-4 text-center">
        <a href="#" class="btn btn-red">Get Quote</a>
      </div>

    </div>
  </div>
</div>
<!-- <div class="header-logo">
  <div class="container">
    <div class="row">
      <div class="col-sm-5">

      </div>
      <div class="col-sm-7">

      </div>
    </div>
  </div>
</div> -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">
      <!-- <img src="myimages/drlogo.png" alt="Dr. Pooja Vijay Multani" class="img-responsive"> -->
       <img src="myimages/logo.png" alt="" class="img-responsive">
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right mt-6">
        <li><a href="index.php">Home</a></li>

        <li><a href="about.php">About Us</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="crew.php">Crew Management</a></li>
            <li><a href="technical.php">Technical Management</a></li>
            <li><a href="offshore.php">Offshore Management</a></li>

          </ul>
        </li>
        <!-- <li><a href="services.php">Services</a></li> -->
        <li><a href="training.php">Training</a></li>
        <li><a href="" target="_blank">Blog</a></li>

        <li><a href="contact.php">Contact</a></li>
        <!-- <li><button type="button" class="btn btn-info btn-lg btn-theme" data-toggle="modal" data-target="#myModal">Appointment</button> </li> -->
      </ul>

    </div>
  </div>
</nav>

<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Reach us at any time !</h4>
      </div>
      <div class="modal-body">
        <form class="ctform" action="#" method="post">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name*" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email ID*" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <input type="text" name="phone" class="form-control" placeholder="Your Contact No.">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <div class="form-group">
                <textarea name="message" rows="4" cols="30" class="form-control" placeholder="Please write your query*" required></textarea>
              </div>
            </div>
          </div>

          <div class="form-group" style="text-align:center;">
            <input type="submit" name="submit" class="btn contact-btn" value="Submit">
          </div>
        </form>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>

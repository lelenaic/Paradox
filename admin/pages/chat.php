<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Chat</title>

  <!-- Prevent the demo from appearing in search engines (REMOVE THIS) -->
  <meta name="robots" content="noindex">

  <!-- Material Design Icons  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Roboto Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">

  <!-- Simplebar.js -->
  <link type="text/css" href="assets/vendor/simplebar.css" rel="stylesheet">

  <!-- App CSS -->
  <link type="text/css" href="assets/css/style.min.css" rel="stylesheet">

</head>

<body class="layout-container ls-top-navbar layout-sidebar-l3-md-up">

  <!-- Navbar -->
  <nav class="navbar navbar-light bg-white navbar-full navbar-fixed-top ls-left-sidebar">

    <!-- Sidebar toggle -->
    <button class="navbar-toggler pull-xs-left hidden-md-up" type="button" data-toggle="sidebar" data-target="#sidebarLeft"><span class="material-icons">menu</span></button>

    <!-- Brand -->
    <a class="navbar-brand first-child-md" href="index.html">Chat</a>

    <!-- Search -->
    <form class="form-inline pull-xs-left hidden-sm-down">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for...">
        <span class="input-group-btn"><button class="btn" type="button"><i class="material-icons">search</i></button></span>
      </div>
    </form>
    <!-- // END Search -->

    <!-- Menu -->
    <ul class="nav navbar-nav pull-xs-right hidden-md-down">

      <!-- Notifications dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-caret="false" data-toggle="dropdown" role="button" aria-haspopup="false"><i class="material-icons email">mail_outline</i></a>
        <ul class="dropdown-menu dropdown-menu-right notifications" aria-labelledby="Preview">
          <li class="dropdown-title">Emails</li>
          <li class="dropdown-item email-item">
            <a class="nav-link" href="index.html">
              <span class="media">
					<span class="media-left media-middle"><i class="material-icons">mail</i></span>
              <span class="media-body media-middle">
						<small class="pull-xs-right text-muted">12:20</small>
						<strong>Adrian Demian</strong>
						Enhance your website with
					</span>
              </span>
            </a>
          </li>
          <li class="dropdown-item email-item">
            <a class="nav-link" href="index.html">
              <span class="media">
					<span class="media-left media-middle">
						<i class="material-icons">mail</i>
					</span>
              <span class="media-body media-middle">
						<small class="text-muted pull-xs-right">30 min</small>
						<strong>Michael Brain</strong>
						Partnership proposal
					</span>
              </span>
            </a>
          </li>
          <li class="dropdown-item email-item">
            <a class="nav-link" href="index.html">
              <span class="media">
					<span class="media-left media-middle">
						<i class="material-icons">mail</i>
					</span>
              <span class="media-body media-middle">
						<small class="text-muted pull-xs-right">1 hr</small>
						<strong>Sammie Downey</strong>
						UI Design
					</span>
              </span>
            </a>
          </li>
          <li class="dropdown-action center">
            <a href="email.html">Go to inbox</a>
          </li>
        </ul>
      </li>
      <!-- // END Notifications dropdown -->

      <!-- User dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link active dropdown-toggle p-a-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false">
          <img src="assets/images/people/50/guy-6.jpg" alt="Avatar" class="img-circle" width="40">
        </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-menu-list" aria-labelledby="Preview">
          <a class="dropdown-item" href="#"><i class="material-icons md-18">lock</i> <span class="icon-text">Edit Account</span></a>
          <a class="dropdown-item" href="#"><i class="material-icons md-18">person</i> <span class="icon-text">Public Profile</span></a>
          <a class="dropdown-item" href="#">Logout</a>
        </div>
      </li>
      <!-- // END User dropdown -->

    </ul>
    <!-- // END Menu -->

    <!-- Chat Toggle -->
    <button class="navbar-toggler text-primary pull-xs-right hidden-lg-up" type="button" data-toggle="sidebar" data-target="#sidebarRight"><span class="material-icons">group</span></button>

  </nav>
  <!-- // END Navbar -->

  <!-- Sidebar -->
  <div class="sidebar sidebar-left sidebar-size-3 sidebar-visible-md-up sidebar-dark bg-primary" id="sidebarLeft" data-scrollable>

    <!-- Brand -->
    <a href="index.html" class="sidebar-brand sidebar-brand-border sidebar-brand-bg m-b-0">
      <i class="material-icons">control_point</i> AdminPlus
    </a>

    <!-- User -->
    <a href="user-profile.html" class="sidebar-link sidebar-user m-b-0">
      <img src="assets/images/people/110/guy-6.jpg" alt="user" class="img-circle"> Adrian Demian
    </a>
    <!-- // END User -->

    <!-- Menu -->
    <ul class="sidebar-menu sm-bordered sm-active-button-bg" data-toggle="sidebar-collapse">
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="index.html">
          <i class="sidebar-menu-icon material-icons">home</i> Dashboard
        </a>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="#">
          <i class="sidebar-menu-icon material-icons">view_compact</i> Layout Options
          <span class="sidebar-menu-label label label-default">5</span>
        </a>
        <ul class="sidebar-submenu">
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="index.html">Default</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="layout-fluid-sidebar-light.html">Sidebar Light</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="layout-fluid-sidebar-multiple.html">Multiple Sidebars</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="layout-fluid-navbar-colored.html">Navbar Colored</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="layout-fixed.html">Fixed Layout</a>
          </li>
        </ul>
      </li>
      <li class="sidebar-menu-item">
        <a class="sidebar-menu-button" href="#">
          <i class="sidebar-menu-icon material-icons">tune</i> UI Components
        </a>
        <ul class="sidebar-submenu">
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="ui-buttons.html">Buttons</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="ui-cards.html">Cards</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="ui-tabs.html">Tabs</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="ui-tree.html">Tree</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="ui-nestable.html">Nestable</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="ui-notifications.html">Notifications</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="ui-progress.html">Progress Bars</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="forms.html">Forms</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="ui-tables.html">Tables</span></a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button">Charts</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="calendar.html">Calendar</span></a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="maps.html">Filterable Map</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="maps-vector.html">Vector Maps</a>
          </li>
        </ul>
      </li>
      <li class="sidebar-menu-item open">
        <a class="sidebar-menu-button" href="#">
          <i class="sidebar-menu-icon material-icons">assignment</i> <span>Pages</span>
        </a>
        <ul class="sidebar-submenu">
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="appointments.html">Appointments</a>
          </li>
          <li class="sidebar-menu-item active">
            <a class="sidebar-menu-button" href="chat.html">Chat</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="invoice.html">Invoice</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="learning-dashboard.html">Learning Dashboard</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="learning-course.html">Learning Course</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="notes.html">Notes</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="property.html">Property</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="tickets.html">Tickets</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="timeline.html">Timeline</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="email.html">Email</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="user-profile.html">User Profile</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="reports.html">Reports</a>
          </li>
          <li class="sidebar-menu-item">
            <a class="sidebar-menu-button" href="login-signup.html">Login / Sign Up</a>
          </li>
        </ul>
      </li>
    </ul>
    <!-- // END Menu -->

    <!-- Activity -->
    <div class="sidebar-heading">Activity</div>
    <ul class="sidebar-activity">
      <li class="media active">
        <div class="media-left">
          <div class="sidebar-activity-icon">
            <i class="material-icons">mail</i>
          </div>
        </div>
        <div class="media-body">
          <a href="#">Adrian Demian</a> posted a new <a href="#">#Design</a>
          <small>10 days ago</small>
        </div>
      </li>
      <li class="media">
        <div class="media-left">
          <div class="sidebar-activity-icon">
            <i class="material-icons">today</i>
          </div>
        </div>
        <div class="media-body">
          <a href="#">Andrew Brain</a> completed his <a href="#">#work</a>
          <small>10 days ago</small>
        </div>
      </li>
      <li class="media">
        <div class="media-left">
          <div class="sidebar-activity-icon">
            <i class="material-icons">person</i>
          </div>
        </div>
        <div class="media-body">
          <a href="#">John Donahue</a> set a new <a href="#">#trend</a>
          <small>10 days ago</small>
        </div>
      </li>
    </ul>
    <!-- // END Activity -->

    <!-- Stats -->
    <div class="sidebar-stats">
      <div class="sidebar-stats-lead text-primary">
        <span>410</span>
        <small class="text-success">
          <i class="material-icons md-middle">arrow_upward</i>
          <span class="icon-text">3.4%</span>
        </small>
      </div>
      <small>TOTAL ORDERS</small>
    </div>
    <!-- // END Stats -->

  </div>
  <!-- // END Sidebar -->

  <!-- Right Sidebars -->

  <!-- Sidebar -->
  <div class="sidebar sidebar-light bg-white ls-top-navbar-xs-up" id="sidebarRight" data-position="right" data-scrollable>

    <!-- Sidebar Messages -->
    <div class="sidebar-heading sidebar-p-t">Online</div>
    <ul class="list-group list-group-fit">
      <li class="list-group-item">
        <a href="#">
          <span class="media">
				<span class="media-left">
					<img src="assets/images/people/50/guy-8.jpg" alt="" class="img-circle" width="35">
				</span>
          <span class="media-body media-middle">Andrew Brain</span>
          </span>
        </a>
      </li>
      <li class="list-group-item">
        <a href="#">
          <span class="media">
				<span class="media-left">
					<img src="assets/images/people/50/guy-2.jpg" alt="" class="img-circle" width="35">
				</span>
          <span class="media-body media-middle">Jimmy Carter</span>
          </span>
        </a>
      </li>
      <li class="list-group-item active">
        <a href="#">
          <span class="media">
				<span class="media-left">
					<img src="assets/images/people/50/woman-5.jpg" alt="" class="img-circle" width="35">
				</span>
          <span class="media-body media-middle">Michelle Smith</span>
          </span>
        </a>
      </li>
      <li class="list-group-item">
        <a href="#">
          <span class="media">
				<span class="media-left">
					<img src="assets/images/people/50/woman-2.jpg" alt="" class="img-circle" width="35">
				</span>
          <span class="media-body media-middle">Samantha Doe</span>
          </span>
        </a>
      </li>
    </ul>
    <p class="text-muted">
      <small>21 OFFLINE</small>
    </p>
    <!-- // END Sidebar Messages -->

  </div>
  <!-- // END Sidebar -->

  <!-- Content -->
  <div class="layout-content" data-scrollable>
    <div class="container-fluid">

      <div id="chat">
        <div class="jumbotron hidden-md-down">
          <div class="media">
            <div class="media-left">
              <img src="assets/images/people/110/woman-5.jpg" alt="" class="img-circle" width="80">
            </div>
            <div class="media-body media-middle">
              <h4 class="m-b-0">Michelle Smith</h4>
              <p class="text-muted m-b-0">Close Friends</p>
            </div>
          </div>
        </div>
        <ul class="media-list">
          <li class="media">
            <div class="media-left">
              <a href="">
                <img src="assets/images/people/110/woman-5.jpg" alt="" class="img-circle" width="40">
              </a>
            </div>
            <div class="media-body">
              <div class="card">
                <div class="card-block-half">
                  <small class="text-muted pull-xs-right">10 days ago</small>
                  <a href="#">Michelle</a>
                  <small class="text-muted">wrote:</small>
                  <p class="m-b-0">Superb job.. Clients loved the new design.</p>
                </div>
              </div>
            </div>
          </li>
          <li class="media">
            <div class="media-left">
              <a href="">
                <img src="assets/images/people/110/guy-6.jpg" alt="" class="img-circle" width="40">
              </a>
            </div>
            <div class="media-body">
              <div class="card">
                <div class="card-block-half">
                  <small class="text-muted pull-xs-right">5 days ago</small>
                  <a href="#">You</a>
                  <small class="text-muted">wrote:</small>
                  <p class="m-b-0">Glad it all worked out.</p>
                </div>
              </div>
            </div>
          </li>
          <li class="media">
            <div class="media-left">
              <a href="">
                <img src="assets/images/people/110/woman-5.jpg" alt="" class="img-circle" width="40">
              </a>
            </div>
            <div class="media-body">
              <div class="card">
                <div class="card-block-half">
                  <small class="text-muted pull-xs-right">1 day ago</small>
                  <a href="#">Michelle</a>
                  <small class="text-muted">wrote:</small>
                  <p class="m-b-0">Was looking for you...</p>
                </div>
              </div>
            </div>
          </li>
          <li class="media">
            <div class="media-left">
              <a href="">
                <img src="assets/images/people/110/woman-5.jpg" alt="" class="img-circle" width="40">
              </a>
            </div>
            <div class="media-body">
              <div class="card">
                <div class="card-block-half">
                  <small class="text-muted pull-xs-right">1 day ago</small>
                  <a href="#">Michelle</a>
                  <small class="text-muted">wrote:</small>
                  <p class="m-b-0">Was looking for you...</p>
                </div>
              </div>
            </div>
          </li>
          <li class="media">
            <div class="media-left">
              <a href="">
                <img src="assets/images/people/110/woman-5.jpg" alt="" class="img-circle" width="40">
              </a>
            </div>
            <div class="media-body">
              <div class="card">
                <div class="card-block-half">
                  <small class="text-muted pull-xs-right">1 day ago</small>
                  <a href="#">Michelle</a>
                  <small class="text-muted">wrote:</small>
                  <p class="m-b-0">Was looking for you...</p>
                </div>
              </div>
            </div>
          </li>
          <li class="media">
            <div class="media-left">
              <a href="">
                <img src="assets/images/people/110/woman-5.jpg" alt="" class="img-circle" width="40">
              </a>
            </div>
            <div class="media-body">
              <div class="card">
                <div class="card-block-half">
                  <small class="text-muted pull-xs-right">1 day ago</small>
                  <a href="#">Michelle</a>
                  <small class="text-muted">wrote:</small>
                  <p class="m-b-0">Was looking for you...</p>
                </div>
              </div>
            </div>
          </li>
          <li class="media">
            <div class="media-left">
              <a href="">
                <img src="assets/images/people/110/woman-5.jpg" alt="" class="img-circle" width="40">
              </a>
            </div>
            <div class="media-body">
              <div class="card">
                <div class="card-block-half">
                  <small class="text-muted pull-xs-right">1 day ago</small>
                  <a href="#">Michelle</a>
                  <small class="text-muted">wrote:</small>
                  <p class="m-b-0">Was looking for you...</p>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <div class="reply ls-right-sidebar ls-left-sidebar">
          <input class="form-control" rows="3" placeholder="Reply to Michelle">
        </div>
      </div>

    </div>
  </div>

  <!-- jQuery -->
  <script src="assets/vendor/jquery.min.js"></script>

  <!-- Bootstrap -->
  <script src="assets/vendor/tether.min.js"></script>
  <script src="assets/vendor/bootstrap.min.js"></script>

  <!-- Simplebar.js -->
  <script src="assets/vendor/simplebar.min.js"></script>

  <!-- Bootstrap Layout -->
  <script src="assets/vendor/bootstrap-layout.js"></script>

  <!-- Bootstrap Layout Scrollable Extension JS -->
  <script src="assets/vendor/bootstrap-layout-scrollable.js"></script>

</body>

</html>
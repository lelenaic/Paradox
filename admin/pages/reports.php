<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Reports</title>

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

  <!-- Vendor CSS -->
  <link rel="stylesheet" href="examples/css/morris.min.css">
  <link rel="stylesheet" href="examples/css/bootstrap-datepicker.min.css">

</head>

<body class="layout-container ls-top-navbar layout-sidebar-l3-md-up">

  <!-- Navbar -->
  <nav class="navbar navbar-full navbar-fixed-top navbar-light bg-white ls-left-sidebar">

    <!-- Sidebar toggle -->
    <button class="navbar-toggler pull-xs-left hidden-lg-up" type="button" data-toggle="sidebar" data-target="#sidebarLeft"><span class="material-icons">menu</span></button>

    <!-- Navbar toggle -->
    <button class="navbar-toggler hidden-md-up pull-xs-right" type="button" data-toggle="collapse" data-target="#navbarMenu" aria-expanded="true"><span class="material-icons">menu</span></button>

    <!-- Brand -->
    <a class="navbar-brand first-child-lg" href="index.html">Reports</a>

    <!-- Collapse -->
    <div class="collapse navbar-toggleable-xs" id="navbarMenu">

      <!-- Menu -->
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Dashboard</a>
        </li>
        <li class="nav-item dropdown active">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
          <div class="dropdown-menu dropdown-menu-list" aria-labelledby="Preview">
            <a class="dropdown-item" href="appointments.html">
              <i class="material-icons md-18">today</i> <span class="icon-text">Appointments</span>
            </a>
            <a class="dropdown-item" href="chat.html">
              <i class="material-icons md-18">comment</i> <span class="icon-text">Chat</span>
            </a>
            <a class="dropdown-item" href="invoice.html">
              <i class="material-icons md-18">receipt</i> <span class="icon-text">Invoice</span>
            </a>
            <a class="dropdown-item" href="learning-dashboard.html">
              <i class="material-icons md-18">school</i> <span class="icon-text">Learning</span>
            </a>
            <a class="dropdown-item" href="notes.html">
              <i class="material-icons md-18">edit</i> <span class="icon-text">Notes</span>
            </a>
            <a class="dropdown-item" href="property.html">
              <i class="material-icons md-18">map</i> <span class="icon-text">Property</span>
            </a>
            <a class="dropdown-item" href="tickets.html">
              <i class="material-icons md-18">dns</i> <span class="icon-text">Tickets</span>
            </a>
            <a class="dropdown-item" href="timeline.html">
              <i class="material-icons md-18">dashboard</i> <span class="icon-text">Timeline</span>
            </a>
            <a class="dropdown-item" href="email.html">
              <i class="material-icons md-18">mail</i> <span class="icon-text">Email</span>
            </a>
            <a class="dropdown-item" href="user-profile.html">
              <i class="material-icons md-18">person</i> <span class="icon-text">Profile</span>
            </a>
            <a class="dropdown-item active" href="reports.html">
              <i class="material-icons md-18">assessment</i> <span class="icon-text">Reports</span>
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown">Components</a>
          <div class="dropdown-menu dropdown-menu-list" aria-labelledby="Preview">
            <a href="ui-buttons.html" class="dropdown-item">Buttons</a>
            <a href="ui-cards.html" class="dropdown-item">Cards</a>
            <a href="ui-tabs.html" class="dropdown-item">Tabs</a>
            <a href="ui-tree.html" class="dropdown-item">Tree</a>
            <a href="ui-nestable.html" class="dropdown-item">Nestable</a>
            <a href="ui-notifications.html" class="dropdown-item">Notifications</a>
            <a href="forms.html" class="dropdown-item">Forms</a>
            <a href="ui-tables.html" class="dropdown-item">Tables</a>
            <a href="charts.html" class="dropdown-item">Charts</a>
            <a href="calendar.html" class="dropdown-item">Calendar</a>
            <a href="maps.html" class="dropdown-item">Filterable Map</a>
            <a href="maps-vector.html" class="dropdown-item">Vector Maps</a>
          </div>
        </li>
      </ul>
      <!-- // END Menu -->

    </div>
    <!-- // END Collapse -->

  </nav>
  <!-- // END Navbar -->

  <!-- Sidebar -->
  <div class="sidebar sidebar-left sidebar-size-3 sidebar-visible-md-up sidebar-light bg-white" id="sidebarLeft" data-scrollable>

    <!-- Brand -->
    <a href="index.html" class="sidebar-brand sidebar-brand-border sidebar-brand-bg m-b-0">
      <i class="material-icons">control_point</i> AdminPlus
    </a>

    <!-- Form -->
    <form class="sidebar-block">
      <div class="sidebar-heading sidebar-p-y">Type</div>
      <div class="form-group">
        <select class="c-select">
          <option selected>Select One</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
        </select>
      </div>

      <div class="sidebar-heading sidebar-p-b">Choose</div>
      <div class="form-group">
        <div class="c-inputs-stacked">
          <label class="c-input c-checkbox">
            <input type="checkbox">
            <span class="c-indicator"></span> Sales
          </label>
          <label class="c-input c-checkbox">
            <input type="checkbox">
            <span class="c-indicator"></span> Customers
          </label>
          <label class="c-input c-checkbox">
            <input type="checkbox">
            <span class="c-indicator"></span> Expenses
          </label>
          <label class="c-input c-checkbox">
            <input type="checkbox" checked>
            <span class="c-indicator"></span> Extras
          </label>
          <label class="c-input c-checkbox">
            <input type="checkbox" checked>
            <span class="c-indicator"></span> Links
          </label>
        </div>
      </div>

      <div class="sidebar-heading sidebar-p-b">Price</div>
      <div class="form-group">
        <input id="touch-spin-2" data-toggle="touch-spin" data-min="-1000000" data-max="1000000" data-step="50" type="text" value="200" name="demo2" class="form-control" />
      </div>

      <div class="sidebar-heading sidebar-p-b">Date</div>
      <div class="form-group">
        <input class="datepicker form-control" type="text" value="01/28/2016" />
      </div>
      <div class="form-group">
        <a href="#" class="btn btn-primary btn-block btn-rounded-deep"> Update</a>
      </div>
    </form>
    <!-- // END Form -->

  </div>
  <!-- // END Sidebar -->

  <!-- Right Sidebars -->

  <!-- Content -->
  <div class="layout-content" data-scrollable>
    <div class="container-fluid">

      <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">Reports</li>
      </ol>
      <div class="card card-block">
        <div id="bar" style="height: 300px;"></div>
      </div>
      <div class="card">
        <div class="card-header bg-white">
          <div class="media o-visible">
            <div class="media-body media-middle">
              <h5 class="card-title">Total <span class="text-primary">$19,239</span></h5>
            </div>
            <div class="media-right media-middle">
              <a href="#" class="btn btn-primary-outline btn-sm"><i class="material-icons">add</i> <span class="icon-text">ADD</span></a>
            </div>
          </div>
        </div>
        <table class="table table-striped table-sm m-b-0">
          <thead>
            <tr class="text-uppercase small">
              <th class="center" style="width:80px">Type</th>
              <th>Information</th>
              <th class="center" style="width:130px">Expense</th>
              <th class="center" style="width:130px">Income</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="center vertical-middle">
                <i class="material-icons md-36 text-muted">assistant</i>
              </td>
              <td>
                Kneee Injury
                <div class="text-muted small">06 JAN 2015</div>
              </td>
              <td class="center vertical-middle">
                <span class="text-orange bold">&dollar;1,234</span>
              </td>
              <td class="center vertical-middle">
                <i class="material-icons text-muted-light">remove</i>
              </td>
            </tr>
            <tr class="active">
              <td class="center vertical-middle">
                <i class="material-icons md-36 text-muted">movie_creation</i>
              </td>
              <td>
                Sold TV
                <div class="text-muted small">02 JAN 2015</div>
              </td>
              <td class="center vertical-middle">
                <i class="material-icons text-muted-light">remove</i>
              </td>
              <td class="center vertical-middle">
                <span class="text-green bold">&dollar;2,521</span>
              </td>
            </tr>
            <tr>
              <td class="center vertical-middle">
                <i class="material-icons md-36 text-muted">portrait</i>
              </td>
              <td>
                Receive from Adrian
                <div class="text-muted small">23 DEC 2014</div>
              </td>
              <td class="center vertical-middle">
                <span class="text-orange bold">&dollar;3,875</span>
              </td>
              <td class="center vertical-middle">
                <i class="material-icons text-muted-light">remove</i>
              </td>
            </tr>
            <tr>
              <td class="center vertical-middle">
                <i class="material-icons md-36 text-muted">account_balance_wallet</i>
              </td>
              <td>
                Lake House Sale
                <div class="text-muted small">21 DEC 2014</div>
              </td>
              <td class="center vertical-middle">
                <i class="material-icons text-muted-light">remove</i>
              </td>
              <td class="center vertical-middle">
                <span class="text-green bold">
						&dollar;123,234
					</span>
              </td>
            </tr>
            <tr>
              <td class="center vertical-middle">
                <i class="material-icons md-36 text-muted">today</i>
              </td>
              <td>
                December Wages
                <div class="text-muted small">18 DEC 2014</div>
              </td>
              <td class="center vertical-middle">
                <i class="material-icons text-muted-light">remove</i>
              </td>
              <td class="center vertical-middle">
                <span class="text-green bold">&dollar;19,281</span>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="card-footer card-pagination center">
          <ul class="pagination">
            <li class="page-item disabled">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
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

  <!-- Theme Colors -->
  <script src="assets/js/colors.js"></script>

  <!-- CHART -->
  <script src="assets/vendor/raphael.min.js"></script>
  <script src="assets/vendor/morris.min.js"></script>

  <!-- FORMS -->
  <script src="assets/vendor/jquery.bootstrap-touchspin.js"></script>
  <script src="assets/vendor/bootstrap-datepicker.min.js"></script>

  <!-- Init -->
  <script src="examples/js/chart.js"></script>
  <script src="examples/js/date-time.js"></script>
  <script src="examples/js/touchspin.js"></script>

</body>

</html>
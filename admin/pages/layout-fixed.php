<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Fixed Layout</title>

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

  <!-- Charts CSS -->
  <link rel="stylesheet" href="examples/css/morris.min.css">

</head>

<body class="layout-container ls-top-navbar">
  <!-- Navbar -->
  <nav class="navbar navbar-dark bg-primary navbar-full navbar-fixed-top">
    <div class="container">

      <!-- Navbar toggle -->
      <button class="navbar-toggler hidden-md-up pull-xs-right" type="button" data-toggle="collapse" data-target="#navbarMenu"><span class="material-icons">menu</span></button>

      <!-- Brand -->
      <a class="navbar-brand" href="index.html">AdminPlus</a>

      <!-- Collapse -->
      <div class="collapse navbar-toggleable-xs" id="navbarMenu">
        <ul class="nav navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">Admin</a>
          </li>
        </ul>
      </div>
      <!-- // END Collapse -->

      <!-- Menu -->
      <ul class="nav navbar-nav pull-xs-right hidden-sm-down">

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

    </div>
  </nav>
  <!-- // END Navbar -->

  <div class="layout-content" data-scrollable>
    <div class="container">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="#">Dashboard</a></li>
        <li class="active">Data</li>
      </ol>

      <!-- Row -->
      <div class="row">

        <!-- Column -->
        <div class="col-lg-4">
          <div class="card-primary m-b-1">
            <div class="card-block center">
              <h5 class="card-title">Volume Trend</h5>
              <p class="card-subtitle">340 Highest</p>
              <!-- <div id="line1" style="height: 130px; margin:0 -10px;"></div> -->
              <canvas id="barChart" height="130"></canvas>
              <div class="clearfix"></div>
              <a href="#" class="btn btn-primary btn-rounded-deep btn-sm">More Details</a>
            </div>
          </div>
        </div>
        <!-- // END Column -->

        <!-- Column -->
        <div class="col-lg-4">
          <div class="card">
            <div class="card-button-wrapper">
              <a href="#" class="card-button"><i class="material-icons">settings</i></a>
            </div>
            <div class="card-block center">
              <h5 class="card-title">Receipts</h5>
              <p class="card-subtitle">482 Prescribed</p>
              <!-- <div id="bar2" style="height: 130px; margin:0 -10px;"></div> -->
              <canvas id="lineChart" height="135"></canvas>
              <a href="#" class="btn btn-primary btn-rounded-deep btn-sm">View Report</a>
            </div>
          </div>
        </div>
        <!-- // END Column -->

        <!-- Column -->
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header bg-white center">
              <h5 class="card-title">Top Member</h5>
              <p class="card-subtitle m-b-0">Adrian Demian</p>
            </div>
            <table class="table table-sm m-b-0">
              <tr>
                <td><i class="material-icons text-primary">person</i> <span class="icon-text"><a href="#">Adrian Demian</a></span></td>
                <td class="right">
                  <div class="label label-primary">49</div>
                </td>
                <td class="right" width="1"><a href="#" class="btn btn-xs btn-white"><i class="material-icons md-18">chevron_right</i></a></td>
              </tr>
              <tr>
                <td class="text-muted"><i class="material-icons text-muted">person</i> <span class="icon-text">Michelle Smith</span></td>
                <td class="right">
                  <div class="label label-default">24</div>
                </td>
                <td class="right" width="1"><a href="#" class="btn btn-xs btn-white"><i class="material-icons md-18">chevron_right</i></a></td>
              </tr>

              <tr>
                <td class="text-muted"><i class="material-icons text-muted">person</i> <span class="icon-text">Jonny Clint</span></td>
                <td class="right">
                  <div class="label label-default">16</div>
                </td>
                <td class="right" width="1"><a href="#" class="btn btn-xs btn-white"><i class="material-icons md-18">chevron_right</i></a></td>
              </tr>
              <tr>
                <td class="text-muted"><i class="material-icons text-muted">person</i> <span class="icon-text">Andrew Brain</span></td>
                <td class="right">
                  <div class="label label-default">13</div>
                </td>
                <td class="right" width="1"><a href="#" class="btn btn-xs btn-white"><i class="material-icons md-18">chevron_right</i></a></td>
              </tr>
              <tr>
                <td class="text-muted"><i class="material-icons text-muted">person</i> <span class="icon-text">Bill Carter</span></td>
                <td class="right">
                  <div class="label label-default">5</div>
                </td>
                <td class="right"><a href="#" class="btn btn-xs btn-white"><i class="material-icons md-18">chevron_right</i></a></td>
              </tr>
              <tr>
                <td class="text-muted"><i class="material-icons text-muted">person</i> <span class="icon-text">Sammy Jones</span></td>
                <td class="right">
                  <div class="label label-default">1</div>
                </td>
                <td class="right"><a href="#" class="btn btn-xs btn-white"><i class="material-icons md-18">chevron_right</i></a></td>
              </tr>
            </table>
          </div>
        </div>
        <!-- // END Column -->

      </div>
      <!-- // END Row -->

      <!-- Row -->
      <div class="row">

        <!-- Column -->
        <div class="col-md-6">
          <div class="card">
            <div class="card-block">
              <p class="text-muted pull-xs-right">5 of 10</p>
              <h5 class="m-b-1"><i class="material-icons">list</i> <span class="icon-text">Tasks</span></h5>
              <progress class="progress progress-animated progress-primary m-a-0" value="50" max="100">50%
              </progress>
            </div>
          </div>
        </div>
        <!-- // END Column -->

        <!-- Column -->
        <div class="col-md-6">
          <div class="card-primary">
            <div class="card-block">
              <i class="material-icons pull-xs-right md-48">group</i>
              <h5 class="m-b-0">$12,129</h5>
              <p class="m-a-0">Sales by Reps</p>
            </div>
          </div>
        </div>
        <!-- // END Column -->

      </div>
      <!-- // END Row -->

      <!-- Row -->
      <div class="row">

        <!-- Column -->
        <div class="col-md-8">
          <div class="card">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" id="history-tab" data-toggle="tab" href="#history">
                  <i class="material-icons">schedule</i> <span class="icon-text">History</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="customers-tab" data-toggle="tab" href="#customers">
                  <i class="material-icons">person_add</i> <span class="icon-text">Sign Ups</span>
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane fade in active" id="history">
                <ul class="list-group list-group-fit">
                  <li class="list-group-item">
                    <div class="media">
                      <div class="media-left media-middle">
                        <i class="material-icons md-36 text-muted">receipt</i>
                      </div>
                      <div class="media-body">
                        <p class="m-a-0">
                          <a href="#">Sam</a> added a new invoice <a href="#">#9591</a>
                        </p>
                        <small class="text-muted">
                          <i class="material-icons md-18">timer</i> <span class="icon-text">5 hrs ago</span>
                        </small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="media-left media-middle">
                        <i class="material-icons md-36 text-muted">dns</i>
                      </div>
                      <div class="media-body">
                        <p class="m-a-0">
                          <a href="#">John</a> created a new <a href="#">task</a>
                        </p>
                        <small class="text-muted">
                          <i class="material-icons md-18">today</i> <span class="icon-text">1 day ago</span>
                        </small>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <div class="media">
                      <div class="media-left media-middle">
                        <i class="material-icons md-36 text-muted">group</i>
                      </div>
                      <div class="media-body">
                        <p class="m-a-0">
                          <a href="#">Partick</a> added <a href="#">Sam</a> are now friends.
                        </p>
                        <small class="text-muted">
                          <i class="material-icons md-18">today</i> <span class="icon-text">2 days ago</span>
                        </small>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="tab-pane" id="customers">
                <table class="table  m-b-0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Company</th>
                      <th width="120" class="center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="#"> Derek S.</a></td>
                      <td>Reel Ltd.</td>
                      <td class="text-xs-center">
                        <a href="#" class="btn btn-white btn-sm">
                          <i class="material-icons md-18">edit</i>
                        </a>
                        <a href="#" class="btn btn-white btn-sm">
                          <i class="material-icons md-18">email</i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="#"> Paul M.</a></td>
                      <td>Places Ltd.</td>
                      <td class="text-xs-center">
                        <a href="#" class="btn btn-white btn-sm">
                          <i class="material-icons md-18">edit</i>
                        </a>
                        <a href="#" class="btn btn-white btn-sm">
                          <i class="material-icons md-18">email</i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="#"> John D.</a></td>
                      <td>Woot Ltd.</td>
                      <td class="text-xs-center">
                        <a href="#" class="btn btn-white btn-sm">
                          <i class="material-icons md-18">edit</i>
                        </a>
                        <a href="#" class="btn btn-white btn-sm">
                          <i class="material-icons md-18">email</i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="#">Amy T.</a></td>
                      <td>Scoop Ltd.</td>
                      <td class="text-xs-center">
                        <a href="#" class="btn btn-white btn-sm">
                          <i class="material-icons md-18">edit</i>
                        </a>
                        <a href="#" class="btn btn-white btn-sm">
                          <i class="material-icons md-18">email</i>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-button-wrapper">
              <div class="dropdown">
                <a href="#" class="card-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="material-icons">more_vert</i></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div>
            <div class="card-block">
              <h5 class="card-title">Current Stats</h5>
              <p class="card-subtitle">Quick summary of this month's activity</p>

              <div id="stats" style="height:240px;"></div>
            </div>
          </div>

        </div>
        <!-- // END Column -->

        <!-- Column -->
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-white">
              <div class="media">
                <div class="media-body">
                  <h5 class="card-title">My Staff</h5>
                  <p class="card-subtitle">December 2015</p>
                </div>
                <div class="media-right media-middle">
                  <a href="#" class="btn btn-circle btn-white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="material-icons">add</i></a>
                </div>
              </div>
            </div>
            <table class="table table-md m-a-0">
              <tr>
                <td>
                  <a href="#">Sam Donahue </a>
                </td>
                <td class="right">
                  <span class="label label-success">$12,571</span>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="#">Adrian Demian</a>
                </td>
                <td class="right">
                  <span class="label label-default">$11,953</span>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="#">Jeff Gavin</a>
                </td>
                <td class="right">
                  <span class="label label-default">$6,631</span>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="#">Michelle Smith</a>
                </td>
                <td class="right">
                  <span class="label label-danger">$3,278</span>
                </td>
              </tr>
            </table>
          </div>
          <div class="card card-stats-primary">
            <div class="card-block">
              <p class="pull-xs-right text-primary">
                <strong>70%</strong>
              </p>
              <h5 class="m-b-1">Performance</h5>
              <progress class="progress progress-primary progress-animated m-a-0" value="70" max="100">70%</progress>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <div class="media">
                <div class="media-body media-middle">
                  <h5 class="card-title m-b-0">Todo's</h5>
                </div>
                <div class="media-right media-middle">
                  <a href="#" class="btn btn-white">
                    <i class="material-icons">add</i> <span class="icon-text">Add</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="card-block">
              <div class="c-inputs-stacked">
                <label class="c-input c-checkbox">
                  <input type="checkbox">
                  <span class="c-indicator"></span> Admin Plus in Ruby on Rails
                </label>
                <label class="c-input c-checkbox">
                  <input type="checkbox">
                  <span class="c-indicator"></span> Create a Map UI
                </label>
                <label class="c-input c-checkbox">
                  <input type="checkbox">
                  <span class="c-indicator"></span> Extend Timeline with Chat
                </label>
                <label class="c-input c-checkbox">
                  <input type="checkbox" checked>
                  <span class="c-indicator"></span> Extend Timeline with Chat
                </label>
                <label class="c-input c-checkbox">
                  <input type="checkbox" checked>
                  <span class="c-indicator"></span> Refactor Spacings
                </label>
              </div>
            </div>
            <div class="card-footer">
              <div class="pull-right">
                <a href="#">Completed <span class="text-muted">(24)</span></a>
              </div>
              Pending (3)
            </div>
          </div>
        </div>
        <!-- // END Column -->

      </div>
      <!-- // END Row -->

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

  <!-- Charts JS -->
  <script src="assets/vendor/raphael.min.js"></script>
  <script src="assets/vendor/morris.min.js"></script>

  <!-- ChartJS -->
  <script src="assets/vendor/Chart.min.js"></script>

  <!-- Init -->
  <script src="examples/js/chart.js"></script>
  <script src="examples/js/chartjs.js"></script>

</body>

</html>
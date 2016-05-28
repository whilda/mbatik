<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="icon" href="../resources/image/logo.ico">
    <title>
    	@yield('title')
    </title>

    <!-- Bootstrap core CSS -->
    <link href="../resources/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../resources/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../resources/assets/css/dashboard.css" rel="stylesheet">
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/flick/jquery-ui.css" rel="stylesheet" type="text/css" >
	<link href="../resources/assets/css/jquery.tagit.css" rel="stylesheet" type="text/css">
	<link href="../resources/assets/css/tagit.ui-zendesk.css" rel="stylesheet" type="text/css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../resources/assets/js/ie-emulation-modes-warning.js"></script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="./">
          	<img src="../resources/image/simple_edited.png" style="height: 50px;"/>
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li @yield('overview')><a href="./"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span> Overview</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</a></li>
          </ul>
          <ul class="nav nav-sidebar">
          	<li @yield('vendor')><a href="./vendor"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Vendor</a></li>
          	<li @yield('type')><a href="./type"><span class="glyphicon glyphicon-th-list" aria-hidden="true"></span> Type</a></li>
          	<li @yield('material')><a href="./material"><span class="glyphicon glyphicon-tree-conifer" aria-hidden="true"></span> Material</a></li>
            <li @yield('item')><a href="./item"><span class="glyphicon glyphicon-tags" aria-hidden="true"></span> Item</a></li>
            <li @yield('stock')><a href="./stock"><span class="glyphicon glyphicon-book" aria-hidden="true"></span> Stock</a></li>
            <li @yield('transaction')><a href="./transaction"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Transaction</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          	@yield('content')
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="../resources/assets/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../resources/assets/js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../resources/assets/js/ie10-viewport-bug-workaround.js"></script>
	
    <!-- App JavaScript
    ================================================== -->
    <script src="../resources/assets/js/dashboard.js"></script>
    <script src="../resources/assets/js/tag-it.min.js" type="text/javascript" charset="utf-8"></script>
    @yield('script')
  </body>
</html>

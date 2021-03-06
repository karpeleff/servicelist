<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Service List</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Service List</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a href="/service">Main</a></li>
              <li><a href="/add">New task</a></li>
              <li><a href="/onwork">On Work</a></li>
            <li><a href="/done">Done</a></li>
              <li><a href="/allout">Out</a></li>
              <li><a href="/search">Search</a></li>


            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Storage
                <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li><a href="/allcomponents">AllComponents</a></li>
                <li><a href="/storecomponent">AddComponent</a></li>
                <li><a href="/searchcomponent">SearchComponent</a></li>
              </ul>
            </li>

          
     <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Notes
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/allnotes">All</a></li>
          <li><a href="/addnote">Add</a></li>
          <li><a href="/searchnotes">Search</a></li>
        </ul>
      </li>
          
           </ul>  
          
     
        </div><!--/.nav-collapse -->
      </div>
    </nav>


 <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">


        <div class="container-fluid">
        <div class="row"> 
 <main  class="col-md-8">

  @yield('content') 
 </main>
   <aside id="" class="col-md-4">

 <div class="panel panel-primary">
<div class="panel-heading">
Модуль статистики : Заказы 
</div>
<div class="panel-body">

Новые: {{$count[1]}}
<br>
В работе: {{$count[0]}}
<br>
Готово:  {{$count[2]}}
<br>
Выдано: {{$count[3]}}
</div>

</div>
</aside>
 
  
    </div>
    </div>

</div>
</div>
<!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
 
    
    
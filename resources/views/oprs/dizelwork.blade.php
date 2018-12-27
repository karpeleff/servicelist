
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
      
        <title></title>

        <link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="./css/prettify-1.0.css" rel="stylesheet">
        <link href="./css/base.css" rel="stylesheet">
        <link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
		<script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        
        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
        
        
        <script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
        
        
        
        
        
    </head>

    <body>

        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">

        <!-- Collapsed navigation -->
     <form action="/dizelwork" method="post"  >
     
      {{csrf_field()}}
     
        <div class="container">
	
				<div class="col-md-9" role="main">


  <div class="row">
                                        <div class='col-sm-6'>
                                        <label for="">Выбор ДГУ</label>
                                                <select class="form-control" name="diztype" id="sel1">
                                                        <option>
                                                                ADR16.5
                                                        </option>
                                                        <option>
                                                                SD6000E
                                                        </option>
                                                </select>
                                        </div>
                                </div>


								<div class="row">
                                        <div class='col-sm-6'>
                                        <label for="">Тип запуска</label>
                                                <select class="form-control"   name="starttype" id="sel2">
                                                        <option>
                                                                ОТКЛ.ПРОМСЕТЬ
                                                        </option>
                                                        <option>
                                                                КОНТР.ПУСК
                                                        </option>
                                                </select>
                                        </div>
                                </div>
								
								
								
								



    <div class="row">
        <div class='col-sm-6'>
		
		<label for="">Время запуска</label>
            <div class="form-group">
                <div class='input-group date' id='2'>
                    <input type='text' class="form-control" name="start"  />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#2').datetimepicker({
                    locale: 'ru'
                });
            });
        </script>
    </div>

	
	
	  <div class="row">
        <div class='col-sm-6'>
		
		<label for="">Время останова</label>
            <div class="form-group">
                <div class='input-group date' id='3'>
                    <input type='text' class="form-control"  name="stop" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#3').datetimepicker({
                    locale: 'ru'
                });
            });
        </script>
    </div>
	
	<br />
                                <button type="submit" class="btn btn-success">
                                        Добавить запись в журнал
                                </button>
	
</form>
		</div>
        </div>
<br />
        

</html>
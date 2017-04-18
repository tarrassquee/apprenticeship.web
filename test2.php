<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Membuat Template Website Bootstrap</title>
 
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- HTML5 shim and Respond.js for IE8 support of 
         HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 <style type="text/css">
body {
    background-color: #e5e5e5;
}

.meta-post {
    font-size: 12px;
    margin-bottom: 10px;
}

.header {
    background-color: #fff;
    padding: 10px 20px;
	padding-bottom: 25px;
}
nav.navbar{
	width:auto;
	height:auto;
	padding-left:auto;
	
	}


article.posts {
    padding: 10px 20px;
    background-color: #fff;
    margin-top: 20px;
}

aside.widgets {
    padding: 10px 20px;
    margin-top: 20px;
    background-color: #fff;
}
aside.widgets ul {
    margin:0;
    padding:0;
}
aside.widgets li {
    list-style: none;
    padding: 0;
    margin:0;
}

.widget-title {
  border-bottom: 4px solid #E74C3C;
  padding-bottom: 4px;
}

footer.copyright {
    padding: 10px 20px;
    font-size: 12px;
	margin-top:auto 500px;
}


	</style>
   
  </head>
  <body>
  
<div class="container">

    <!-- Bagian Header -->
    <div class="row">
        <div class="col-md-12 header" id="site-header">
            <!-- isi header -->
			
			<header>
    <h1 class="title-site">Belajar Bootstrap</h1>
    <p class="description">Belajar Membuat Template Website Dengan Bootstrap</p>
</header>
<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	 
      <ul class="nav navbar-nav">
	
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
		
      </ul>


	  
	
<a class="navbar-brand pull-right" href="#">
        <img alt="Brand" src="c.JPG" class="img-circle img-thumbnail" width="70" style="padding-bottom:">
		</a>



</div>


</nav>
        </div>
    </div>
    <!-- End Bagian Header -->

    <!-- Bagian Wrapper 2 kolom -->
    <div class="row">
        <div class="col-md-8 articles" id="site-content">
           <!-- isi content -->
		   <article class="posts">
    <h2 class="title-post">Lorem ipsum dolor sit amet</h2>
    <div class="meta-post">
        <span><em class="glyphicon glyphicon-user"></em> Onphpid</span>
        <span><em class="glyphicon glyphicon-time"></em> 13 Juni 2015</span>
    </div>
    <div class="content">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis nisi veniam quibusdam amet, odit, odio consectetur ratione quod, cupiditate repellendus voluptatum. Laudantium tempora, neque quo ex aspernatur veritatis sequi incidunt.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis nisi veniam quibusdam amet, odit, odio consectetur ratione quod, cupiditate repellendus voluptatum. Laudantium tempora, neque quo ex aspernatur veritatis sequi incidunt.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis nisi veniam quibusdam amet, odit, odio consectetur ratione quod, cupiditate repellendus voluptatum. Laudantium tempora, neque quo ex aspernatur veritatis sequi incidunt.</p>
    </div>
</article>
        </div>
        <div class="col-md-4 sidebar" id="site-sidebar">
            <!-- isi sidebar -->
			<aside class="widgets">
    <h3 class="widget-title">Latest Posts</h3>
    <ul>
        <li><a href="#">Lorem Ipsum</a></li>
        <li><a href="#">Lorem Ipsum</a></li>
        <li><a href="#">Lorem Ipsum</a></li>
        <li><a href="#">Lorem Ipsum</a></li>
        <li><a href="#">Lorem Ipsum</a></li>
    </ul>
</aside>
        </div>
    </div>
    <!-- End Bagian wrapper -->
    
    <!-- Bagian footer -->
    <div class="row">
        <div class="col-md-12 footer" id="site-footer">
            <!-- isi footer -->
			<footer class="copyright text-center copyright-fixed-bottom"><p>&copy; 2015 onphpid.com</p></footer>
        </div>
    </div>
    <!-- End Bagian footer -->

</div>  
  <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
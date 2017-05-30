<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Xây dựng ứng dụng giải trí" />
    <meta name="author" content="QuocTuan.Info">
    <title>QuocTuan.Info</title>
    <!-- Bootstrap Core CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset ('fontend/stylesheets/bootstrap.min.css') }}" />
    <!-- Custom CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset ('fontend/stylesheets/blog-home.css') }}" />
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">QuocTuan.Info</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">QuocTuan.Info</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                     <li>
                        <a href="/">Trang Chủ</a>
                    </li>
                    <li>
                        <a href="/dang-bai">Đăng Bài</a>
                    </li>
                    <li>
                        <a href="http://quoctuan.info/gioi-thieu.html">Giới Thiệu</a>
                    </li>
                    <li>
                        <a href="http://quoctuan.info/khoa-hoc-lap-trinh.html">Khóa Học</a>
                    </li>
                    <li>
                        <a href="http://quoctuan.info/lien-he.html">Liên Hệ</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            
 @foreach ($data as $item)
            <div class="col-md-8">

                <!-- Blog Post -->
               
       
       

                <!-- Title -->
                <h1>{{$item["namevideo"]}}</h1>

                <!-- Author -->
                <p class="lead">
                    Đăng bởi : <a href="">{{$item["author"]}}</a>
                </p>

                <hr>

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Đăng bài lúc : {{$item["created_at"]}}</p>

                <hr>

                <!-- Preview Image -->
                <div class="video-container">
                     <iframe width="100%" height="400" name="linktxt" src="{{$item["linkvideo"]}}" frameborder="0" allowfullscreen></iframe>
                </div>

                <hr>

                <!-- Post Content -->
                <p class="lead">{{$item["full"]}}</p>

                <hr>

                <!-- Comment Facebook -->

                <!-- Comment Facebook -->
                 </br>

            </div>

 @endforeach

                <!-- Pager -->
                <ul class="pager">
                    <div><img src="fontend/images/progress.gif" alt="Loading" width="150px" /></div>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Liên hệ</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                <li>Điện Thoại : 0933.649.647
                                </li>
                                <li>Email : contact.quoctuan@gmail.com
                                </li>
                                <li>Skype : online.quoctuan
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Thông tin khóa học</h4>
                    <p align="justify">Chào mừng các bạn đến với khóa học lập trình NodeJS tại QuocTuan.Info.Đây là một Project thực tế trong khóa học lập trình NodeJS tại QuocTuan.Info.Hy vọng các thể vận dụng được toàn bộ kiến thực để làm Project này.</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <center>Copyright &copy; QuocTuan.Info 2017</center>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script type="text/javascript" src="javascripts/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script type="text/javascript" src="javascripts/bootstrap.min.js"></script>
    <!-- MyScript -->
    <script type="text/javascript" src="javascripts/myscript.js"></script>
    <script type="text/javascript" src="javascripts/tinymce/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript" src="javascripts/tinymce/js/tinymce/init-tinymce.js"></script>
</body>
</html>

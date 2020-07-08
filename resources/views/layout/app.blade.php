<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>investment game</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    </head>

    <body>

        @include('commons.navbar')
        
        
            @include('commons.error_messages')
            
            @yield('content')
        
        <div class="space">
            <!--フッター-->
    <footer>
        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-4">
                    <a href="https://kaiseiblog.me/" target="_blank">kaiseiblog</a>
                </div>
                <div class="col-md-4">
                    <hr class="light">
                    <h5>使ったプログラミング言語</h5>
                    <hr class="light">
                    <p>HTML5</p>
                    <p>CSS3</p>
                    <p>Bootstrap</p>
                    <p>PHP</p>
                    <p>Laravel</p>
                </div>
                
                 <div class="col-md-4">
                    <hr class="light">
                    <h5>作成者</h5>
                    <hr class="light">
                    <p>大田海聖</p>
                </div>
            </div>
        </div>
    </footer>
    
    </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>
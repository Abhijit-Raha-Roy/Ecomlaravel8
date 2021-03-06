<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-com Project</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- jquery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
     <!-- include header file -->
    {{View::make('header')}}
    @yield('content')
     <!-- include footer file -->
    {{View::make('footer')}}
</body>
<style>
    .custom-login{
        height: 600px;
        padding-top: 100px;
    }
    img.slider-img{
        height:200px !important
        
    }
    .custom-product{
        height: 600px;
       
    }
    .slider-text{
        background-color: #35443585 !important;
    }
    img.trending-image{
        height: 100px;
    }
    .trending-item{
        float: left;
        width: 15%;
    }
    .trending-wrapper{
         margin: 30px;
    }
    img.detail-img{
        height: 200px !important;
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-devider{
         border: 1px solid black;
         margin-bottom: 20px;
         padding-bottom: 20px;
    }
    </style>
</html>
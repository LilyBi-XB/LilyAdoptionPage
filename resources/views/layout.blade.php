<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" >

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Adoption</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="/default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/fonts.css" rel="stylesheet" type="text/css" media="all" />
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.2/css/bulma.css">--}}
    <!--[if IE 6]>
    <link href="/default_ie6.css" rel="stylesheet" type="text/css" />
    <![endif]-->
</head>
<body>
<div id="wrapper">
    <div id="header-wrapper">
        <div id="header" class="container" style="background-image: url('https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/dog-puppy-on-garden-royalty-free-image-1586966191.jpg');width:auto; height:600px; background-position:-400px;background-position-y: -180px">
            <div id="logo">,
                <h1><a href="#">Rehome A Pet</a></h1>
                <p>Bath Cats and Dogs Home</p>
            </div>
        </div>
    </div>
    <div id="menu-wrapper">
        <div id="menu" class="container">
            <ul>
                <li class= {{Request::is('/')?'current_page_item':''}} ><a href="/">Our animals</a></li>
                <li class= {{Request::is('/application')?'current_page_item':''}}><a href="/application">Current Application</a></li>
            </ul>
        </div>
        <!-- end #menu -->




    </div>
</div>

</div>
@yield ('content')

</body>
</html>

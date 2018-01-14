  <!doctype html>
  <html lang="{{ app()->getlocale() }}">
  <head>
   <title>Master title</title>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="apple-touch-icon" href="icon.png">

   {{-- <link rel="stylesheet" href="/css/themify-icons.css"> --}}
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.min.css" integrity="sha256-IyR33qBiUXj7Clf/BpIUivtGnpIpLIL0XOCEGSQPZxg=" crossorigin="anonymous" />
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   <link rel="stylesheet" href="/css/app.css">
 </head>
 <body>




  @yield('main')
  



  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>





  <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/3.3.6/scrollreveal.js" integrity="sha256-wpD5v2/x4TsvsX8iWHHJePQJ+j7yEOJgt2cVTGc27u0=" crossorigin="anonymous"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js" integrity="sha256-vVnwgKyq3pIb4XdL91l1EC8j7URqDRK8BAWvSnKX0U8=" crossorigin="anonymous"></script>
  <script src="/js/app.js"></script>

  
  
 {{--  <script src="/js/jquery.easings.min.js"></script>
  <script src="/js/scrolloverflow.min.js"></script>
  <script src="/js/jquery.fullpage.min.js"></script>
  --}} 
  @if (getenv('APP_ENV') === 'local')
        <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>".replace("HOST", location.hostname));
        //]]></script>
        @endif
      </body>
      </html>

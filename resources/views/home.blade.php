
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <header>
        <img src="http://pluspng.com/img-png/spotify-logo-png-open-2000.png" alt="">
      </header>
      <div class="cds-container">
        @foreach ($database as $data)
          <div class="cd">
              <img src="{{$data['poster']}}">
              <h4>{{$data['title']}}</h4>
              <small>{{$data['author']}}</small>
              <small>{{$data['year']}}</small>
          </div>
        @endforeach
      </div>
    </div>  
  </body>
</html>

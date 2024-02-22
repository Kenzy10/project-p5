@extends('layouts.aca')
@section('kontent')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dua Kolom</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      background-color: #ffffff;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      overflow: hidden;
      padding: 20px;
    }

    .column {
      float: left;
      width: 50%;
      padding: 20px;
      box-sizing: border-box;
    }

    .column img {
      width: 100%;
      height: auto;
      margin-top: 30px;
      padding-left: 150px;
      border-radius: 8px;
    }

    .column p {
      margin-top: 30px;
      font-size: 16px;
      line-height: 1.6;
    }

    @media (max-width: 768px) {
      .column {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="column">
      <img src="https://p2ptm.kemkes.go.id/uploads//TmQwU05BQS9YYlJpanB5VnNtRldFUT09/11_Juni__05.png" alt="Foto" />
    </div>
    <div class="column">
      <h2 style="padding-top: 30px;">Judul Penjelasan</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit
        voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
        quasi architecto beatae vitae dicta sunt explicabo.
      </p>
      <p>
        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
        eos qui ratione voluptatem sequi nesciunt.
      </p>
      <p>
        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
        numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
      </p>
      <div>
        
      </div>
    </div>
  </div>

</body>
</html>


@endsection

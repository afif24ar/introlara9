<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman welcome</title>
    <link 
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" 
    crossorigin="anonymous">
</head>
<body>
    <div class="container">Lorem ipsum dolor sit amet 
        consectetur, adipisicing elit
        . Enim aperiam nemo labore porr
        o culpa, minima praesentium, soluta v
        el voluptas cupiditate nulla odio quasi!
         Dolorum, soluta atque? Saepe quisquam ap
         eriam numquam?</div>
         <div class="container">
          {!! Form::open(['method' => 'POST', 'route' => 'hom', 'class' => 'form-horizontal']) !!}
          boottext
            <div class="form-group">
            {!! Form::label('nama_pasien', 'Nama Pasien') !!}
            {!! Form::text('nama_pasien', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('umur_pasien', 'Umur Pasien') !!}
              {!! Form::text('umur_pasien', null, ['class' => 'form-control']) !!}
              </div>
            <div class="btn-group pull-right">
            {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
            {!! Form::submit('Add', ['class' => 'btn btn-success']) !!}
            </div>
          {!! Form::close() !!}
          <br>
        </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>

</body>
</html>
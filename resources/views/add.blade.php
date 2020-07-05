<!DOCTYPE html>
<html>
  <head>
      <title>Costumer List</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

    <div class="container">
        <h3 class="center"> Cadastrar </h3>
        <form action="{{route('salvar')}}" method="POST">
            {{ csrf_field() }}
        
            <div class="input-field">
                <input type="text" name="name" placeholder="name" value="{{isset($registro->name) ? $registro->name : ''}}">
                <br>
                <input type="text" name="address" placeholder="address" value="{{isset($registro->address) ? $registro->address : ''}}">
                <button type="submit">Cadastrar</button>

            </form>
    </div>


    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>  
  <script type="text/javascript"> 
   $(document).ready(function() {
    M.updateTextFields();
  });
    </script>
</body>
</html>
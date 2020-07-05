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
        <h3 class="center"> Customers List </h3>
        <div class="row">                
        
            <table>
                <thead>
                    <tr>
                        <th> Id </th>
                        <th> Name </th>
                        <th> Address </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($registros as $registro)
                    <tr>
                        <td> {{$registro->id}} </td>
                        <td> {{$registro->name}} </td>
                        <td> {{$registro->address}} </td>
                    </tr>
             @endforeach
                </tbody>
            </table>

        </div>
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
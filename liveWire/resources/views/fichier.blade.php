<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-----------bootstrap-------->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!----------script------------>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>

    <!--------police------>
    <link href='http://fonts.googleapis.com/css?family=holtwood+One+SC' rel='stylesheet' type='text/css'>  

    <!---------image-------->
    <link rel="shortcut icon" href="images/favicon.ico"/>

    <!---------style-------->
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!--script src="https:ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script-->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!--script src="ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script-->

        <title>Livewire</title>

            @livewireStyles
        
    </head>
    <body>
        <br/><br/>
        <div class="container">

                
            
            <br/><br/>

            <form action="" method="">
            @livewire('fichier-exemple')

            </form>

        <div>

        @livewireScripts
    </body>
</html>

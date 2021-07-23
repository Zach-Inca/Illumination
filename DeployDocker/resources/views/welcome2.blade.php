@extends('layouts.app')

@section('content')
<div class="container">
          
    <!-- Main CSS File -->
    <link href="/css/style.css" rel="stylesheet">
    
    <div>
        <h1 style="text-align:center">Welcome to Delectable!</h1>
    </div>
    

    <div class="row"> </div>

    <div>
        <!-- Load icon library -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- The form -->
        <form class="example" action="action_page.php">
            <input type="text" placeholder="Search for the recipe..." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

    <div class="row">
        <div class="col-9 pt-5">
            <div>
                <h4>Here are some popular recipes: </h4>
            </div>
        </div>
        <div class="row pt-5">

            <div class="col-4">
                <img src="img/macrons.jpg" class="w-100" style="height:350px; width=250px;" alt="">
            </div>
            <div class="col-4">
                <img src="img/eggs.jpg" class="w-100" style="height:350px; width=150px;" alt="">
            </div>
            <div class="col-4">
                <img src="img/saucers.jpg" class="w-100" style="height:350px; width=250px;" alt="">
            </div>
        </div>
    </div>

</div>
@endsection
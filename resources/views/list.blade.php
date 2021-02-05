<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>list Of Services</title>
</head>
<style>

.div1 {
    margin-right: 30px;
   
}
.btn1{
    padding: 14px;
    margin: 10px;
    border-style: none;
    outline-width: 0px;
    border-radius: 30px;
    font-size: 18px;

}
.btn1:hover{
    background-color: blue;
}
.card-body{
    margin-top: 20px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 1px 1px 2px 2px lightblue	;
}
</style>
<body>


    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand">Online Vehicle Service System</a>
        <form class="form-inline my-2 my-sm-1">
            <div class="div1">
            
            <a href="{{url('servicecart')}}" class="btn btn-dark bg-primary my-2 my-sm-1 btn1" type="submit">  <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-bag-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.5 3.5a2.5 2.5 0 0 1 5 0V4h-5v-.5zm6 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
            </svg> Requested Services </a>
            </div>
        </form>
    </nav>
    <Br><br>

    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
            <div class="section-title">

                <h2 style="align-items: center; background-color:royalblue; border-radius:3px; padding:25px; text-align: center; border-radius: 10px; color:white;">List Of Service Centers.....</h2>

                <br>
                <br>

            </div>
            <div class="row">
            </div>
            @foreach($data as $i)
            <h3>
                <div class="card-header " style="background-color:cornflowerblue;  border-radius: 10px; padding:15px; ">{{$i->servicecentername}}</div>
            </h3>
            <div class="card-body">

                <!-- <input type="hidden" name="service_id" value="{{$i->id}}"/> -->
                <!-- <input type="text" name="service_id" value="{{$i->id}}"/> -->
                <h5 class="card-title">PhoneNo: {{$i->phoneno}}</h5>
                <h5 class="card-title">Address Is : {{$i->address}}</h5><br>
                <!-- <h5 class="card-title">username Is : {{$i->name}}</h5><br> -->
                
                <a href="{{url('servicecarts/'.$i->id)}}" class="btn btn-info">Request For Service</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://maps.google.com/?q={{$i->address}}" class="btn btn-info">Go To location</a>
            </div><br>
            @endforeach
        </div>


        </div>
        </div>
        @yield('content')
    </section><!-- End Services centers list Section -->

    @yield("content")
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>


</body>

</html>
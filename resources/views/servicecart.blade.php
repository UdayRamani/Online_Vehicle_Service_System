<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<style>

.textname{
    text-align: center;
    padding: 20px;
    font-size: 30px;
    font-weight: bold;
    border-radius: 10px;
}
.card-body{
    background-color: lightblue;
    border-radius: 10px;
}
.btn-info
{
    width: 100%;
}
.card-title
{
    width: bold;
    font-size: 30px;
}
</style>
   <title>Service Cart</title>
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand">Online Vehicle Service System</a>
        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-bag-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.5 3.5a2.5 2.5 0 0 1 5 0V4h-5v-.5zm6 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
            </svg> 
    </nav>
    <br><br>
    <section id="services" class="services">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2 style="align-items: center; background-color:royalblue; border-radius:3px; padding:20px; text-align: center;   font-weight: bold;">LIST OF REQUEST FOR THE SERVICE</h2>
                <br>
            </div>
            <div class="row">
            </div>
            @foreach($cart as $service)
            <h3>
                <div class=" textname" style="background-color:cornflowerblue;">{{$service['servicecentername']}}</div>
            </h3>
            <div class="card-body">
                <h5 class="card-title">Date: {{$service['phoneno']}}</h5><br>
                <h5 class="card-title">Status: {{$service['phoneno']}}</h5><br>  
                <h5 class="card-title">Address Is : {{$service['address']}}</h5><br>
                <h5 class="card-title">PhoneNo: {{$service['phoneno']}}</h5><br>

                <a href="{{url('payment')}}" class="btn btn-info">checkOut</a><br><br>
                @endforeach
              </div><br> 
        </div>
        </div>
        </div>
    </section>
</body>
</html>
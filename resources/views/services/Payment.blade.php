  <!doctype html>
  <html lang="en">

  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

      <title>Payment GetWay</title>
  </head>
  <!-- Navbar -->
  <!--Main layout-->
  <main class="mt-6 pt-6">
      <div class="container wow fadeIn">

          <!-- Heading -->
          <h2 class="my-5 h2 text-center">Checkout form</h2>

          <!--Grid row-->
          <div class="row">

              <!--Grid column-->
              <div class="col-md-8 mb-4">

                  <!--Card-->
                  <div class="card">

                      <!--Card content-->
                      <form class="card-body">



                          <div class="d-block my-3">
                              <div class="custom-control custom-radio">
                                  <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                                  <label class="custom-control-label" for="credit">Credit card</label>
                              </div>
                              <div class="custom-control custom-radio">
                                  <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                                  <label class="custom-control-label" for="debit">Debit card</label>
                              </div>
                              <div class="custom-control custom-radio">
                                  <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                                  <label class="custom-control-label" for="paypal">Paypal</label>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-6 mb-3">
                                  <label for="cc-name">Name on card</label>
                                  <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                  <small class="text-muted">Full name as displayed on card</small>
                                  <div class="invalid-feedback">
                                      Name on card is required
                                  </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                  <label for="cc-number">Credit card number</label>
                                  <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                  <div class="invalid-feedback">
                                      Credit card number is required
                                  </div>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-3 mb-3">
                                  <label for="cc-expiration">Expiration</label>
                                  <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                  <div class="invalid-feedback">
                                      Expiration date required
                                  </div>
                              </div>
                              <div class="col-md-3 mb-3">
                                  <label for="cc-expiration">CVV</label>
                                  <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                  <div class="invalid-feedback">
                                      Security code required
                                  </div>
                              </div>
                              <div class="col-md-6 mb-3">
                                  <label for="cc-name">Enter Amount Here</label>
                                  <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                  <small class="text-muted"></small>
                                  <div class="invalid-feedback">

                                  </div>
                              </div>
                          </div>
                          <hr class="mb-4">
                          <form class="card p-2">
                              <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Promo code" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                  <div class="input-group-append">
                                      <button class="btn btn-secondary btn-md waves-effect m-0" type="button">Redeem</button>
                                  </div>
                              </div>
                          </form>
                          <button class="btn btn-primary btn-lg btn-block" style=" background-color:lightblue; color:black;" type="submit">Continue to checkout</button>

                      </form>

                  </div>
                  <!--/.Card-->

              </div>
              <!--Grid column-->
              <div class="card" style="width: 18rem; height: 465px; background-color:lightblue;">
                
              <img src="bak.png" class="card-img-top" alt="...">
                <hr/>
              <div class="card-body">
                      <h5 class="card-title"  style="font-size: 29px;">Thank You...</h5>
                      <p class="card-text">Thank you for service we are happy to help You.</p>
                      <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                  </div>
              </div>
              <!--Grid column-->

              <!-- Promo code -->

              <!-- Promo code -->

          </div>
          <!--Grid column-->

      </div>
      <!--Grid row-->

      </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

      <!--Call to action-->

      <!--/.Call to action-->

      <hr class="my-4">




  </footer>
  <!--/.Footer-->

  </body>

  </html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registration.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <!--<h1 class="reg-heading">Registration form</h1>-->
  <div class="reg-container">
    <h1 class="reg-heading">Registration form</h1>
    <form class="row g-3" method="post" action="connectt.php">

      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">First Name</label>
        <input type="text" class="form-control" name="fname" id="formGroupExampleInput" placeholder="Type your answer here">
        <label for="formGroupExampleInput2" class="form-label">Last name</label>
        <input type="text" class="form-control" name="lname" id="formGroupExampleInput2" placeholder="Type your answer here">
      </div>
            <!--BS-->

          <!--  <form class="row g-3">-->

                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">    Email-Id    </label>
                  <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="muskan@gmail.com">
                </div>

                <div class="col-md-6">
                  <label for="inputPassword4" class="form-label">Password</label>
                  <input type="password" class="form-control" name="pswd" id="inputPassword4">
                </div>

                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">Phone number</label>
                  <input type="text" class="form-control" name="number" id="inputAddress2" placeholder="+91">
                </div>

                <!--city-->

                <div class="city">
                  <label for="inputCity" class="form-label">City</label>
                  <input type="text" class="form-control" name="city" id="inputCity">
               <!-- </div>
                <div class="city">-->
                  <label for="inputState" class="form-label">State</label>
                  <select name="state" id="inputState" class="state-option">
                    <option value="Punjab">Punjab</option>
                    <option selected value="Chandigarh">Chandigarh (UT)</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Bihar">Bihar</option>
                    <option value="UP">Uttar Pradesh</option>
                  </select>
                </div>
                <!--
                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Zip</label>
                  <input type="text" class="form-control" id="inputZip">
                </div>
            -->
                <div class="service">

                    <label class="form-check-label" for="gridCheck">
                        What service would you like to offer?
                    </label>
                    <!--radio buttons-->

                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="exampleRadios1" name="options" value="dstr" checked>
                        <label class="form-check-label" for="exampleRadios1">
                          Distribution
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio"  id="exampleRadios2" name="options" value="fr">
                        <label class="form-check-label" for="exampleRadios2">
                          Fundraising
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio"  id="exampleRadios3" name="options" value="smm">
                        <label class="form-check-label" for="exampleRadios3">
                          Social media management
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" id="exampleRadios3" name="options" value="eo">
                        <label class="form-check-label" for="exampleRadios3">
                          Event Organizing
                        </label>
                      </div>

                    <!--end of radio buttons-->
                  </div>
               <!-- </div>-->
                
                <div class="register">
                  <button type="submit" class="btn btn-primary">Register</button>
                </div>

    </form>

  </div>
        
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
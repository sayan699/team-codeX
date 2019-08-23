<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>SecondPage</title>
  </head>
  <body>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">HOME</a>
              </nav>
              </div>
              
      <div class="container">
          <h2 class="text-danger text-center">MENTION YOUR PROBLEMS :)</h2>
           <form class="complaint" action="complaintback.php" method="POST" enctype="multipart/form-data">

           <div class="form-group">
                <label for="exampleFormControlTextarea1"><h4><span>Describe Your Problem...</span></h4></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="problem"></textarea>
              </div>
       


                    
                        <div class="form-group">
                          <label for="exampleFormControlFile1"><span class="text-primary">Browse Your Pic :</span></label>
                          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
                        </div>
                  
                      



                <div class="form-group">
                  <label for="inputAddress"><span class="text-primary">Address :</span></label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
                </div>
                <div class="form-group">
                  <label for="inputAddress2"><span class="text-primary">Landmark :</span></label>
                  <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="landmark">
                </div>
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity"><span class="text-primary">City :</span></label>
                    <input type="text" class="form-control" id="inputCity" name="city">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="inputState"><span class="text-primary">State :</span></label>
                    <select id="inputState" class="form-control" name="state">
                      <option selected>TAMIL NADU</option>
                      <option>KERELA</option>
                      <option>ANDRA PRADESH</option>
                      <option>TELANGANA</option>
                      <option>ODISHA</option>
                      <option>KARNATAKA</option>
                      <option>DELHI</option>
                      <option>WEST BENGAL</option>
                      <option>JHARKHAND</option>
                      <option>MADHYA PRADESH</option>
                      <option>MAHARASHTRA</option>
                      <option>GOA</option>
                      <option>MANIPUR</option>
                    </select>
                  </div>
                  <div class="form-group col-md-2">
                    <label for="inputZip"><span class="text-primary">PIN :</span></label>
                    <input type="text" class="form-control" id="inputZip" name="pin">
                  </div>
                </div>
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                            <span class="text-primary">Agree To Terms And Conditions :</span>
                    </label>
                  </div>
                </div>
                
                     
                      <button id = "find-me" class="btn btn-info">Mark Your Location</button>&nbsp&nbsp&nbsp&nbsp&nbsp 
                      <button class="btn btn-info" ><a href="cam.html">Take A Picture</a> </button>
                      <p id = "status"></p>
                      <a id = "map-link" target="_blank"></a>
                     <br>
                     <br>
                      
                <button type="submit" class="btn btn-primary"># SUBMIT</button>
              </form>
    
            </div>







        <script>
                function geoFindMe() {
            
            const status = document.querySelector('#status');
            const mapLink = document.querySelector('#map-link');
            
            mapLink.href = '';
            mapLink.textContent = '';
            
            function success(position) {
              const latitude  = position.coords.latitude;
              const longitude = position.coords.longitude;
            
              status.textContent = '';
              mapLink.href = `https://www.openstreetmap.org/#map=18/${latitude}/${longitude}`;
              mapLink.textContent = `Latitude: ${latitude} °, Longitude: ${longitude} °`;
            }
            
            function error() {
              status.textContent = 'Unable to retrieve your location';
            }
            
            if (!navigator.geolocation) {
              status.textContent = 'Geolocation is not supported by your browser';
            } else {
              status.textContent = 'Locating…';
              navigator.geolocation.getCurrentPosition(success, error);
            }
            
            }
            
            document.querySelector('#find-me').addEventListener('click', geoFindMe);
            </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
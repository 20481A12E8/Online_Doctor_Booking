<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>search</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
    <link href="bootstrap.min.css" rel="stylesheet">

 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Home</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    
      
    <style>
       nav{
      background-color: rgb(20, 44, 100);
    }
        .search {
      padding: 10px;
      display: flex;
    }

    .inp {
      font-size: 18px;
    }

    .bt {
      font-size: 18px;
      border-radius: 4px;
      background-color: rgb(93, 155, 255);
      color: white;
      border-color: rgb(93, 155, 255);
    }

    .ret {
      text-align: center;
      background-image: url("https://img.freepik.com/premium-vector/medical-background-healthcare-technology_120542-1259.jpg?w=1060");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      min-height: 100vh;
    }
    .navbar-toggler{
      color: white;!important
    }
    </style>
  </head>

  <body class=" ">
    <header>
    <nav class="navbar navbar-expand-lg navbar-light">
    <div>
      <i class="bi bi-person" style="font-size:25px; color:white;"></i>
      <a class="navbar-brand" href="#" style="color:white;">Profile</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="color:white;">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active" >
          <a class="nav-link" href="#" style="color:white;">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color:white;">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color:white;">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" style="color:white;">Disabled</a>
        </li>
      </ul>
    </div>
  </nav>
    </header>

  
  


  <script>
function toggleDropdown(dropdownId) {
  var dropdown = document.getElementById(dropdownId);
  dropdown.classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

  </script>


<div class="ret">
<style>

   .search {
        padding: 10px;
        display: flex;
      }

      .inp {
        font-size: 18px;
      }

      .bt {
        font-size: 18px;
        border-radius: 4px;
        background-color: rgb(93, 155, 255);
        color: white;
        border-color: rgb(93, 155, 255);;
      }

      .ret {
        text-align: center;
      }

      body {
        font-family: Arial, sans-serif;
        margin: 0;
      }

      .dropdown {
        position: relative;
        display: inline-block;
        width: 80%;
        text-align: center;
      }

      .dropbtn {
        background-color: #a5f7bf;
        color: black;
        padding: 16px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .right-text {
        margin-left: auto; 
      }

      .dropdown-content {
        display: none;
        background-color: #f9f9f9;
        min-width: 100%;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        left: 0; 
      }

      .dropdown-content p {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        margin: 0; 
      }

      .dropdown-content a:hover {
        background-color: #f1f1f1;
      }

      .show {
        display: block;
      }

      .left-corner {
        margin: 0;
        resize: none;
        width: 100%;
        border: none;
        outline: none;
        text-align: left;
        padding: 10px;
      }
    .bottom-button{
     background-color: #fdd6ed;
     min-width: 100%;
     height: 40px;
     color: black;
    }
</style>
<div class="search">
      <form action="ret.php" method="POST">
        <div class="row">
          <div class="col-md-5">
            <label for="sp" class="form-label"></label>
            <select class="form-select" id="dropdown" name="sp" required>
              <option value="">Specialized In</option>
              <option value="cardiologist">Cardiologist</option>
              <option value="nephrologist">nephrologist</option>
              <option value="neurologist">neurologist</option>
              <option value="ENT">ENT</option>
              <option value="gynecologist">gynecologist</option>
              <option value="orthopedist">orthopedist</option>
              <option value="gastroenterologist">gastroenterologist</option>
              <option value="pediatrician">pediatrician</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid option.
            </div>
          </div>
          <div class="col-md-5">
            <label for="city" class="form-label"></label>
            <select class="form-select" id="country" name="city" required>
              <option value="">City</option>
              <option value="vijaywada">vijaywada</option>
              <option value="guntur">guntur</option>
              <option value="gudivada">gudivada</option>
              <option value="ongole">ongole</option>
              <option value="nellore">nellore</option>
              <option value="kadapa">kadapa</option>
              <option value="bapatla">bapatla</option>
              <option value="mtm">mtm</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid option.
            </div>
          </div>
          <div class="col-md-2">
            <label></label> <!-- Empty label for spacing -->
            <div>
              <button id="submitButton" class="bt" type="submit" value="search" onclick="submitForm()">Search</button>
            </div>
          </div>
        </div>
      </form>
    
  </div>
  <?php
error_reporting(E_ERROR | E_PARSE); 
ini_set('display_errors', '1'); 

$ct = $_POST["city"];
$sp = $_POST["sp"];
$c = mysqli_connect("localhost", "root", "", "extern");
$q = "SELECT * FROM doctors WHERE city = '$ct' and specialized = '$sp'";
$r = mysqli_query($c, $q);

$foundResults = false; // Flag variable to track if any search results were found

$data = array(); // Array to store the retrieved values

while ($z = mysqli_fetch_assoc($r)) {
    $temp = array(
        'id' => $z['id'],
        'name' => $z['fname'],
        'lname'=> $z['lname'],
        'num' => $z['num'],
        'email' => $z['email'],
        'city' => $z['city'],
        'specialized' => $z['specialized'],
        'sps'=> $z['sps'],
        'address' => $z['address']
    );
    $data[] = $temp; // Append the values to the array
    $foundResults = true; // Set flag to true since results were found
}

if ($foundResults) {
    // Loop through the array and create a textarea for each index
    echo '<style>
    .custom-card {
      height: 200px;
      padding: 20px;
      position: relative;
    }
    
    .card-hover {
      transition: transform 0.3s ease;
    }
    
    .card-hover:hover {
      transform: scale(1.1);
    }
    
    .card-margin {
      margin-bottom: 20px;
      padding-left: 27px;
    }
    
    .card-text {
      text-align: left;
    }
    
    .logo {
      position: absolute;
      top: 10px;
      right: 10px;
      width: 30px;
      height: 30px;
    }
    
    .btn {
      color: black;
    }
    .custom-card {
      height: 200px;
      padding: 20px;
      transition: background-color 0.3s ease;
    }
    .custom-card:hover {
      background-color: #333333;
    }
    .custom-card:hover h3,
    .custom-card:hover p {
      color: #ffffff;
    }
    .card-footer {
      background-color: #ffffff;
      transition: background-color 0.3s ease;
    }
    .card-footer:hover {
      background-color: #f8f9fa;
    }
    .card:hover .card-footer {
      background-color: #f8f9fa;
    }
    .card-body {
      overflow-y: auto;
    }
  </style>';
  
    echo '<div class="row">';
          $count = 1;
          foreach ($data as $index => $item) {
            echo '<div class="col-md-4 card-margin">
                    <div class="card shadow-sm card-hover zoom-in">  
                      <div class="card-body custom-card">
                        <img class="logo" src="https://img.freepik.com/free-vector/flat-medical-symbol_23-2149496593.jpg?w=740&t=st=1684085323~exp=1684085923~hmac=d44800c1822374c1fa74d7cbc10b909d6898c538dcec4c4dd452595ca3241779" alt="Logo">
                        <h3>'. $item['name'] . '&nbsp;' . $item['lname'].'</h3>
                        <p class="card-text">' .'Doctors Id : '. $item['id'] . "<br>" .'Specialized in :'. $item['specialized'] ."<br>" .'Services : '.$item['sps'] ."<br>" .'Email : '. $item['email'] . "<br>" .'City : '. $item['city'] . "<br>" .'Mobile Number : ' . $item['num'] . "<br>" .'Adrress : '. $item['address'] . '</p>
                      </div>
                      <div class="card-footer" style="background-color:rgb(41, 217, 199);;">
                        <div class="d-flex justify-content-between align-items-center" style="border-radius:10px;">
                          <div class="btn-group" style="background-color:white; border-radius:5px;">
                            <a href="#"><button type="button" class="btn1 btn btn-sm btn-outline-secondary">Book</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>';
            $count++;
          }
          echo '</div>';
        }

 else {
  if (!empty($ct) && !empty($sp)) {
      echo 'Sorry, there is no doctor available...try changing place or specialization';
  }
}
?>


</div>
</body>
</html>
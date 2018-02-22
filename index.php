<!DOCTYPE html>
<html lang="en">
<head>
  <title>Feedback Box</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <a href=""><img src="images/feedbackBox.png" class="img-fluid" alt="Feedback Box" width="800"></a>
</div>
  
<div class="container">
  
  <!-- New stuff from here -->
  <form method="post" action="php/feedbackProcessor.php">
    <div class="form-group">
      <label>Feedback: </label>
      <textarea class="form-control" id="text" name="text" row="3" style="min-width:100%"></textarea>
    </div>
    
    <div class="form-group">
      <label for="module">Module: </label>
      <select class="custom-select" id="module" name="module">
      <option value="CS615">Internet Solutions Engineering</option>
      <option value="CS265">Software Testing</option>
      <option value="WAD">Web Application Development</option>
      <option value="AI">Introduction to Artificial Intelligence</option>
      <option value="BDA">Business Data Analytics</option>
      </select>
    </div>
    
    <div class="form-group">
      <label for="semester">Semester: </label>
      <select class="custom-select" id="semester" name="semester">
      <option value="Sem1_2017-18">Sem 1, 2017-18</option>
      <option value="Sem2_2017-18">Sem 2, 2017-18</option>
      </select>
    </div>
    
    <div class="form-group">
      <label class="radio-inline"><input type="radio" name="rating" value="1">:((</label>
      <label class="radio-inline"><input type="radio" name="rating" value="2">:(</label>
      <label class="radio-inline"><input type="radio" name="rating" value="3">:|</label>
      <label class="radio-inline"><input type="radio" name="rating" value="4">:)</label>
      <label class="radio-inline"><input type="radio" name="rating" value="5">:))</label>
    </div>
    
    <input id="submit" name="submit" type="submit" value="Drop into Box" class="btn btn-primary">
    
  </form>
 <!-- 
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
-->
  
</div>

</body>
</html>

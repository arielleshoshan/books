<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Bookish Recomendations </title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google Fonts (pick a good font)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&family=Yeseva+One&display=swap" rel="stylesheet">


    <!-- Specs for Google Fonts-->
    <style>
    h1 { font-family: 'Yeseva One', Palatino, serif; }
    body { font-family: 'Quicksand', Tahoma, sans-serif; }
    </style>

    <link rel="stylesheet" href="styles/main.css">
</head>

<body>
  <div class="container mt-0" id="books">
      <div class="row">
        <div class="col-lg-8 mx-auto mt-0">

  <div class="border border-dark border-4 p-4 mt-5 mb-5" id="content">
    <h1 class="display-4 text-center pt-2 pb-2">Submit a book!</h1>
      <p class="text-center">Submit your favorite book, or a book you want someone else to read!</p>
      <p class="middle text-center"><a href="bookquotes.php">View full list of book recommendations</a></p>

<!--<div id="books">-->

<form id="bookform" method="post" action="" autocomplete="off">

  <!-- Title Question -->
  <div class="mt-4">
      <label for="title" class="form-label">What is the book title?</label>
      <input type="text" class="form-control" name="title" id="title" maxlength="50" required>
  </div>

<!-- Genre Question -->
  <div class="mt-4">
      <label for="genre" class="form-label">What genre is the book?</label>
      <input type="text" class="form-control" name="genre" id="genre" maxlength="20" required>
  </div>

  <!-- Quote Question -->
    <div class="mt-4">
        <label for="quote" class="form-label">What's your favorite quote?</label>
        <input type="text" class="form-control" name="quote" id="quote" maxlength="200" required>
    </div>

    <!--  Submit Button -->
<div class="mt-4">
  <input class="btn btn-primary" value="Submit" type="submit" id="submit">
</div>

  <!-- Closing tags below -->
</form>

<!--</div> close #books -->


</div>
</div>
</div>

</div> <!-- close container -->

<!-- popup response -->
<div class="container">
  <div class="row">
    <div id="response"></div>
  </div>
</div> <!-- close response container -->



<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="scripts/enter.js"></script>

</body>
</html>

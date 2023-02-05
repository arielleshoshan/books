<?php
	include 'database.php';
	$query = "SELECT * FROM books ORDER BY title";
	$books = mysqli_query($conn, $query);
?>


<!-- Begin HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title> Bookish Recommendations </title>

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
  <div class="container mt-0">
      <div class="row">
        <div class="col-lg-8 mx-auto mt-0">

	<div <div class="border border-dark border-4 p-4 mt-5 mb-5" id="content">
	<!-- Header -->
		<header class="text-center mt-3 mb-4">

			<h1 class="display-3 pb-2 pt-3">Book Submissions</h1>
			<p class="text-center">For those of us who are looking for something new to read, we can browse favorite quotes and choose a book.</p>
			<p class="middle text-center"><a href="index.html">Return Home</a></p>

		</header>

<table class="table table-hover border border-dark border-2">
  <thead>
    <tr class="table-secondary">
      <th scope="col">Title</th>
      <th scope="col">Genre</th>
      <th scope="col">Favorite Quote</th>
    </tr>
  </thead>
  <tbody>

  <!-- ADD PHP -->
	<?php while ($row = mysqli_fetch_assoc($books)) :  ?>

              <tr>
                <td><?php echo stripslashes($row['title']); ?></td>
                <td><?php echo stripslashes($row['genre']); ?></td>
                <td><?php echo stripslashes($row['quote']); ?></td>


              </tr><!-- end of HTML table row -->

<?php endwhile;  ?> <!-- end the PHP while-loop
     everything else on this page is normal HTML -->

  </tbody>
</table>

</div>
</div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>

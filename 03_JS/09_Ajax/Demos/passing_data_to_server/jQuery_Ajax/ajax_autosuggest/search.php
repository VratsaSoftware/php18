<?php

  $query = isset($_GET['q']) ? $_GET['q'] : '';

?>

<?php include('includes/header.php'); ?>

<div id="page-content">
  <h1>Search results</h1>

  <p>You searched for: <strong><?php echo htmlspecialchars($query); ?></strong></p>

</div>

<?php include('includes/footer.php'); ?>

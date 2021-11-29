<?php
  include('config.php');
  include('includes/header.php');
?>

    <div id="wrapper">
      <main>
        <h1><?php echo $pageHeading; ?></h1>
        <table class="kittens">
          <?php foreach($kittens as $name => $image) : ?>
          <tr>
            <td>
              <img src="images/<?php echo substr($image, 0, 5); ?>.jpg" alt="<?php echo $name; ?>">
            </td>
            <td>
              <?php echo str_replace('_', '', $name);?>
            </td>
            <td>
              <?php echo substr($image, 6);?>
            </td>
            <td>
              <img src="images/<?php echo substr($image, 0, 5); ?>2.jpg" alt="<?php echo $name; ?>">
            </td>
          </tr>
        <?php endforeach ; ?>
        </table>
      </main>

      <aside>
        <h3>My Aside</h3>
        <!--insert random images-->
        <?php randomImage($kittenImages); ?>
        <p>Refresh to see random kitten pictures using a randomImage function!</p>
      </aside>
      
      <?php include('includes/footer.php'); ?>

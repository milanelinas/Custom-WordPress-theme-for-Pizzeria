<?php
function lapizzeria_options() {
add_menu_page( 'La Pizzeria', 'La pizzeria Options', 'administrator', 'lapizzeria_options', 'lapizzeria_adjustments', '', 20 );

add_submenu_page( 'lapizzeria_options', 'Reservations', 'Reservations', 'administrator', 'lazpizzeria_reservations',
'lazpizzeria_reservations' );


}
 add_action('admin_menu', 'lapizzeria_options');

function lapizzeria_adjustments() {
echo "hello form lapizzeria menu";
}



function lazpizzeria_reservations() {  ?>
<div class="wrap">
<h1>Reservations</h1>
<table class="wp-list-table widefat striped">
  <thead>
    <tr>
      <th class="manage-column">ID</th>
      <th class="manage-column">Name</th>
      <th class="manage-column">Date of reservation</th>
      <th class="manage-column">Email</th>
      <th class="manage-column">Phone Number</th>
      <th class="manage-column">Message</th>
    </tr>
  </thead>
  <tbody>
    <?php
      global $wpdb;
      $table = $wpdb->prefix . 'reservations';
      $reservations = $wpdb->get_results("SELECT * FROM $table", ARRAY_A);
      foreach($reservations as $reservation): ?>
        <tr>
          <td><?php echo $reservation['id'];  ?></td>
          <td><?php echo $reservation['name'];  ?></td>
          <td><?php echo $reservation['date'];  ?></td>
          <td><?php echo $reservation['email'];  ?></td>
          <td><?php echo $reservation['phone'];  ?></td>
          <td><?php echo $reservation['message'];  ?></td>
        </tr>


      <?php    endforeach;
    ?>
  </tbody>
</table>
</div>


<?php }

?>

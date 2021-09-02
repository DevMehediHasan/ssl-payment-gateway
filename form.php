<?php
function form_design(){
    
    global $wpdb;
    // $table_name= $wpdb->prefix.'orders';
    $DBP_results= $wpdb->get_results("SELECT * FROM `wp_order`");
    ?>
<div>
<form method="POST" action="<?php echo admin_url('admin.php?page=phistory.php'); ?>">
    <table id="customers">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Amount</th>
            <th>Address</th>
            <th>Tans-ID</th>
            <th>Delete</th>
        </tr>
        <?php 
        if (isset($_POST['delete'])){
            $wpdb->delete( 'wp_order', array( 'id' => $_POST['delete']) );
        }
        foreach( $DBP_results as $DBP_row ){
            $id = $DBP_row->id;
            $name = $DBP_row->name;
            $email = $DBP_row->email;
            $phone = $DBP_row->phone;
            $amount = $DBP_row->amount;
            $address = $DBP_row->address;
            $transaction_id = $DBP_row->transaction_id;
        
        ?>
        <tr>
            <td> <?php echo $id; ?> </td>
            <td> <?php echo $name; ?> </td>
            <td> <?php echo $email; ?> </td>
            <td> <?php echo $phone; ?> </td>
            <td> <?php echo $amount; ?> </td>
            <td> <?php echo $address; ?> </td>
            <td> <?php echo $transaction_id; ?> </td>
            <td>
            <button value="<?php echo $id; ?>" name="delete">Delete</button> 
            </td>
        </tr>
<?php
}
?>
    </table>
    </form>
</div>
<?php
}
?>
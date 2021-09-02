<style>
    input[type=text], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type=submit] {        
      color: white;
      background-color: #45a049;
      padding: 10px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }
</style>

<?php
function ssl_select(){

?>
<div>
    <h1>Input Your Store ID & Password </h1>
  <form method="POST">
    <label for="s_id"> Store Id </label>
    <input type="text" id="s_id" name="store_id" placeholder="Store ID.." required>

    <label for="s_pass"> Store Password </label>
    <input type="text" id="s_pass" name="store_pass" placeholder="Store Password.." required>

    <label for="s_choice"> Is Sendbox</label><br>
    <select id="s_choice" name="is_sandbox">
        <option value="1">True</option>
        <option value="0">False</option>
    </select>
<br>
    <input type="submit" value="Save" name="save">
  </form>
</div>


<?php

}

function sslconfig_data(){
  global $wpdb;
  $table_name= $wpdb->prefix.'ssl_config';
    
  $DBP_store_id=$_POST['store_id'];
  $DBP_store_pass=$_POST['store_pass'];
  $DBP_is_sandbox=$_POST['is_sandbox'];
  if (isset($_POST['save'])){
    $wpdb->query(
        "UPDATE $table_name SET 
        store_id='$DBP_store_id',
        store_pass='$DBP_store_pass',
        is_sandbox='$DBP_is_sandbox' 
        WHERE ID= 1");
   }
  }     
?>
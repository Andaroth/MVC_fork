<?php 
  class fromDB {
    
    private function getItemCat($idstock) {
      $getItemCat = $db->query("SELECT IDcat FROM stock_cat where IDstock = '".$idstock."'"); // $ is in those cat
      $countItemInCat = $db->query("SELECT count(IDcat) FROM stock_cat where IDstock = '".$idstock."'"); // $ is in X cat
      
      function selectCat($idcat) {
        return $db->query("SELECT * FROM categorie where ID = '".$idcat."'");
      }
    
      // Will return in which cat is the item
      foreach ($getItemCat as $thisQuery) {
        $entry = $thisQuery["title"];
      }
    }
    
    private function getItems($idcat) {
      $getItems = $db->query("SELECT IDstock FROM stock_cat where IDcat = '".$idcat."'"); // Select all items in cat
    }
  } // End of fromDB
?>

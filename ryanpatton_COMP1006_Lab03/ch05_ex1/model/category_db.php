<?php
function get_categories() {
    global $db;
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;    
}

function get_category_name($category_id) {
    global $db;
    $query = 'SELECT * FROM categories
              WHERE categoryID = :category_id';    
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();    
    $category = $statement->fetch();
    $statement->closeCursor();    
    $category_name = $category['categoryName'];
    return $category_name;
}

function delete_category($categoryID){
    global $db;
    $query = 'DELETE FROM categories
                WHERE categoryID = :categoryID';
    $statement = $db->prepare($query);
    $statement->bindValue(':categoryID', $categoryID);
    $statement->execute();
    $statement->closeCursor();
}

function add_new_category($newCategory) {
    global $db;
    $query = 'INSERT INTO categories (categoryID, categoryName) VALUES (default, :newCategory)';
    $statement = $db->prepare($query);
    $statement->bindValue(':newCategory', $newCategory);
    $statement->execute();
    $statement->closeCursor();
}
?>
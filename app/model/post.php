<?php
class Model extends appModel
{

function PostList($limite, $offset)
{
  try {
    $query =  "SELECT post_ID, post_title, LEFT(post_content," .  TRUNCATE . ") AS post_content, post_date, display_name,cat_id, cat_descr, post_img_url


                            FROM blog_posts A, blog_users B, blog_categories C
                            WHERE A.post_author = B.ID
                              AND A.post_category= C.cat_id 
                            ORDER BY post_date DESC
    
    LIMIT " . $offset . " , " . $limite;

    $req = $this->pdo->query($query);
    //$req->setFetchMode(PDO::FETCH_OBJ);
    $posts = $req->fetchALL(); //retourne les resultat dans un tableau 

    $req->closeCursor();
    return $posts;
  } catch (Exception $e) {
    return false;
  }
}
public function postRead($id)
{ 


  try {
    global $pdo;
    $query =  "SELECT post_ID, post_title, post_content, post_date, user_photo, user_descr, display_name, cat_id, cat_descr ,post_img_url
                            FROM blog_posts A, blog_users B, blog_categories C
                            WHERE A.post_author = B.ID
                              AND A.post_category= C.cat_id
                              AND A.post_ID = " . $id;
    $req = $this->pdo->query($query);
    //$req->setFetchMode(PDO::FETCH_OBJ);
    $post = $req->fetch();
    $req->closeCursor();
    return $post;
  } catch (Exception $e) {
    return false;
}
}

}
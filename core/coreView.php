<?php
class coreView extends core
{
    public function display($module, $view, $data= null){
        include("app/view/" . $module . "/" . $view);
        
    }
    public function paginator($nbPages, $url){
    

    echo '<ul class="pagination justify-content-start">';
       for ($i = 1; $i <= $nbPages; $i++) { 
     echo '<li class="page-item"><a class="page-link " href="' . $url . '=' . $i . '">' . $i . '</a></li>';
} 
    
 echo ' </ul>';


    }
    public function flash_create($text, $type){//le dlash create stock cest deux parametre dans la session 
        $_SESSION["flash"]= array("text"=>$text, "type"=>$type);
     }
     public function flash_display(){
          if (isset($_SESSION["flash"])) { ?>
     
             <div class="alert alert-<?= $_SESSION["flash"]["type"]; ?>" role="alert">
                 <?= $_SESSION["flash"]["text"]; ?>
                 <?php unset($_SESSION["flash"]); ?>
             </div>
     
         <?php } 
     }
   
}
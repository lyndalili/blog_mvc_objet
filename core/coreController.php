<?php
class coreController extends core
{
    protected $load;
    protected $model;
    protected $params;

    public function __construct()
    {
        $this->load = new coreView;
        $this->model = new Model();


        if (!isset($_GET["action"])) {
            $action = DEFAULT_ACTION;
        } else {
            $action = $_GET["action"];
        }


       
        $tab_params = explode("&", $_SERVER["QUERY_STRING"]); //function explode separe les caracter durl avec &
        if ($tab_params[0] != "") {
            foreach ($tab_params as $value) {
                $param = explode("=", $value);
                $this->params[$param[0]] = $param[1];
            }
        }

        //var_dump($params);

        if (method_exists($this, $action)) {

            $this->$action();
        } else {
            $this->page404();
        }
    }

    function page404()
    {
        echo "core: 404 not found !";
    }
}

<?php 
    /**
     * pageTitle
     *
     * @param  mixed $page
     * @return void
     */
if (! function_exists('pageTitle')) {
    function pageTitle($page){
        if($page==null){
            $page="home";
        }
        $file = public_path("/json/$page.json"); 

        if(file_exists($file)){
            $data = json_decode(file_get_contents($file), true);
        }else{
            $data = json_decode(file_get_contents(public_path("/json/error404.json")), true);
        }
        return $data['pageTitle'];
    }
}

    /**
     * metaData
     *
     * @param  mixed $page
     * @return void
     */

if (! function_exists('metaData')) {
    function metaData($page){
        if($page==null){
            $page="home";
        }
        $file = public_path("/json/$page.json"); 
        
        if(file_exists($file)){
        $data = json_decode(file_get_contents($file), true);
        
            if($page == 'product' ){
                $metafields = $data['metadata']['values'];
            }else if($page == 'catalog' ){
                $metafields = ['Column(s)'=>'','Style'=>'','Sort'=>'','Footer Type'=>''];
            }else{
                $metafields = [];
            }
            return $metafields;
        }else{
            return false;
        }

    }
}

    /**
     * retreive
     *
     * @param  mixed $page
     * @return void
     */
if (! function_exists('retreive')) {    

    function retreive($page){
    
        $file = public_path("/json/$page.json"); 

        if(file_exists($file) || $page == ''){
            $data = json_decode(file_get_contents($file), true);
            if($page == 'product' || $page == 'catalog' || $page == 'home' || $page == ''){
                return $data;
            }
        }else{
            $data = json_decode(file_get_contents(public_path("/json/error404.json")), true);
            return $data;
        }

    }

}

?>

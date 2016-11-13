<?php

namespace Aws{
    
    class bundle_aws_sdk extends \adapt\bundle{
        
        public function __construct($data){
            parent::__construct('aws_sdk', $data);
        }
        
        public function boot(){
            if (parent::boot()){
                require(ADAPT_PATH . "{$this->name}/{$this->name}-{$this->version}/src/functions.php");
                return true;
            }
            
            return false;
        }
        
    }
    
}

?>
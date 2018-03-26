<?php
#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

class ${NAME} {
    
    private static $instance;

    public static function instance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }
    
    public static function init(){
        add_action('init', [self::instance(), 'doSomething']);
    }
    
    public function doSomething(){
    
    }
}
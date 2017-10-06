<?php

class Display
{
    private $error = array(
            0 => 'Unknown option',
            1 => 'Unknown file type, please use controller or model.',
            2 => 'Udefined file name, please specify name of your new file.',
            3 => 'File doesn\'t exists'
        );
    public function help()
    {
        echo "Welcome to HamPHP CLI\n";
        echo "Usage : php ham [generate | delete [controller | model <name>]]\n\n";
        echo "These are common HamPHP CLI commands used in various situations:\n\n";
        echo " generate\tg\t Generate new file eg. controller, model, etc\n";
        echo " delete\t\td\t Delete file eg. controller, model, etc\t";
    }
    public function helpG()
    {
        echo "Welcome to HamPHP CLI\n";
        echo "Generate option to create a controller, model, etc\n";
        echo "Usage : php ham generate [controller | model <name>]\n\n";
        echo "Example: \n\tphp ham generate controller home";
    }
    public function helpD()
    {
        echo "Welcome to HamPHP CLI\n";
        echo "Delete option to delete a controller, model, etc\n";
        echo "Usage : php ham delete [controller | model <name>]\n\n";
        echo "Example: \n\tphp ham delete controller home";
    }
    public function error($index)
    {
        echo 'HamPHP->error('.$index.') : '.$this->error[$index]."\n";
    }
    public function serveMessage($port){
        echo " <> ================= HamPHP is running =================== <>\n";
        echo " <> Let's open http://localhost:$port with your web browser. <>\n";
        echo " <> ========================<>============================= <>\n";
    }
}

<?php

namespace Mmantai\Dotenv;

class DotEnvParser
{

    public function __construct(string $filePath)
    {
        $this->init($filePath);
    }

    public function init(string $filePath): void 
    {
        $file = fopen($filePath, "r");
        if($file)
        {
            while($line = fgets($file))
            {
                if(strpos($line, "=") == false)
                {
                    continue;
                }

                putenv($line);
            }
        }
    }
}
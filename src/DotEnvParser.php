<?php

namespace Mmantai\Dotenv;

class DotEnvParser
{
    /**
     * @param string $filePath //filepath of .env file
     * 
     * @return void
     */
    public static function init(string $filePath): void 
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

                //remove whitespace and linebreaks
                $replace = ["\r\n","\n", "\r"];
                $formatted_line = trim(str_replace($replace, "", $line));

                putenv($formatted_line);
            }
        }
    }
}
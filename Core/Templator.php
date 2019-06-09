<?php
$file_r_output = '';
$file_r_cache = '';
function output($template, $params = [])
{
    $file_r_cache =  "cache/$template.php";
    $file_r_output = "output/$template.tmp.php";
    try {
        if (!file_exists($file_r_cache)) {
            if (!file_exists($file_r_output)) {
                throw new ErrorException('Файл не знайдено!');
            } else {
                Templator::run($template);
            }
        } else {
            if (filemtime($file_r_output) > filemtime($file_r_cache)) {
                Templator::run($template);
            }
        }
    } catch (ErrorException $errorExceptione) {
        print("Error! " . $errorExceptione->getMessage() . "<br>");
        die();
    }
    extract($params);
    $title = 'Waffle-Forum';
    ob_start();
    require "$file_r_cache";
    return ob_get_clean();

}

class Templator{
    private $file_code;
    private $file_tmp;
    private $file_cache;
    public static function run($file)
    {
        $me = new self();
        $me->file_tmp = "output/$file.tmp.php";
        $me->file_cache = "cache/$file.php";
        $me->file_code = file_get_contents($me->file_tmp);
        $me->parse();
        return $me->file_code;
    }

    public function parse()
    {
        $this->file_code = str_replace('{{', '<?=', $this->file_code);
        $this->file_code = str_replace('}}', '?>', $this->file_code);
        file_put_contents($this->file_cache, $this->file_code);
    }

}
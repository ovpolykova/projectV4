<?php
class Formauto {
    public $caption;
    public function __construct(string $text)
    {
        $this->caption = $text;
    }
    public function viewForm(){
        echo '<h2>'.$this->caption.'</h2>
        <form> <input type="text" name="login">
        <input type="password" name="password">
        <button type="submit">Войти </button>
        </form>';
    }
}







?>
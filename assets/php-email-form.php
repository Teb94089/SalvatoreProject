<?php
class PHP_Email_Form
{
    public $to;
    public $from_name;
    public $from_email;
    public $subject;
    public $message;
    public $ajax;  // Add this property

   


    public function add_message($content, $label = '', $max_length = null)
{
    if ($max_length !== null) {
        $content = substr($content, 0, $max_length);
    }
    $this->message .= "<strong>{$label}:</strong> {$content}<br>";
}


    public function send()
    {
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8\r\n";
        $headers .= "From: {$this->from_name} <{$this->from_email}>\r\n";

        return mail($this->to, $this->subject, $this->message, $headers);
    }
}
?>

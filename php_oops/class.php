<!-- Oops in php is the main method to consider php it's fast easy and better -->

<?php
class Programming
{
    //properties
    public $name;
    public $status; // you can easily call this an interface where we are defining the methods

    //Methods
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }

    function set_status($status)
    {
        $this->status = $status;
    }
    function get_status()
    {
        return $this->status;
    }
}
$lang = new Programming();
$stat = new Programming();
$lang->set_name('Python');
$stat->set_status("Active");

echo "The Language name is" . ' ' . $lang->get_name();
echo "<br>";
echo "The status of python is" . ' ' . $stat->get_status();


?>
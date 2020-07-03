<?php
class GeneralController
{
    // property
    public $name = 'DEV';
    protected $age = 30;
    private $address = 'Ha Noi';

    // Method
    public function show()
    {
        echo 'Ke thua';
    }

    protected function edit()
    {
        echo 'Ke thua - edit';
    }

    private function delete()
    {
        echo 'Ke thua - delete';
    }
}

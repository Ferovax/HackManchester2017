<?php

class Converter
{
  var $number = 0, $unit = '';
  public function __construct($number,$unit) {
      $this->number = $number;
      $this->unit = $unit;
}

    public function convert()
    {
        if (is_numeric($this->number)) {

            if ($this->unit == 'miles to km') {
                $result = $this->number * 1.609;
            } elseif ($this->unit == 'km to miles') {
                $result = $this->number * 0.621;
            } elseif ($this->unit == 'miles to parsecs') {
                $result = $this->number * 0.000000000000052;
            }
            else {
                $result = 'error';
            }
        }
        else {
            $result = false;
            }
      return $result;
    } }

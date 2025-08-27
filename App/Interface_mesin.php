<?php
namespace App;

class interface_mesin implements mesin
{
  public function nyalakan () {
    echo'mesin sedang menyala';
  }
}
<?php
namespace Controllers;
class SzukajTowar extends Controller
{
  public function search()
  {
    $towar='';
    $cenaMin='';
    $cenaMax='';
    $kodTowaru='';
    $sprzedawane='';
    $niesprzedawane='';
    if (isset ($_POST['towar']))
    {
      $towar=$_POST['towar'];
    }
    if (isset ($_POST['cenaMin']))
    {
      $cenaMin=$_POST['cenaMin'];
    }
    if (isset ($_POST['cenaMax']))
    {
      $cenaMax=$_POST['cenaMax'];
    }
    if (isset ($_POST['kodTowaru']))
    {
      $kodTowaru=$_POST['kodTowaru'];
    }
    if (isset ($_POST['sprzedawane']))
    {
      $sprzedawane=$_POST['sprzedawane'];
    }
    if (isset ($_POST['niesprzedawane']))
    {
      $niesprzedawane=$_POST['niesprzedawane'];
    }
      $view=$this->getView('SzukajTowar');
      $view->search($towar,$cenaMin,$cenaMax,$kodTowaru,$sprzedawane,$niesprzedawane);
  }
}
?>

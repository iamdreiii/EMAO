<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';
class Pdf extends TCPDF
{
    function __construct()
    {
        parent::__construct();
    }
    public function Header() {
		// $this->setJPEGQuality(90);
		// $this->Image('assets/pwaimages/icon-512x512.png', 20, 20, 20, 0, 'PNG', 'https://www.emao-pola.online');
        $html = '
        <table>
        <tr>
            <th><img style="float:left;" height="100" width="100" src="assets/pwaimages/icon-512x512.png" alt="logo" /></th>
            <th colspan="4"><br /><h1>DISPERSAL CONSULTATION SLIP</h1><br><h4>Municipal Agriculture Office - Pola</h5></th>
            
        </tr>
        </table>
        <hr>
          ';
      $this->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = 'top', $autopadding = true);
    }
}
/*Author:Tutsway.com */  
/* End of file Pdf.php */
/* Location: ./application/libraries/Pdf.php */
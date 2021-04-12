<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Testhelper extends CI_Controller {
        function __construct(){
            parent::__construct();
            $this->load->helper('html');
        }
public function index(){
        $this->load->view('view_helper');
}}
<html>
<head>
        <title>Heading Helper HTML</title>
</head>
<body>
<?php
        echo heading("Hello CI",1);
        echo heading("Hello CI ",2);
        echo heading("Hello CI ",3);
        echo heading("Hello CI ",4);
        echo heading("Hello CI ",5);
        echo heading("Hello CI ",6);
$gambar = array(
    'src' => https://static.cdn-cdpl.com/source/17045/codeignitor_service_provider-image(700x350-crop)-image(700x350-crop).jpg',
    'alt' => 'Codeigniter - CI',
    'class' => 'post_images',
    'width' => '300',
    'height'=> '300',
    'title' => 'Artesonraju Mountain'
);
echo img($gambar);
?>
</body>
</html>
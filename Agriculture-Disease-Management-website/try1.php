<?php
$input= $_GET ['uploadfilesub'];

switch($input)
{
  case "black_rust_wheat.jpg":
  include('black_rust_wheat.php');
  break;
  case "loose_smut_wheat.jpg":
  include('loose_smut_wheat.php');
  break;
  case "heal_bunt_wheat.jpg":
  include('heal_bunt_wheat.php');
  break;
  case "karnul_bunt_wheat.jpg":
  include('karnul_bunt_wheat.php');
  break;
  case "blast_paddy.jpg":
  include('blast_paddy.php');
  break;
  case "brown_spot_paddy.jpg":
  include('brown_spot_paddy.php');
  break;
  case "sheath_blight_paddy.jpg":
  include('sheath_blight_paddy.php');
  break;
  case "bacterial_blight_paddy.jpg":
  include('bacterial_blight_paddy.php');
  break;
  case "tungro_paddy.jpg":
  include('tungro_paddy.php');
  break;
  case "leaf_blight_Maize.jpg":
  include('leaf_blight_Maize.php');
  break;
  case "s_leaf_blight_Maize.jpg":
  include('s_leaf_blight_Maize.php');
  break;
  case "brown_spot_maize.jpg":
  include('brown_spot_maize.php');
  break;
  case "head_smut_maize.jpg":
  include('head_smut_maize.php');
  break;
  case "late_blight_potato.jpg":
  include('late_blight_potato.php');
  break;
  case "barley_yellow.jpg":
  include('barley_yellow.php');
  break;
  case "Bacterial_wilt_potato.jpg":
  include('Bacterial_wilt_potato.php');
  break;
  default:
  echo "its not me";
  break;
}
?>

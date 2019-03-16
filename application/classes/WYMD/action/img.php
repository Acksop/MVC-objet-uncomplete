<?php

/**
 * ImageCompliant pour WMD - GNU General Public License
 * 
 * @from Mickaël Menu <mickael.menu@gmail.com> for WIKINI 0.4.3
 * @author Emmanuel ROY <acksop@gmail.com>
 * @copyright Copyright (c) 2016 WMD Core
 * @category actions
 * @version 0.1.0
 * @since 2005-03-21
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License
 * @link http://www.wikini.net/
 */
//initialisation des parametres
$img_src    = '';
$img_desc   = '';
$img_align  = '';
$img_link   = '';
$img_target = '';
$img_hidden = '';
$img_style_def = '';
$img_border = '';
$img_width  = '';
$img_height = '';

// Récupération des paramètres.
if( isset($parameter["src"])){
	$img_src = $parameter["src"];
}
if( isset($parameter["desc"])){
	$img_desc   = $parameter["desc"];
}
if( isset($parameter["align"])){
	$img_align  = $parameter["align"];
}
if( isset($parameter["link"])){
	$img_link = $parameter["link"];
}
if( isset($parameter["target"])){
	$img_target = $parameter["target"];
}
if( isset($parameter["hidden"])){
	$img_hidden = $parameter["hidden"];
}
if( isset($parameter["style"])){
	$img_style_def = $parameter["style"];
}
if( isset($parameter["border"])){
	$img_border = $parameter["border"];
}
if( isset($parameter["width"])){
	$img_width  = $parameter["width"];
}
if( isset($parameter["height"])){
	$img_height = $parameter["height"];
}
// Vérification du paramêtre 'src`.
if (empty($img_src)) 
{
  exit();
}

// Gestion du paramêtre 'hidden`.
if ($img_hidden)
{
  $img_div_style = "display: none";
}
else
{
  $img_div_style = "display: block;";
}

// Gestion du paramêtre 'border`.
if (!$img_border) 
{
  $img_style = "border: 0";
}

//Gestion du parametre `width`
if ($img_width)
{
  $tag_width = 'width="'.$img_width.'"';
}
else
{
  $tag_width = '';
}

//Gestion du parametre `height`
if ($img_height)
{
  $tag_height = 'height="'.$img_height.'"';
}
else
{
  $tag_height = '';
}




// Gestion du paramêtre 'align` et création de la "div" contenant l'image.
if (!empty($img_align) && ($img_align == 'left' || $img_align == 'center' || $img_align == 'right'))
{
  echo '<div align="'.$img_align.'">';
}
else
{
  echo '<div style="'.$img_div_style.'">';
}

if (!empty($img_style_def))
{
  $img_style .= $img_style_def;
}

// Gestion des paramètres 'link` et 'target`.
if (!empty($img_link))
{
  echo '<a href="'.$img_link.'"';
  if (!empty($img_target) && ($img_target == '_blank' || $img_target == '_top')) {
    echo 'target="'.$img_target.'"';
  }
  echo '>';
}

// Affichage de l'image.
echo '<img class="image"';
if (!$img_border)
{
  echo ' style="'.$img_style.'"';
}
echo ' src="'.$img_src.'" '.$tag_height.' '.$tag_width.' alt="'.$img_desc.'" title="'.$img_desc.'" />';

if (!empty($img_link))
{
  echo '</a>';
}

echo '</div>';



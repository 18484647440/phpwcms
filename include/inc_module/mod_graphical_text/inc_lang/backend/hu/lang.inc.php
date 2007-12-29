<?php
// Graphical Text MOD
$BL['be_subnav_graphicaltext_mod']				= 'Grafikus sz�veg';				
$BL['be_gt_button_add']							= 'Hozz�ad�s';						
$BL['be_gt_button_update']						= 'M�dos�t�s';						
$BL['be_gt_button_cancel']						= 'M�gsem';							
$BL['be_gt_edit_empty_fields']					= 'K�rem t�lts�n ki minden mez�t';	

// Graphical Text MOD Menu
$BL['be_gt_submenu_home']						= 'Home';							
$BL['be_gt_submenu_fonts']						= 'Fontok';							
$BL['be_gt_submenu_colors']						= 'Sz�nek';							
$BL['be_gt_submenu_styles']						= 'St�lusok';						

// Graphical Text MOD Home
$BL['be_gt_index_title']						= 'Grafikus sz�veg - Home';			
$BL['be_gt_index_summary']						= 
'Ez a kieg�sz�t�s lehet�v� teszi dynamikus grafikus sz�veg haszn�lat�t a "replacement tag" - ben. 
Ehhez a k�vetkez� l�p�sek v�grehajt�sa sz�ks�ges.<br />
<br />
K�rem, t�ltse fel a haszn�lni k�v�nt fontoka haszn�lni k�v�n fontokat a k�vetkez� k�nyvt�rba:<br />
<br />
<div style="text-align: center">include/inc_module/mod_graphical_text/inc_fonts/</div>
<br />
Ezut�n kattintson a Fontok men�pontra, �s adja a fontot az adatb�zishoz. �rja be a teljes nevet 
(pl. "MS Trebuchet") �s a r�vid nevet (pl. "trebuchet") - 
a r�vid n�v lesz a kulcs a "replacement tag" -ben. <br />
<br />
Az adatb�zishoz nem adott fontok nem haszn�lhat�k a "replacement tag" -ben. <br />
<br />
A kieg�sz�t�s haszn�lat�hoz l�tre kell hozni a "gt" k�nyvt�rat a k�vetkez� k�nyvt�r alatt:<br />
<br />
<div style="text-align: center">content/</div>
<br />
�s CHMOD -t be�ll�tani: 777.';

// Fonts
$BL['be_gt_fonts_title']						= 'Fontok';						
$BL['be_gt_font_name']							= 'N�v';						
$BL['be_gt_font_shortname']						= 'R�vid n�v';					
$BL['be_gt_font_filename']						= 'File-n�v';					
$BL['be_gt_font_add']							= 'Font hozz�ad�sa';			
$BL['be_gt_font_edit']							= 'Font szerkeszt�se';			
$BL["be_gt_font_not_yet_added"]					= '- m�g nincs hozz�adva -';	
$BL["be_gt_font_back"]							= 'Vissza a font list�hoz';		

// Font - Edit
$BL['be_gt_font_edit_title']					= 'Font-adat';					

// Colors
$BL['be_gt_colors_title']						= 'Sz�n defin�ci�k';				
$BL['be_gt_colors_name']						= 'N�v';							
$BL['be_gt_colors_info']						= 'Sz�n �rt�k';						
$BL['be_gt_color_add']							= 'Sz�n defin�ci� hozz�ad�sa';		
$BL['be_gt_color_edit']							= 'Sz�n defin�ci� szerkeszt�se';	
$BL['be_gt_color_delete']						= 'Sz�n defin�ci� t�rl�se';			
$BL['be_gt_color_delete_confirm']				= 'Biztos torli a sz�n defin�ci�t';	

// Color - Edit
$BL['be_gt_color_edit_title']					= 'Sz�n defin�ci�';						
$BL['be_gt_color_name']							= 'N�v';								
$BL['be_gt_color_info']							= 'Sz�n �rt�k (hex)';					
$BL['be_gt_color_back']							= 'Vissza a sz�n defin�ci� list�hoz';	
$BL['be_gt_only_six_numbers']					= 'K�rem, 6 jegy� �rt�ket adjon meg.';	

// Styles
$BL['be_gt_styles_title']						= 'St�lusok';							
$BL['be_gt_styles_name']						= 'N�v';								
$BL['be_gt_styles_preview']						= 'St�lus tulajdons�gok';				
$BL['be_gt_style_add']							= 'St�lus hozz�ad�sa';					
$BL['be_gt_style_edit']							= 'St�lus szerkeszt�se';				
$BL['be_gt_style_delete']						= 'St�lus t�rl�se';						
$BL['be_gt_style_delete_confirm']				= 'Biztos t�rli ezt a st�lust?';		

// Styles - Edit
$BL['be_gt_style_edit_title']					= 'St�lus';								
$BL['be_gt_style_name']							= 'N�v';								
$BL['be_gt_output_format']						= 'Output form�tum';					
$BL['be_gt_style_font']							= 'Font';								
$BL['be_gt_style_size']							= 'Font m�ret';							
$BL['be_gt_style_underline']					= 'Al�h�zott';							
$BL['be_gt_style_underline_desc']				= '(0 = nem al�h�zott)';				
$BL['be_gt_style_antialiasing']					= 'Antialiasing';						
$BL['be_gt_style_antialiasing_yes']				= 'Igen';								
$BL['be_gt_style_antialiasing_no']				= 'Nem'; 								
$BL['be_gt_style_transparency']					= '�tl�tsz�s�g';						
$BL['be_gt_style_fgcolor']						= 'Bet� sz�ne';							
$BL['be_gt_style_bgcolor']						= 'H�tt�r sz�ne';						
$BL['be_gt_style_back']							= 'Vissza a st�lus list�hoz';			
?>
<?php

function get_stylesheets() {
  $template_uri = get_template_directory_uri();
  $stylesheet_uri = get_stylesheet_directory_uri();
  $styles = '';

  $styles .= "<link rel=\"stylesheet\" href=\"$template_uri/css/blueprint/screen.css\">\n";
  $styles .= "\t<link rel=\"stylesheet\" href=\"$template_uri/css/style.css\">\n";
  $styles .= "\t<link rel=\"stylesheet\" href=\"$stylesheet_uri/css/style.css\">\n";
  $styles .= "\t<!--[if lt IE 8]><link rel=\"stylesheet\" href=\"$template_uri/css/blueprint/ie.css\"><![endif]-->\n";

  return $styles;
}

?>

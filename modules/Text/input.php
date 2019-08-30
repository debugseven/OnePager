<?php  

$id = 1;
$mf = new MForm();
$mf->addTab("General");

$mf->addTextAreaField("$id.0.text", ["label" => "Text", 'class'=>'cke5-editor', 'data-lang'=>'de', 'data-profile'=>'default']);

$mf->addTab("Style");
$mf->addSelectField("$id.0.color", [
	"" => "Standard",
	"nv-orange" => "Orange",
	"nv-blue" => "Blau",
	"nv-white" => "Weiß"
], ["label" => "Textfarbe"]);

$mf->addSelectField("$id.0.fontSize", [
	"" => "Standard",
	"nv-font-medium" => "Mittel",
	"nv-font-big" => "Groß",
], ["label" => "Schriftgröße"]);

$mf->addSelectField("$id.0.cols", [
	"" => "Standard",
	"col-lg-4" => "4 / 12",
	"col-lg-6" => "6 / 12",
	"col-lg-7" => "7 / 12",
	"col-lg-8" => "8 / 12",
	"col-lg-10" => "10 / 12"
], ["label" => "Breite"]);

$mf->addSelectField("$id.0.justify", [
	"" => "Standard",
	"justify-content-lg-center" => "Mittig",
	"justify-content-lg-end" => "Rechts"
], ["label" => "Ausrichtung"]);

$mf->addSelectField("$id.0.marginBot", [
	"" => "Standard",
	"nv-margin-bottom-small" => "Klein",
	"nv-margin-bottom-medium" => "Mittel",
	"nv-margin-bottom-big" => "Groß"

], ["label" => "Abstand Unten"]);

echo MBlock::show($id, $mf->show(), ["min" => 1, "max" => 1]);

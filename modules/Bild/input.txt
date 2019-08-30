<?php

$id = 1;
$mf = new MForm();

$mf->addTab("General");
$mf->addMediaField(1, ["label" => "Bild"]);
$mf->addCustomLinkField("$id.0.1", ["label" => "Link"]);
$mf->addTextField("$id.0.number", ["label" => "Nummer"]);
$mf->addTextField("$id.0.text", ["label" => "Text"]);

$mf->addTab("Style"); 
$mf->addSelectField("$id.0.cols", [
	"" => "Standard",
	"col-lg-4" => "4 / 12",
	"col-lg-6" => "6 / 12",
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
<?php

$id = 1;

$mf = new MForm();

$mf->addTab("General");
$mf->addMediaField(1, ["label" => "Bild"]);
$mf->addTextField("$id.0.text", ["label" => "Text"]);

$mf->addTab("Style"); 
$mf->addSelectField("$id.0.textSize", [
	"" => "Standard",
	"nv-text-small" => "Klein"
], ["label" => "Schriftgröße"]);

$mf->addSelectField("$id.0.marginBot", [
	"" => "Standard",
	"nv-margin-bottom-small" => "Klein",
	"nv-margin-bottom-medium" => "Mittel",
	"nv-margin-bottom-big" => "Groß"

], ["label" => "Abstand Unten"]);

echo MBlock::show($id, $mf->show(), ["min" => 1, "max" => 1]);
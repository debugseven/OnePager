<?php  
$oData = new stdClass;
$oData->in = rex_var::toArray("REX_VALUE[1]")[0];
$oData->img = MEDIA . $oData->in["REX_MEDIA_1"];

$oData->marginBot = $oData->in["marginBot"] ? $oData->in["marginBot"] : "nv-margin-bottom-small";

$oData->current = rex_category::getCurrent(); 
$oData->title = $oData->current ? $oData->current->getValue("name") : "";
$oData->textSize = $oData->in["textSize"] ? $oData->in["textSize"] : "";

if(!rex::isBackend()) {

	$oData->id = UrlGenerator::getId();
	
	if($oData->id) {
	
		$oData->item = rex_yform_manager_dataset::get($oData->id, 'nv_jobs');

		if(!$oData->item || $oData->item->getValue("status") != 1) {
		    rex_redirect(rex_article::getNotfoundArticleId());
		}

		if($oData->item->getValue("title")) {
		    $oData->in["text"] = $oData->item->getValue("title");
			   
		}
	}
}


?>

<section class="nv-banner container-fluid nv-background-image <?=$oData->marginBot?>" style="background-image: url(<?=$oData->img?>)">
	<div class="row h-100">
		<div class="col-12">
			<div class="container h-100">
				<div class="row h-100">
					<div class="col-12 nv-relative">
						<div class="nv-row">
							<div class="nv-col nv-col-4 mb-2 mb-md-0">
								<div class="nv-box">
									<p class="nv-uppercase"><?=$oData->title?></p>
								</div>
							</div>
							<div class="nv-col nv-col-8">
								<div class="nv-box <?=$oData->textSize?>">
									<h1><?=$oData->in["text"]?></h1>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
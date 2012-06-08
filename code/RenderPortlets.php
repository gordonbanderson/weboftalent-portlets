<?php

class RenderablePortlets_Controller extends Extension {

	/*
	Render a portlet from a template call of the form

	<code>
		$RenderPortlet(NewsItem|Title|4|Carousel)
	</code>

	As Silverstripe can only deal with a single parameter string with no spaces, split the params by a pipe character.
	These parameters are as follows:
	* The DataObject class that we wish to show
	* The order (descending) to show items (normally the home page is for the most recent things)
	* The number of items maximum to show
	* The template used to show it

	FIXME: Use a join to make image extraction more efficient
	*/
	 public function RenderPortlet($modelOrderNumberTemplate) {
        $result = null;
        $splits = explode('|', $modelOrderNumberTemplate);
        $model = $splits[0];
        $ordering = $splits[1];
        $amount = $splits[2];
        $template = $splits[3];

        error_log("TEMPLATE:".$template);

        $records = DataObject::get($model, '', $ordering, '', $amount);

        return $this->owner->customise(
          new ArrayData(
            array(
              'Key' => 45,
              'Records' => $records
            )
          )
        )->renderWith($template);
    }

}
?>
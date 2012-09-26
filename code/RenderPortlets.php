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
  * The filter to use (i.e. the where clause, leave blank to ignore)
	* The order (descending) to show items (normally the home page is for the most recent things)
	* The number of items maximum to show
	* The template used to show it

	FIXME: Use a join to make image extraction more efficient
	*/
	 public function RenderPortlet($modelOrderNumberTemplate) {
        $result = null;
        $splits = explode('|', $modelOrderNumberTemplate);
        if (sizeof($splits) == 5) {
          $model = $splits[0];
          $where = $splits[1];
          $ordering = $splits[2];
          $amount = $splits[3];
          $template = $splits[4];

          error_log("TEMPLATE:".$template);

          $records = DataObject::get($model, $where, $ordering, '', $amount);

          return $this->owner->customise(
            new ArrayData(
              array(
                'Records' => $records
              )
            )
          )->renderWith($template);
        } else {
          return 'Error with '.$modelOrderNumberTemplate;
        }

        
        
    }

}
?>
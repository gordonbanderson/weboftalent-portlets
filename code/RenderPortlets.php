<?php

class RenderablePortlets_Controller extends Extension {
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
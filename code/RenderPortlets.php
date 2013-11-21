<?php

class RenderablePortlets_Controller extends Extension {

  /*
  Render a portlet from a template call of the form

  <code>
    $RenderPortlet(NewsItem|Title|4|Carousel)
  </code>

  As Silverstripe can only deal with a single parameter string with no spaces, split the params by a pipe character.
  These parameters are as follows:
  * @param model The DataObject class that we wish to show
  * @param where The filter to use (i.e. the where clause, leave blank to ignore)
  * @param ordering The order (descending) to show items (normally the home page is for the most recent things)
  * @param amount The number of items maximum to show
  * @param template The template used to show it

  FIXME: Use a join to make image extraction more efficient
  */
  public function RenderPortlet( $model, $where, $ordering, $amount, $template, $joinTable = '', $joinOn = '' ) {
    error_log( "RENDER PORTLET" );
    error_log( 'ARGUMENTS:'.print_r( $where, 1 ) );
    $result = null;
    //$records = DataList::DataObject::get( $model, $where, $ordering, '', $amount );
    $records = DataList::create($model)->where($where)->sort($ordering)->limit($amount);
    if ($joinTable) {
      $records->leftJoin($joinTable, $joinOn);
    }
    return $this->owner->customise(
      new ArrayData(
        array(
          'Records' => $records
        )
      )
    )->renderWith( $template );
  }
}
?>
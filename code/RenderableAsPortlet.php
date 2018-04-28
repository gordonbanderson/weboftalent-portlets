<?php
/**
 * Defines the interface for a DataObject renderable as a portlet. Implementors
 * of this interface must define the following functions in order to work with
 * the {@link RenderPortlet}
 * helper class.
 *
 * @author Gordon Anderson
 */
interface RenderableAsPortlet
{
    /**
     * An accessor method for the title of an item in a portlet.
     *
     * @example
     * <code>
     *  return $this->Title;
     * </code>
     *
     * @return string
     */
    public function getPortletTitle();

    /**
     * An accessor method for an image for a portlet.
     *
     * @example
     * <code>
     *  return $this->NewsItemImage;
     * </code>
     *
     * @return string
     */
    public function getPortletImage();

    /**
     * An accessor for text associated with the portlet.
     *
     * @example
     * <code>
     * return $this->Summary
     * </code>
     *
     * @return string
     */
    public function getPortletCaption();
}

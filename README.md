#Functionality
* Adds a convenience template call that allows one to search for N of a certain type of DataObject and then render them with a given template.

# Installation
    git clone git://github.com/gordonbanderson/weboftalent-portlets.git
    cd weboftalent-portlets
    git checkout stable24

The name of the output directory does not matter

# Usage

## Interface for Models
For a model to be rendered as a portlet, it must provide the 3 following methods and implement the RenderableAsPortlet interface

	public function getPortletTitle();
	public function getPortletImage();
	public function getPortletCaption();


## Templates
The model being rendered must implement the RenderableAsPortlet interface mentioned previously.  An example call to render portlets is as follows:

	$RenderPortlet(Activity||Title|2|SmallTitleAndImage)

The parameters are as follows:

* The class name, in this case we are looking objects of class Activity
* Filter, i.e. the WHERE clause of the search.  In this case no filter has been applied
* The sort field, in this case title.
* The number of items to return, in this case 2
* The name of the template used to render the portlets, here _SmallTitleAndImage_






## Silverstripe Version Compatibility
2.4 only (tested with 2.4.5+) - stable24 branch
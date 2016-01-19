#Functionality
[![Build Status](https://travis-ci.org/gordonbanderson/weboftalent-portlets.svg?branch=continuous_integration)](https://travis-ci.org/gordonbanderson/weboftalent-portlets)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-portlets/badges/quality-score.png?b=continuous_integration)](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-portlets/?branch=continuous_integration)
[![Code Coverage](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-portlets/badges/coverage.png?b=continuous_integration)](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-portlets/?branch=continuous_integration)
[![Build Status](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-portlets/badges/build.png?b=continuous_integration)](https://scrutinizer-ci.com/g/gordonbanderson/weboftalent-portlets/build-status/continuous_integration)
[![codecov.io](https://codecov.io/github/gordonbanderson/weboftalent-portlets/coverage.svg?branch=continuous_integration)](https://codecov.io/github/gordonbanderson/weboftalent-portlets?branch=continuous_integration)

[![Latest Stable Version](https://poser.pugx.org/weboftalent/portlets/version)](https://packagist.org/packages/weboftalent/portlets)
[![Latest Unstable Version](https://poser.pugx.org/weboftalent/portlets/v/unstable)](//packagist.org/packages/weboftalent/portlets)
[![Total Downloads](https://poser.pugx.org/weboftalent/portlets/downloads)](https://packagist.org/packages/weboftalent/portlets)
[![License](https://poser.pugx.org/weboftalent/portlets/license)](https://packagist.org/packages/weboftalent/portlets)
[![Monthly Downloads](https://poser.pugx.org/weboftalent/portlets/d/monthly)](https://packagist.org/packages/weboftalent/portlets)
[![Daily Downloads](https://poser.pugx.org/weboftalent/portlets/d/daily)](https://packagist.org/packages/weboftalent/portlets)

[![Dependency Status](https://www.versioneye.com/php/weboftalent:portlets/badge.svg)](https://www.versioneye.com/php/weboftalent:portlets)
[![Reference Status](https://www.versioneye.com/php/weboftalent:portlets/reference_badge.svg?style=flat)](https://www.versioneye.com/php/weboftalent:portlets/references)

![codecov.io](https://codecov.io/github/gordonbanderson/weboftalent-portlets/branch.svg?branch=continuous_integration)
* Adds a convenience template call that allows one to search for N of a certain type of DataObject and then render them with a given template.

# Installation
    git clone git://github.com/gordonbanderson/weboftalent-portlets.git
    cd weboftalent-portlets
    git checkout stable30

The name of the output directory does not matter

# Usage

## Interface for Models
For a model to be rendered as a portlet, it must provide the 3 following methods and implement the RenderableAsPortlet interface

	public function getPortletTitle();
	public function getPortletImage();
	public function getPortletCaption();


## Templates
The model being rendered must implement the RenderableAsPortlet interface mentioned previously.  An example call to render portlets is as follows:

	$RenderPortlet('Activity','','Title',2,'SmallTitleAndImage')

The parameters are as follows:

* The class name, in this case we are looking objects of class Activity
* Filter, i.e. the WHERE clause of the search.  In this case no filter has been applied
* The sort field, in this case title.
* The number of items to return, in this case 2
* The name of the template used to render the portlets, here _SmallTitleAndImage_

In the template used to render the portlet, the records can be accessed using &lt;control Records&gt; - an example is below.

	<ul class="slides">
	<% control Records %>
	<li>
	<a href="$Link"><h5>$PortletTitle</h5>
	<% control PortletImage %><% control SetWidth(170) %><img src="$URL"/><% end_control %><% end_control %>
	</a>
	<% end_control %>
	</li>
	</ul>



## Silverstripe Version Compatibility
2.4 (tested with 2.4.5+) - stable24 branch
3.0 - stable30 branch

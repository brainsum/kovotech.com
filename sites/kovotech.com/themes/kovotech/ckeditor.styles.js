/*
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

/*
 * This file is used/requested by the 'Styles' button.
 * The 'Styles' button is not enabled by default in DrupalFull and DrupalFiltered toolbars.
 */
if(typeof(CKEDITOR) !== 'undefined') {
    CKEDITOR.addStylesSet( 'drupal',
    [
            { name : 'Marker: Yellow'	, element : 'span', styles : { 'background-color' : 'Yellow' } },
            { name : 'Marker: Green'	, element : 'span', styles : { 'background-color' : 'Lime' } },
            { name : 'Marker: Red'	, element : 'span', styles : { 'background-color' : '#cc0000' } },
            { name : 'Text:Justified'		, element : 'p', styles : { 'text-align' : 'justify' } },
            { name : 'Text:Big'				, element : 'big' },
            { name : 'Text:Small'			, element : 'small' },
            { name : 'Computer Code'	, element : 'code' },
            { name : 'Cited Work'		, element : 'cite' },

            { name : 'Align:Left', element : 'div', attributes : { 'class' : 'float-left' } },
            { name : 'Align:Right', element : 'div', attributes : { 'class' : 'float-right' } }
    ]);
}
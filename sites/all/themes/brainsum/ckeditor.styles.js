/*
Copyright (c) 2003-2012, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

/*
  * This file is used/requested by the 'Styles' button.
  * * The 'Styles' button is not enabled by default in DrupalFull and DrupalFiltered toolbars.
  * * */
if(typeof(CKEDITOR) !== 'undefined') {
    CKEDITOR.addStylesSet( 'drupal',
    [
            { name : 'Marker: Yellow'	, element : 'span', styles : { 'background-color' : '#FFFF00' } },
            { name : 'Marker: Green'	, element : 'span', styles : { 'background-color' : '#00FF00' } },
            { name : 'Marker: Red'	, element : 'span', styles : { 'background-color' : '#FF0000' } },
            { name : 'Text:Justified'		, element : 'p', styles : { 'text-align' : 'justify' } },
            { name : 'Text:Big'				, element : 'big' },
            { name : 'Text:Small'			, element : 'small' },
            { name : 'Computer Code'	, element : 'code' },
            { name : 'Cited Work'		, element : 'cite' },

            { name : 'Align: Left', element : 'div', styles : { 'float' : 'left' , 'padding' : '0px 20px 10px 0px' } },
            { name : 'Align: Right', element : 'div', styles : { 'float' : 'right' , 'padding' : '0px 0px 10px 20px' } },
            { name : 'Align: Clear', element : 'div', styles : { 'clear' : 'both' } },
            { name : 'Add border', element : 'p', styles : { 'border' : '1px solid #000' , 'padding' : '3px' } },
    ]);
}
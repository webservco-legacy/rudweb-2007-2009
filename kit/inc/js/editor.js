/*
./inc/js/editor.js
16:48 2008-03-11
*/

FCKConfig.ToolbarSets["Default"] = [
	['Source','DocProps','-','Save','NewPage','Preview','-','Templates'],
	['Cut','Copy','Paste','PasteText','PasteWord','-','Print','SpellCheck'],
	['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
	['Form','Checkbox','Radio','TextField','Textarea','Select','Button','ImageButton','HiddenField'],
	'/',
	['Bold','Italic','Underline','StrikeThrough','-','Subscript','Superscript'],
	['OrderedList','UnorderedList','-','Outdent','Indent','Blockquote'],
	['JustifyLeft','JustifyCenter','JustifyRight','JustifyFull'],
	['Link','Unlink','Anchor'],
	['Image','Flash','Table','Rule','Smiley','SpecialChar','PageBreak'],
	'/',
	['Style','FontFormat','FontName','FontSize'],
	['TextColor','BGColor'],
	['FitWindow','ShowBlocks','-','About']		// No comma for the last row.
] ;

FCKConfig.EnterMode = 'br' ;			// p | div | br
FCKConfig.ShiftEnterMode = 'p' ;	// p | div | br

FCKConfig.SkinPath = FCKConfig.BasePath + 'skins/ubws/' ;
if (navigator.appVersion.indexOf("MSIE")!=-1) {
  FCKConfig.SkinEditorCSS = FCKConfig.SkinPath + 'fckeditorie.css' ;	// FCKConfig.SkinPath + "|<minified css>" ;
}
else {
  FCKConfig.SkinEditorCSS = FCKConfig.SkinPath + 'fckeditor.css' ;	// FCKConfig.SkinPath + "|<minified css>" ;
}
FCKConfig.SkinDialogCSS = '' ;	// FCKConfig.SkinPath + "|<minified css>" ;


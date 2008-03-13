/*
./inc/js/editor.js
20:50 2008-03-12
*/

FCKConfig.ToolbarSets["rudweb"] = [
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

FCKConfig.SkinPath = FCKConfig.BasePath + 'skins/rudweb/' ;

if (navigator.appVersion.indexOf("MSIE")!=-1) {
  FCKConfig.SkinEditorCSS = FCKConfig.SkinPath + 'fck_editorie.css' ;	// FCKConfig.SkinPath + "|<minified css>" ;
}
else {
  FCKConfig.SkinEditorCSS = FCKConfig.SkinPath + 'fck_editor.css' ;	// FCKConfig.SkinPath + "|<minified css>" ;
}

if (navigator.appVersion.indexOf("MSIE")!=-1) {
  FCKConfig.SkinDialogCSS = FCKConfig.SkinPath + 'fck_dialogie.css' ;	// FCKConfig.SkinPath + "|<minified css>" ;
}
else {
  FCKConfig.SkinDialogCSS = FCKConfig.SkinPath + 'fck_dialog.css' ;	// FCKConfig.SkinPath + "|<minified css>" ;
}


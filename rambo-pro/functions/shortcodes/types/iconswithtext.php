<script type="text/javascript">
var IconswithtextDialog = {
	local_ed : 'ed',
	init : function(ed) {
		IconswithtextDialog.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	insert : function insertIconswithtext(ed) {
	 
		// Try and remove existing style / blockquote
		tinyMCEPopup.execCommand('mceRemoveNode', false, null);
		 
		// set up variables to contain our input values
		var fontawesome_icon = jQuery('input#fontawesome_icon').val();
		var fontawesome_text = jQuery('input#fontawesome_text').val();
		 
		 
		//set highlighted content variable
		var mceSelected = tinyMCE.activeEditor.selection.getContent();
		
		// setup the output of our shortcode
		var output = '';
		
		output = '&nbsp;';
		output = '[iconswithtext';
           if(fontawesome_icon) {	output += " fontawesome_icon='"+ fontawesome_icon +"' ";	}
           if(fontawesome_text) {	output += " fontawesome_text='"+ fontawesome_text +"' ";	}	
		output += ']';
		
		tinyMCEPopup.execCommand('mceReplaceContent', false, output);
		 
		// Return
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add(IconswithtextDialog.init, IconswithtextDialog);
 
</script>
<form action="/" method="get" accept-charset="utf-8">
	<table class="table table-bordered table-condensed">
    	<tbody>
		<tr><td class="lable-all">Font Awesome Icons name</td>
		 <td><input class="input-medium" type="text" name="fontawesome_icon" value="" id="fontawesome_icon" /></td>
		</tr>         
		 <tr><td class="lable-all">Description</td>
		 <td><input class="input-medium" type="text" name="fontawesome_text" value="" id="fontawesome_text" /></td>
		</tr>
    <td>&nbsp;</td>
<td><a href="javascript:IconswithtextDialog.insert(IconswithtextDialog.local_ed)" id="insert" style="display: block; line-height: 24px;">Insert</a></td>
</tbody>
</table>
</form>
<script type="text/javascript">
$(document).ready(function () { research_load(); });
function research_load()
{
	$("#research_menu").tree({
		rules : {
			// only nodes of type root can be top level nodes
			valid_children : [ "root" ]
		},
		types : {
			// all node types inherit the "default" node type
			"default" : {
				deletable : false,
				renameable : false
			},
			"category" : {
				draggable : false,
				valid_children : [ "folder" ],
				icon : { 
					image : "/template/images/icons/bug.png"
				}
			},
			"investigating" : {
				draggable : false,
				valid_children : [ "folder" ],
				icon : { 
					image : "/template/images/icons/loader.gif"
				}
			},
            "item_done" : {
				// the following three rules basically do the same
				valid_children : "none",
				max_children : 0,
				max_depth :0,
				icon : { 
					image : "/template/images/icons/accept.png"
				}
			},
            "item_investigating" : {
				// the following three rules basically do the same
				valid_children : "none",
				max_children : 0,
				max_depth :0,
				icon : { 
					image : "/template/images/icons/loader.gif"
				}
			},
			"item" : {
				// the following three rules basically do the same
				valid_children : "none",
				max_children : 0,
				max_depth :0,
				icon : { 
					image : "/template/images/icons/folder.png"
				}
			}
		},
		callback : {
			onchange : function (id) {
				var selectedId = $(id).attr('id');
				if(selectedId.substr(0,4) == 'item')
				{
					var id = selectedId.split("_");

					$.ajax({
						url: '/index.php/research/xml/research/'+id,
						success: function(data) {
							$("#research-content").html(data);
						}
					});

				}
			}
		}
	});
}
</script>

<div class="content" style="padding: 20px;">
	
<div class="research menu" id="research_menu" style="border: 1px solid #000; width: 200px; height: 600px;">
<?=$research_menu?>
	</div>
<div style="border: 1px solid #000; width: 700px; height: 600px; margin-top: -602px; margin-left: 220px;" id="research-content">n</div>
</div>

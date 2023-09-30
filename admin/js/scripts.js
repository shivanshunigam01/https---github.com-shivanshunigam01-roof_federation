var abc1 = 0; //Declaring and defining global increement variable

$(document).ready(function() {

//To add new input filess field dynamically, on click of "Add More Files" button below function will be executed
    $('#add_more1').click(function() {
        $(this).prev().append($("<div/>", {id: 'filediv1'}).fadeIn('slow').append(
                $("<input/>", {name: 'filess[]', type: 'file', id: 'filess'}),        
                $("<br/><br/>")
                ));
    });

//following function will executes on change event of filess input to select different filess	
		$('body').on('change', '#filess', function(){
            if (this.files && this.files[0]) {
                 abc1 += 1; //increementing global variable by 1
				
				var zs = abc1 - 1;
                var x = $(this).parent().find('#previewimg1' + zs).remove();
                $(this).before("<div id='abc1d"+ abc1 +"' class='abc1d'><img id='previewimg1" + abc1 + "' src=''/></div>");
               
			    var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
               
			    $(this).hide();
                $("#abc1d"+ abc1).append($("<img/>", {id: 'img', src: 'x.png', alt: 'delete'}).click(function() {
                $(this).parent().parent().remove();
                }));
            }
        });

//To preview image     
    function imageIsLoaded(e) {
        $('#previewimg1' + abc1).attr('src', e.target.result);
    };

    $('#upload').click(function(e) {
        var name = $(":filess").val();
        if (!name)
        {
            alert("First Image Must Be Selected");
            e.preventDefault();
        }
    });
	
		 
});

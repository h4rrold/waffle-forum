$(document).ready(function(){
    //load by id
    $('.directorieslist').on('change', function(){
        if(this.value == '0')
        {
            $( "input[name='directoryname']" ).val('');
            $( "select[name='parent_id']" ).val(0);
        }
        else 
        {
            $.ajax({
                url: 'getDirectory?id=' + this.value,            
                dataType : "json",                    
                success: function (data, textStatus) { 
                    console.log(data);
                    $( "input[name='directoryname']" ).val(data[0]['name'] );
                    $( "select[name='parent_id']" ).val( data[0]['parent_id'] );
                }               
            });
        }
    });

    $('.groupslist').on('change', function(){
        if(this.value == '0')
        {
            $( "input[name='groupname']" ).val('');
            $( "textarea[name='groupstyle']" ).val('');
        }
        else 
        {
            $.ajax({
                url: 'getGroup?id=' + this.value,            
                dataType : "json",                    
                success: function (data, textStatus) { 
                    console.log(data);
                    $( "input[name='groupname']" ).val(data[0]['name'] );
                    $( "textarea[name='groupstyle']" ).val( data[0]['style'] );
                }               
            });
        }
    });

    $(".userslist").on('change', function(){
        $.ajax({
            url: 'getUser?id=' + this.value,            
            dataType : "json",                    
            success: function (data, textStatus) { 
                $( "input[name='nickname']" ).val(data[0]['nickname'] );
                $( "input[name='email']" ).val( data[0]['email'] );
                $( "input[name='last_login']" ).val( data[0]['last_login'] );
                $( "input[name='last_ip']" ).val( data[0]['last_ip'] );
                $( "#preview-avatar" ).attr("src", data[0]['avatar'] );
                $( "input[name='group_id']" ).val( data[0]['group_id'] );
                $( "input[name='regdate']" ).val( data[0]['registration_date'] );
                $( "input[name='amount_of_messages']" ).val( data[0]['amount_of_messages'] );
                $( "textarea[name='bio']" ).val( data[0]['bio'] );
            }               
        });
      });
      //simple menu
      $(window).on('popstate', function(e){
        var curset = e.originalEvent.state == null ? 'settings1' : e.originalEvent.state.settings;
        $("#settings1").hide();
        $("#settings2").hide();
        $("#settings3").hide();
        $("#settings4").hide();
        $("#" + curset).show();
      });
    $(".menu").click(function(){
        window.history.pushState({settings: $(this).attr("target")}, "", $(this).attr("target"));
        //$("#settingsname").html($(this).attr("value"));
        $("#settings1").hide();
        $("#settings2").hide();
        $("#settings3").hide();
        $("#settings4").hide();
        $("#" + $(this).attr("target")).show();
    });

    //load all
    $.ajax({
        url: 'getGroups',            
        dataType : "json",                    
        success: function (data, textStatus) { 
            var html = "";
            $.each(data, function(i, val) {    
                html += "<option value='" + data[i]['id'] +"'>" + data[i]['name'] + "</option>";
            });
            $(".usergroup").html(html);
            html +="<option value='0'>New ... </option>";
            $(".groupslist").html(html);
            $( "input[name='groupname']" ).val(data[0]['name'] );
            $( "textarea[name='groupstyle']" ).val( data[0]['style'] );
        }               
    });
    $.ajax({
        url: 'getUsers',            
        dataType : "json",                    
        success: function (data, textStatus) { 
            var html = "";
            $.each(data, function(i, val) {    
                html += "<option value='" + data[i]['id'] +"'>" + data[i]['nickname'] + "</option>";
            });
            $(".userslist").html(html); 
            $( "input[name='nickname']" ).val(data[0]['nickname'] );
            $( "input[name='email']" ).val( data[0]['email'] );
            $( "input[name='last_login']" ).val( data[0]['last_login'] );
            $( "input[name='last_ip']" ).val( data[0]['last_ip'] );
            $( "#preview-avatar" ).attr("src", data[0]['avatar'] );
            $( "select[name='group_id']" ).val( data[0]['group_id'] );
            $( "input[name='regdate']" ).val( data[0]['registration_date'] );
            $( "input[name='amount_of_messages']" ).val( data[0]['amount_of_messages'] );
            $( "textarea[name='bio']" ).val( data[0]['bio'] );
        }               
    });
    
    $.ajax({
        url: 'getDirectories',            
        dataType : "json",                    
        success: function (data, textStatus) { 
            var html = "";
            $.each(data, function(i, val) {    
                html += "<option value='" + data[i]['id'] +"'>" + data[i]['name'] + "</option>";
            });
            $(".directorieslist").html(html + "<option value='0'>New ...</option>");
            html += "<option value='0'>No parent</option>";
            $(".parentlist").html(html);
            $( "input[name='directoryname']" ).val(data[0]['name'] );
            $( "select[name='parent_id']" ).val( data[0]['parent_id'] );
        }               
    });
});
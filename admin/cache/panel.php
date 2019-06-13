<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Light admin panel</title>
    <link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <style type="text/css">
        .placeholder {
            background-color: rgba(0,0,0,0.1);
            height: 32px;
        }
        .tile {
            user-select: none;
            padding: 5px;
            margin: 0px;
            margin-bottom: 5px;
        }
        .grid {
            margin-top: 1em;
        }
        html{ 
            background: #508991;
            font-size: 14px; 
            font-family: 'Century Gothic';
            padding: 0;
            margin: 0;
        }
        .header{
            font-size: 20px;
            font-family: 'Century Gothic';
            height:50px;
            background: #004346;
            color: white;
            line-height: 50px;
        }
        #logout{
            font-size: 14px;
            margin-left:20px;
        }
        .mainmenu {
            background: #508991;
            padding: 5px;
        }
        .menu {
            padding-top: 15px;
            padding-bottom: 15px;
            margin-top: 5px;
            margin-bottom: 5px;
            background: white;
            box-shadow:none;
        }
        .menu:hover 
        {
            background: #EEEEEE;
            box-shadow: 0 0 15px rgba(0,0,0,0.2);
        }
        .settings {
            padding: 20px;
            padding-top: 10px;
            background: white;
            margin-top: 5px;
        }
        a.sitename {
            color:white;
            text-decoration: none; 
        }
    </style>
        
    <script src="public/js/panel.js"></script>
</head>
<body>
    <div class="container-fluid header">
        <div class="col-md-2">
        <i class="fas fa-lightbulb"></i> 
        <a href="panel" class="sitename">waffle-forum</a>
        </div>
        <div class="col-md-10">
            logged in as: <?=$username?> &emsp; last online: <?=$lastlogin?> &emsp; from ip: <?=$lastip?>
            <a href="logout" id="logout"> logout </a>
        </div>
    </div>
    <div class="container-fluid mainmenu">
        <div class="modal fade" id="adminModal" role="dialog">
            <div class="modal-dialog">
            
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">waffle-forum</h4>
                </div>
                <div class="modal-body">
                <p id='ajaxResponse'></p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            
            </div>
        </div>
        <div class="col-md-2">
            <div class="col-md-12 menu" target="settings1">
                <i class="fas fa-user"></i> Users
            </div>
            <div class="col-md-12 menu" target="settings2">
                <i class="fas fa-users-cog"></i> Groups
            </div>
            <div class="col-md-12 menu" target="settings3">
                <i class="fas fa-sitemap"></i> Directories
            </div>
            <div class="col-md-12 menu" target="settings4">
                <i class="fas fa-cogs"></i> Forum settings
            </div>
        </div>
        <div class="col-md-10 settings">
            <div class="col-md-12" id="settings1" style="display: <?php if($page == 'settings1' || !$page) echo 'block'; else echo 'none';?> ;">
                <h1 id="settingsname">Users settings</h1>
                <form action="saveUsers" method="post" enctype="multipart/form-data">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="usersel">Users list:</label>
                        <input type="text" class="form-control" id="filter-userslist" placeholder="Enter nickname..." name="hidden"><br>
                        <select class="form-control userslist" id="usersel" size="20" name="id">
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    Nickname:<br>
                    <input type="text" name="nickname" class="form-control"><br>
                    Email:<br>
                    <input type="email" name="email" class="form-control"><br>
                    Password:<br>
                    <input type="password" name="pass" class="form-control" autocomplete="new-password"><br>
                    Confirm password:<br>
                    <input type="password" name="" class="form-control"><br>
                    Last login:<br>
                    <input type="text" name="last_login" readonly disabled class="form-control"><br>
                    Last ip:<br>
                    <input type="text" name="last_ip" readonly disabled class="form-control"><br>
                </div>
                <div class="col-md-4">
                Avatar:
                    <input type="file" name="avatar" class="form-control"><br>
                    <img id="preview-avatar" src="" height="80" width="80" style="margin-bottom:8px;"/><br>
                    Group:<br>
                    <select class="usergroup form-control" name="group_id" size="1">
                    
                    </select><br>
                    
                    Bio:<br>
                    <textarea rows = "5" cols = "60" name = "bio" style="resize: none;" class="form-control"></textarea><br>
                    <div class="col-md-6"><input type="submit" value="Update" class="form-control"></div>
                    <div class="col-md-6"><button type="button" class="form-control"><p style="color:red;"> <i class="fas fa-times"></i> Delete</p></button></div>
                    </div>
                </div>
            </form>
            <div class="col-md-12" id="settings2" style="display: <?php if($page == 'settings2') echo 'block'; else echo 'none';?> ;">
                <h1 id="settingsname">Groups settings</h1>
                <form action="saveGroups" method="post">
                <div class="col-md-4">
                    <label for="grolist">Groups list:</label><br>
                    <select class="form-control groupslist" name='id' id='grolsit' size="8">
                    </select><br>
                    Name of group:<br>
                    <input type="text" name="groupname" class="form-control"><br>
                    Style:<br>
                    <textarea rows = "5" cols = "60" name = "groupstyle" style="resize: none;" class="form-control"></textarea><br>
                    <div class="col-md-6"><input type="submit" value="Send" class="form-control"></div>
                    <div class="col-md-6"><button type="button" class="form-control"><p style="color:red;"> <i class="fas fa-times"></i> Delete</p></button></div>
                </div>
                </form>
            </div>
            <div class="col-md-12" id="settings3" style="display: <?php if($page == 'settings3') echo 'block'; else echo 'none';?> ;">
                <h1 id="settingsname">Directories settings</h1>
                 <!--<form action="saveDirectories" method="post">
                 <select class="directorieslist" name="id">

                </select><br>
                  Directory name
                  <br>
                  <input type="text" id="directoryname" name="directoryname">
                  <br>
                  Parent
                  <br>
                  <select class="parentlist" name="parent_id">

                    </select><br>
                  <br>
                  <input type="submit" value="Send">
                </form>-->
                <div class="col-md-5">
                    <div class="row grid span8 dirlist" size="5">
                    </div><br>
                    <button class="form-control" id="saveDirectories">Save</button>
                </div>
            </div>
            <div class="col-md-12" id="settings4" style="display: <?php if($page == 'settings4') echo 'block'; else echo 'none';?> ;">
                <h1 id="settingsname">Forum general settings</h1>
                <div class="col-md-4">
                <form action="saveForumsettings" method="post" enctype="multipart/form-data">
                  Forum's name
                  <br>
                  <input type="text" id="forumname" value="waffle-forum" readonly disabled class="form-control">
                  <br>
                  Favicon
                  <br>
                  <input type="file" id="favicon" accept="image/jpeg,image/png" name="siteicon" class="form-control">
                  <br>
                  
                  <img src="/favicon.ico" height='80'/>
                  <br>
                  Logo
                  <input type="file" id="logo" name="sitelogo" class="form-control">
                  <br>
                  <img src="/logo.jpg" height="80" />
                  <br>
                  <input type="submit" value="Send" class="form-control">
                </form>
                </div>
        </div>
    </div>
</body>
</html>
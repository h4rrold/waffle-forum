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
    <style type="text/css">
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
        }
        .menu:hover 
        {
            background: #EEEEEE;
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
            logged in as: {{$username}} &emsp; last online: {{$lastlogin}} &emsp; from ip: {{$lastip}}
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
                    <select class="userslist" name="id">
                    
                    </select><br><br>
                    Nickname:<br>
                    <input type="text" name="nickname"><br>
                    Email:<br>
                    <input type="email" name="email"><br>
                    Password:<br>
                    <input type="password" name="pass"><br>
                    Confirm password:<br>
                    <input type="password" name=""><br>
                    Last login:<br>
                    <input type="text" name="last_login" readonly disabled><br>
                    Last ip:<br>
                    <input type="text" name="last_ip" readonly disabled><br>
                    Avatar:
                    <input type="file" name="avatar"><br>
                    <img id="preview-avatar" src="" height="80" width="80"/><br>
                    Group:<br>
                    <select class="usergroup" name="group_id">
                    
                    </select><br>
                    Registration date:<br>
                    <input type="text" name="regdate" readonly disabled><br>
                    Amount of message:<br>
                    <input type="number" name="amount_of_messages"><br>
                    Bio:<br>
                    <textarea rows = "5" cols = "60" name = "bio" style="resize: none;"></textarea><br>
                    <input type="submit" value="Send">
                </form>
            </div>
            <div class="col-md-12" id="settings2" style="display: <?php if($page == 'settings2') echo 'block'; else echo 'none';?> ;">
                <h1 id="settingsname">Groups settings</h1>
                <form action="saveGroups" method="post">
                    <select class="groupslist" name='id'>
                    
                    </select><br>
                    Name of group:<br>
                    <input type="text" name="groupname"><br>
                    Style:<br>
                    <textarea rows = "5" cols = "60" name = "groupstyle" style="resize: none;"></textarea><br>
                    <input type="submit" value="Send">
                </form>
            </div>
            <div class="col-md-12" id="settings3" style="display: <?php if($page == 'settings3') echo 'block'; else echo 'none';?> ;">
                <h1 id="settingsname">Directories settings</h1>
                 <form action="saveDirectories" method="post">
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
                </form>
            </div>
            <div class="col-md-12" id="settings4" style="display: <?php if($page == 'settings4') echo 'block'; else echo 'none';?> ;">
                <h1 id="settingsname">Forum general settings</h1>
                <form action="saveForumsettings" method="post" enctype="multipart/form-data">
                  Forum's name
                  <br>
                  <input type="text" id="forumname" value="waffle-forum" readonly disabled>
                  <br>
                  Favicon
                  <br>
                  <input type="file" id="favicon" accept="image/jpeg,image/png" name="siteicon">
                  <br>
                  
                  <img src="/favicon.ico" height='80'/>
                  <br>
                  Logo
                  <input type="file" id="logo" name="sitelogo">
                  <br>
                  <img src="/logo.jpg" height="80" />
                  <br>
                  <input type="submit" value="Send">
                </form>
        </div>
    </div>
</body>
</html>
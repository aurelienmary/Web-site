<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<div class="well">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
      <li><a href="#profile" data-toggle="tab">Password</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
        
        <form id="tab" method="post" action="index.php?cible=admin&fonction=edition">
            <label>Username</label>
            <input type="text" name="name" value="<?php echo $_POST['name']?>" class="input-xlarge">
            
            <label>Last Name</label>
            <input type="text" name="lastname" value="<?php echo $_POST['lastname']?>" class="input-xlarge">
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $_POST['email']?>" class="input-xlarge">
            <label>Address</label>
            <textarea name="adress" value="<?php echo $_POST['adress']?>" rows="3" class="input-xlarge">
            </textarea>
            <input type="hidden" name="id" value="<?php echo $_POST['id'] ?>" />
            
            
          	<div>
        	    <input type="submit" class="btn btn-primary" value="Modifier">
        	</div>
        </form>
      </div>
      <div class="tab-pane fade" id="profile">
    	<form id="tab2">
        	<label>New Password</label>
        	<input type="password" class="input-xlarge">
        	<div>
        	    <button class="btn btn-primary">Update</button>
        	</div>
    	</form>
      </div>
  </div>
<html>
<head></head>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
      rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="<?php echo base_url(); ?>js/dynamic.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/dynamic.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<body>
<div class="container">
	<div class="row">
        <div class="control-group" id="fields">
            <label class="control-label" for="field1">Nice Multiple Form Fields</label>
            <div class="controls"> 
                <form role="form" autocomplete="off" action="upload" method="post">
                    <div class="entry input-group col-xs-3">
                        <input class="form-control" name="firstname[]" type="text" placeholder="First Name" />
                        <input class="form-control" name="lastname[]" type="text" placeholder="Last name" />
                        <input class="form-control" name="email[]" type="text" placeholder="Type something" />

                        <input class="form-control" name="password[]" type="password" placeholder="Type something" />
                        <!-- <input class="form-control" name="fields[]" type="text" placeholder="Type something" /> -->
                        

                    	<span class="input-group-btn">
                            <button class="btn btn-success btn-add" type="button">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>

                    </div>
                    <input class="form-control" type="submit"  value="submit"/>
                </form>
            <br>
            <small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field :)</small>
            </div>
        </div>
	</div>
</div>
</body>
</html>
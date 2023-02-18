<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
	<form>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Event Name</label>
	    <input type="text" class="form-control" id="exampleEventName" placeholder="Enter email">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">event_date</label>
	    <input type="date" class="form-control" id="exampleEventDate" >  
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Organizer Email</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Organizer Phone</label>
	    <input type="tel" class="form-control" pattern="[0-9]{10}" id="examplePhone" placeholder="phone">
	  </div>
	  <div class="form-group">
    	    <label for="exampleFormControlTextarea1">Event Description</label>
    	    <textarea class="form-control" id="exampleDescription" rows="3"></textarea>
  	  </div>
	  <div class="form-row">
	    <div class="form-group col-md-6">
	      <label for="inputCity">Event Location</label>
	      <input type="text" class="form-control" id="exampleLocation">
	    </div>
	  </div>
	  <div class="form-group">
	    <label for="exampleFormControlSelect1">event_status</label>
	    <select class="form-control" id="exampleStatus">
	      <option>Live</option>
	      <option>Completed</option>
	      <option>Scheduled</option>
	    </select>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputEmail1">Max Seat</label>
	    <input type="number" class="form-control" id="exampleSeat" placeholder="Max Seat">
	  </div>
	  <br>
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</body>
</html>
